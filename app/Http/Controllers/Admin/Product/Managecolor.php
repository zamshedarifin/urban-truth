<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Prosize;
use App\Models\Productsize;
use App\Models\Product;
use App\Models\Productalbum;
use App\Models\Productimg;
use Image;
use File;

class Managecolor extends Controller
{
    public static function GetColorProSize($id){
        $productsize=new Productsize();
        return  $productsize->productcolors($id);
    }

    public function update(Request $request){
        $album=Productalbum::find($request->id);
        $album->productalbum_name=$request->productalbum_name;
        $album->productalbum_order=$request->productalbum_order;
        if ($request->hasFile('productalbum_img')) {
            $productalbum_id=$request->id;
            $file = $request->file('productalbum_img');
            $savename = $productalbum_id . 'update_album_thm_' . $file->getClientOriginalName();
            Image::make($request->file('productalbum_img'))->save('public/pgallery/' . $savename);
            File::delete("public/pgallery/$album->productalbum_img");
            $album->productalbum_img=$savename;
        }
        $album->save();
        return redirect()->back()->with('save', 'Update album image successfully');
    }

    public function save(Request $request){


        $totalnumberofinserteddata = 0;
        $numberofboxedchecked = 0;
        $totalnumberofavailabesize = session('numberofavailabesize');


        $product_id = $request->product_id;
        $total_grp = $request->total_grp;


        for ($loopcountermain = 1; $loopcountermain <= $total_grp; $loopcountermain++) {

            $color_name_post = "txtcolorname_" . $loopcountermain;
            $txtcolovalue = $request->$color_name_post;
            $colorfilethm = "file_colorthm_" . $loopcountermain;
            for ($loopcountersize = 1; $loopcountersize <= $totalnumberofavailabesize; $loopcountersize++) {
                $checkboxvarname = "size" . $loopcountersize . "_" . $loopcountermain;
                $checkboxvarvalename = "input_size" . $loopcountersize . "_" . $loopcountermain;
                $checkboxvarvalename_barcode = "barcode_input_size" . $loopcountersize . "_" . $loopcountermain;
                if ($request->$checkboxvarname == TRUE) {
                    $productsizaname = $request->$checkboxvarname;
                    $productsizquantity = $request->$checkboxvarvalename;
                    $barcode=$request->$checkboxvarvalename_barcode;
                    $numberofboxedchecked++;
                    if ($productsizquantity > 0) {
                    } else {
                        $productsizquantity = 0;
                    }
                    $size=new Productsize();
                    $size->product_id=$product_id;
                    $size->barcode=$barcode;
                    $size->productsize_size=$productsizaname;
                    $size->SizeWiseQty=$productsizquantity;
                    $size->color_name=$txtcolovalue;
                    $size->save();
                    if ($size->id) {
                        $totalnumberofinserteddata++;
                    }
                }

            }
            if ($totalnumberofinserteddata == $numberofboxedchecked) {
                $album=new Productalbum();
                $album->product_id=$product_id;
                $album->productalbum_name=$txtcolovalue;
                $album->save();
                $productalbum_id=$album->id;
                if ($productalbum_id) {
                    if ($request->hasFile('file_colorthm')) {
                        $file = $request->file('file_colorthm');
                        $savename = $productalbum_id . '_album_thm_' . $file->getClientOriginalName();
                        $image = Image::make($request->file('file_colorthm'))->save('public/pgallery/' . $savename);
                        if ($image) {
                            $update_album=Productalbum::find($productalbum_id);
                            $update_album->productalbum_img=$savename;
                            $update_album->save();
                            for ($filecounter = 1; $filecounter <= 6; $filecounter++) {
                                $imageid = NULL;
                                echo $imgfieldname = "file_im" . $filecounter;
                                if ($request->hasFile($imgfieldname)) {
                                    $file = $request->file($imgfieldname);
                                    $filename = $product_id . "_product_image_" . $filecounter . "_" . $file->getClientOriginalName();
                                    $image = Image::make($request->file($imgfieldname))->resize(1300, 1667)->save('public/pgallery/' . $filename);
                                    $proimage=new Productimg();
                                    $proimage->productalbum_id=$productalbum_id;
                                    $proimage->productimg_order=$filecounter;
                                    $proimage->save();
                                    $productimg_id = $proimage->id;
                                    if ($image) {
                                        $width = Image::make($request->file($imgfieldname))->width();
                                        $height = Image::make($request->file($imgfieldname))->height();
                                        if ($width >= 1290 && $width <= 1310 && $height >= 1657 && $height <= 1677) {
                                            //upload thm file
                                            $filenamethmb = $product_id . "_product_image_" . $filecounter . "_thm_" . $file->getClientOriginalName();
                                            $image = Image::make($request->file($imgfieldname))->resize(200, 300)->save('public/pgallery/' . $filenamethmb);
                                            //upload tiny file
                                            $filenametiny = $product_id . "_product_image_" . $filecounter . "_tiny_" . $file->getClientOriginalName();
                                            $image = Image::make($request->file($imgfieldname))->resize(64, 96)->save('public/pgallery/' . $filenametiny);
                                            //upload medium file
                                            $filenamemedium = $product_id . "_product_image_" . $filecounter . "_medium_" . $file->getClientOriginalName();
                                            $image = Image::make($request->file($imgfieldname))->resize(370, 555)->save('public/pgallery/' . $filenamemedium);
                                            $image=Productimg::find($productimg_id);
                                            $image->productimg_img=$filename;
                                            $image->productimg_img_tiny=$filenametiny;
                                            $image->productimg_img_medium=$filenamemedium;
                                            $image->productimg_img_thm=$filenamethmb;
                                            $image->save();
                                            if ($filecounter == 1 && $loopcountermain == 1) {
                                                $product=Product::find($product_id);
                                                $product->product_img_thm=$filenamethmb;
                                                $product->save();
                                            } else {

                                            }
                                        } else {
                                            Productalbum::where('id',$productalbum_id)->delete();
                                            Productimg::where('id', $productimg_id)->delete();

                                            Toastr::error('Image Size Do not match','error');
                                            return back();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        Toastr::success('New style add successfully !.','success');
        return back();
    }

    public function delete(Request $request){
        if ($request->serial == 1) {
            Toastr::error('You can not delete first album.Please update first album.','error');
            return back();
        }else{
            $album=Productimg::where('productalbum_id',$request->album_id)->get();
            if($album)
            {
                 foreach($album as $info)
                 {
                    $get_productimg = Productimg::find($info->id);
                    $product_tiny_image = $get_productimg->productimg_img_tiny;
                    $product_medium_image = $get_productimg->productimg_img_medium;
                    $productimg_img_thm = $get_productimg->productimg_img_thm;
                    $productimg_img = $get_productimg->productimg_img;
                     File::delete("public/pgallery/$product_tiny_image");
                     File::delete("public/pgallery/$product_medium_image");
                     File::delete("public/pgallery/$productimg_img_thm");
                     File::delete("public/pgallery/$productimg_img");
                    Productimg::where('id', $info->id)->delete();
                 }
            }
            $album_info=Productalbum::find($request->album_id);
            Productsize::where('product_id',$request->product_id)->where('color_name',$album_info->productalbum_name)->delete();
            Productalbum::where('id',$request->album_id)->delete();

            Toastr::success('Album deleted successfully!','success');
            return back();
        }
    }
}
