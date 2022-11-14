<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Category;
use App\Models\Childcategory;
use App\Models\Fabric;
use App\Models\Product;
use App\Models\Productalbum;
use App\Models\Productimg;
use App\Models\Productsize;
use App\Models\Size;
use App\Models\Subcategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;
use Validator;
use Image;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{

    public function ProductIndex()
    {
        $products = Product::latest()->get();
        return view ('back.product.index',compact('products'));
    }


    public function ProductAdd()
    {
        $categories = Category::get();
        $fabrics = Fabric::get();
        $avail_size = Size::all();
        $campaigns = Campaign::where('status',1)->orderBy('id','DESC')->get();
        $total_product = Product::count();
        return view('back.product.create',compact('avail_size','categories','fabrics','total_product','campaigns'));
    }

    public function ProductSave(Request $request)
           {

               $created_by=Auth::guard('admin')->user()->id;
               $totalnumberofinserteddata = 0;
               $numberofboxedchecked = 0;
               $current_date = date("d-m-Y");
               $vaildation = Validator::make($request->all(), [
                   'txtproductname' => 'required|min:4',
                   'txtprice' => 'required'
               ]);
               if ($vaildation->fails()) {
                   return redirect()->back()->withErrors($vaildation)->withInput();
               } else {
                   $discount = $request->txtpricediscounted;
                   $original_price = $request->txtprice;
                   if ($discount >= 1) {
                       $discount_price = $original_price - $discount;
                       $discount_price = ($discount_price * 100) / $original_price;
                   } else {
                       $discount_price = 0;
                   }
                   if ($request->campaign) {
                       $specialcollection = $request->campaign;
                   } else {
                       $specialcollection = 0;
                   }

                   $product=new Product();
                   $product->cat_id=$request->category;
                   $product->sub_cat_id=$request->sub_category;
                   $product->child_cat_id=$request->child_category;

                   $product->product_name=$request->txtproductname;
                   $product->fabric= $request->fabric;

                   $product->product_price=$request->txtprice;
                   $product->discount_product_price=$discount_price;
                   $product->product_styleref = $request->txtstyleref;
                   $product->product_description = $request->txtproductdetails;
                   $product->product_care = $request->txtproductcare;
                   $product->created_by=$created_by;
                   $product->isSpecial=$specialcollection;
                   $product->sold=$request->txtorder;
                   $product->add_date= date('Y-m-d');;
                   $product->save();

                   $product_id=$product->id;

                   $total_grp = $request->total_grp;
                   for ($loopcountermain = 1; $loopcountermain <= $total_grp; $loopcountermain++) {
                       $txtcolorvalname = "txtcolorname_" . $loopcountermain;
                       $color_name_post = "txtcolorname_" . $loopcountermain;
                       $txtcolovalue = $request->$color_name_post;
                       $colorfilethm = "file_colorthm_" . $loopcountermain;
                       $totalnumberofavailabesize = session('numberofavailabesize');
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
                               $productsize=new Productsize();
                               $productsize->product_id = $product->id;
                               $productsize->barcode = $barcode;
                               $productsize->productsize_size = $productsizaname;
                               $productsize->SizeWiseQty = $productsizquantity;
                               $productsize->color_name = $txtcolovalue;
                               $productsize->save();
                               $productsize_id=$productsize->id;
                               if ($productsize_id) {
                                   $totalnumberofinserteddata++;
                               } else {

                               }
                           } else {

                           }
                       }
                       if ($totalnumberofinserteddata == $numberofboxedchecked) {
                           //dd($request);
                           $productalbum=new Productalbum();
                           $productalbum->product_id=$product->id;
                           $productalbum->productalbum_name=$txtcolovalue;
                           $productalbum->productalbum_order=$loopcountermain;
                           $productalbum->created_by=$created_by;
                           $productalbum->save();
                           $productalbum_id=$productalbum->id;
                           if ($productalbum_id) {
                               if ($request->hasFile($colorfilethm)) {
                                   $file = $request->file($colorfilethm);
                                   $savename = $productalbum_id . '_album_thm_' . $file->getClientOriginalName();
                                   $image = Image::make($request->file($colorfilethm))->save('pgallery/' . $savename);
                                   if ($image) {
                                       Productalbum::where('id', $productalbum_id)->update(['productalbum_img'=>$savename]);
                                       for ($filecounter = 1; $filecounter <= 6; $filecounter++) {
                                           $imageid = NULL;
                                           $imgfieldname = "file_im" . $filecounter . "_" . $loopcountermain;
                                           if ($request->hasFile($imgfieldname)) {
                                               $file = $request->file($imgfieldname);
                                               $filename = $product_id . "_product_image_" . $filecounter . "_" . $file->getClientOriginalName();
                                               $image = Image::make($request->file($imgfieldname))->save('pgallery/' . $filename);
                                               $productimg=new Productimg();
                                               $productimg->productalbum_id=$productalbum_id;
                                               $productimg->created_by=$created_by;
                                               $productimg->productimg_order='';
                                               $productimg->save();
                                               $productimg_id = $productimg->id;
                                               if ($image) {
                                                   $width = Image::make($request->file($imgfieldname))->width();
                                                   $height = Image::make($request->file($imgfieldname))->height();
                                                   if ($width >= 1290 && $width <= 1310 && $height >= 1657 && $height <= 1677) {
                                                       //upload thm file
                                                       $filenamethmb = $product_id . "_product_image_" . $filecounter . "_thm_" . $file->getClientOriginalName();
                                                       $image = Image::make($request->file($imgfieldname))->resize(200, 300)->save('pgallery/' . $filenamethmb);
                                                       //upload tiny file
                                                       $filenametiny = $product_id . "_product_image_" . $filecounter . "_tiny_" . $file->getClientOriginalName();
                                                       $image = Image::make($request->file($imgfieldname))->resize(64, 96)->save('pgallery/' . $filenametiny);
                                                       //upload medium file
                                                       $filenamemedium = $product_id . "_product_image_" . $filecounter . "_medium_" . $file->getClientOriginalName();
                                                       $image = Image::make($request->file($imgfieldname))->resize(370, 555)->save('pgallery/' . $filenamemedium);

                                                       Productimg::where('id', $productimg_id)->update(['productimg_img'=>$filename,'productimg_img_tiny'=>$filenametiny,
                                                           'productimg_img_medium'=>$filenamemedium,'productimg_img_thm'=>$filenamethmb,
                                                           'productimg_order'=>$filecounter]);

                                                       if ($filecounter == 1 && $loopcountermain == 1) {
                                                           Product::where('id',$product->id)->update(['product_img_thm'=>$filenamemedium]);
                                                       } else {

                                                       }
                                                   } else {
                                                       $productimg = Productimg::find($productimg_id);
                                                       $productimg->delete();

                                                       $productalbum = Productalbum::find($productalbum_id);
                                                       $productalbum->delete();

                                                       Product::where('id',$product_id)->update(['product_active_deactive'=>1,'trash'=>1]);
                                                       Toastr::error('Image size problem.Upload image size must be equal 1300 X 1667','error');
                                                       return back();
                                                   }
                                               }
                                           }
                                       }
                                   } else {

                                   }
                               } else {

                               }
                           } else {
                               Toastr::error('Product album not inserted!','error');
                               return back();
                           }
                       } else {

                       }
                   }
                   Toastr::success('Product upload successfully!','success');
                   return back();
               }

           }


    public function ProductEdit($id)
    {
        $categories = Category::get();
        $subcategories = Subcategory::get();
        $childcategories = Childcategory::get();
        $fabrics = Fabric::get();
        $avail_size = Size::all();
        $campaigns = Campaign::where('status',1)->orderBy('id','DESC')->get();
        $prosizes=Size::where('active',1)->get();
        $product=Product::find($id);
        return view ('back.product.edit',compact('avail_size','categories','fabrics','campaigns','product','subcategories','childcategories','prosizes'));
    }

    public function ProductUpdate(Request $request ,$id){
        if ($request->has('campaign')) {
            $isSpecial = $request->campaign;
        } else {
            $isSpecial = 0;
        }

        $discount = $request->txtpricediscounted;
        $original_price = $request->txtprice;


        if ($discount >= 1) {
            $discount_price = ($discount / 100) * $original_price;
            $price_with_discount=$original_price - $discount_price;
        } else {
            $price_with_discount = 0;
        }


        $product=Product::find($id);
        $product->cat_id=$request->category;
        $product->sub_cat_id=$request->sub_category;
        $product->child_cat_id=$request->child_category;
        $product->product_name=$request->txtproductname;
        if($request->fabric){
            $product->fabric= $request->fabric;
        }
        $product->product_price=$request->txtprice;
        $product->discount_product_price=$request->txtpricediscounted;
        $product->product_styleref = $request->txtstyleref;
        $product->product_description = $request->txtproductdetails;
        $product->product_short_description=$request->product_short_description;
        $product->product_care = $request->txtproductcare;
        $product->updated_by= Auth::guard('admin')->user()->id;
        $product->isSpecial= $product->isSpecial=$isSpecial;;
        $product->sold=$request->txtorder;
        $product->save();

        Toastr::success('Product Updated successfully!','success');
        return back();

    }


}
