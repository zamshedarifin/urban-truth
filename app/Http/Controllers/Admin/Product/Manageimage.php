<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Productsize;
use App\Models\Product;
use App\Models\Productalbum;
use App\Models\Productimg;
use Image;
use Storage;
use Validator;
use File;

class Manageimage extends Controller
{

    public function imageEdit($imageId, $serial=null, $productId=null){
        $image=Productimg::find($imageId);
        $product = Product::find($productId);
        $serial=$serial;
        $productId = $productId;
        return view('back.product.image.edit', compact('image','serial','productId','product'));
    }

    public function save(Request $request){
        $vaildation = Validator::make($request->all(), [
                    'filename' => 'required'
        ]);
        if ($vaildation->fails()) {
            return redirect()->back()->withErrors($vaildation)->withInput();
        } else {
        if ($request->hasFile('filename')) {
            $product_id=$request->product_id;
            $albumid=$request->album_id;
            $file = $request->file('filename');
            $filename = $albumid . "_product_image_" . $file->getClientOriginalName();
            $image = Image::make($request->file('filename'))->resize(1300, 1667)->save('public/pgallery/' . $filename);
            $width = Image::make($request->file('filename'))->width();
            $height = Image::make($request->file('filename'))->height();
            if ($width >= 1290 && $width <= 1310 && $height >= 1657 && $height <= 1677) {
                //upload thm file
                $filenamethmb = $product_id . "_product_image_thm_" . $file->getClientOriginalName();
                $image = Image::make($request->file('filename'))->resize(200, 300)->save('public/pgallery/' . $filenamethmb);
                //upload tiny file
                $filenametiny = $product_id . "_product_image_tiny_" . $file->getClientOriginalName();
                $image = Image::make($request->file('filename'))->resize(64, 96)->save('public/pgallery/' . $filenametiny);
                //upload medium file
                $filenamemedium = $product_id . "_product_image_medium_" . $file->getClientOriginalName();
                $image = Image::make($request->file('filename'))->resize(370, 555)->save('public/pgallery/' . $filenamemedium);
                $productimg =new Productimg();
                $productimg->productimg_order=$request->productimg_order;
                $productimg->productalbum_id=$albumid;
                $productimg->productimg_img=$filename;
                $productimg->productimg_img_tiny=$filenametiny;
                $productimg->productimg_img_medium=$filenamemedium;
                $productimg->productimg_img_thm=$filenamethmb;
                $productimg->save();
            } else {
                return redirect()->back()->with('error', 'upload size must be greater than or equal  1300 X 1667');
            }
            return redirect("admin/product/image/view?album_id=$albumid&product_id=$product_id")->with('update', 'Image added successfully!');
        }else{
            return redirect()->back()->with('error', 'Please select an image.');
        }
      }
    }

    public function update(Request $request){
        $image_id = $request->id;
        $product_id=$request->product_id;
        if ($request->hasFile('filename')) {
            $get_productimg = Productimg::find($request->id);
            $product_tiny_image = $get_productimg->productimg_img_tiny;
            $product_medium_image = $get_productimg->productimg_img_medium;
            $productimg_img_thm = $get_productimg->productimg_img_thm;
            $productimg_img = $get_productimg->productimg_img;
            File::delete("pgallery/$product_tiny_image");
            File::delete("pgallery/$product_medium_image");
            File::delete("pgallery/$productimg_img_thm");
            File::delete("pgallery/$productimg_img");
            $file = $request->file('filename');
            $filename = $image_id . "_product_image_" . $file->getClientOriginalName();
            $image = Image::make($request->file('filename'))->resize(1600, 2400)->save('pgallery/' . $filename);
            $width = Image::make($request->file('filename'))->width();
            $height = Image::make($request->file('filename'))->height();
            if ($width >= 1290 && $width <= 1310 && $height >= 1657 && $height <= 1677) {
                //upload thm file
                $filenamethmb = $product_id . "_product_image_thm_" . $file->getClientOriginalName();
                $image = Image::make($request->file('filename'))->resize(200, 300)->save('pgallery/' . $filenamethmb);
                //upload tiny file
                $filenametiny = $product_id . "_product_image_tiny_" . $file->getClientOriginalName();
                $image = Image::make($request->file('filename'))->resize(64, 96)->save('pgallery/' . $filenametiny);
                //upload medium file
                $filenamemedium = $product_id . "_product_image_medium_" . $file->getClientOriginalName();
                $image = Image::make($request->file('filename'))->resize(370, 555)->save('pgallery/' . $filenamemedium);
                $productimg = Productimg::find($request->id);
                $productimg->productimg_order=$request->productimg_order;
                $productimg->productimg_img=$filename;
                $productimg->productimg_img_tiny=$filenametiny;
                $productimg->productimg_img_medium=$filenamemedium;
                $productimg->productimg_img_thm=$filenamethmb;
                $productimg->save();
                if ($request->serial == 1) {
                    Product::where('id', $request->product_id)->update(['product_img_thm'=>$filenamemedium]);
                } elseif ($request->serial == 3) {

                }
            } else {
                Toastr::error('Image size problem.Upload image size must be equal 1300 X 1667.','error');
                return redirect()->back();
            }
            Toastr::success('Image edit successfully!','success');
            return redirect()->back();

        }
        Toastr::error('please select an image which size must be equal 1300 X 1667.','error');
        return redirect()->back();

    }

    public function delete($imageId, $singleId=null){
                if ($singleId == 0) {
            Toastr::error('You can not delete first image.Please update first image.','error');
//            return redirect()->back()->with('deactive', 'You can not delete first image.Please update first image.');
            return redirect()->back();
        }else{

                $get_productimg = Productimg::find($imageId);
                $product_tiny_image = $get_productimg->productimg_img_tiny;
                $product_medium_image = $get_productimg->productimg_img_medium;
                $productimg_img_thm = $get_productimg->productimg_img_thm;
                $productimg_img = $get_productimg->productimg_img;
                File::delete("pgallery/$product_tiny_image");
                File::delete("pgallery/$product_medium_image");
                File::delete("pgallery/$productimg_img_thm");
                File::delete("pgallery/$productimg_img");
                Productimg::where('id', $imageId)->delete();
                    Toastr::success('Image deleted successfully!','Success');
                return redirect()->back();

        }
    }

}
