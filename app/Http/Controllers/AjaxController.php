<?php

namespace App\Http\Controllers;

use App\Models\Childcategory;
use App\Models\Fabric;
use App\Models\Product;
use App\Models\Productalbum;
use App\Models\Productimg;
use App\Models\Productsize;
use App\Models\Subcategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;


class AjaxController extends Controller
{
    public function getSubCategories(Request $request){
      $subcategory = Subcategory::where('cat_id',$request->cat_id)->get();
        return json_encode($subcategory);
    }

    public function getChildCategories(Request $request){
        $subcategory = Childcategory::where('sub_cat_id',$request->cat_id)->get();
        return json_encode($subcategory);
    }

    public function getFabric(Request $request)
    {
        $fabric = Fabric::where('id',$request->fabric)->first();

        return json_encode($fabric);
    }

    public function getAlbum(Request $request)
    {
        $albumImages = Productimg::where('productalbum_id',$request->albumId)->get();
        return json_encode($albumImages);
    }

    public function popup(Request $request)
    {
        $product_id=$request->id;
        $product_color=$request->color;
        $data['singleproduct'] = Product::where('id', $product_id)->first();
        $productalbum = Productalbum::where('product_id', $product_id)->where('productalbum_name',$product_color)->first();
        $data['singleproductmultiplepic'] = Productimg::where('productalbum_id', $productalbum->id)->orderBy('id', 'ASC')->take(3)->get();
        $data['cart_image'] = Productimg::where('productalbum_id', $productalbum->id)->orderBy('id', 'ASC')->first();
        $data['product_color_image'] = Productalbum::where('product_id', $product_id)->get();

        $data['product_sizes'] = Productsize::where('product_id', $product_id)->where('color_name',$product_color)->get();
        $data['product_qty'] = Productsize::where('product_id', $product_id)->sum('SizeWiseQty');
        $data['selected_color']=$product_color;
        $data['product_color']=$product_color;
        $data['product_selected_color'] = Productalbum::where('product_id', $product_id)->where('productalbum_name', $product_color)->first();
        $product_name = str_replace(' ', '-', $data['singleproduct']->product_name);
        $product_url = strtolower($product_name);
        $data['details_link']="shop/".$product_url."/color-".$product_color."/".$product_id;
        return view('front.include.quick_view',$data);
    }


    public function getQuantityByColor($product_id, $product_size, $color_name) {
        $size=new Productsize();
        $product_id=htmlentities($product_id);
        $product_size=htmlentities($product_size);
        $color_name=htmlentities($color_name);
        $color_name=str_replace("-","/",$color_name);
        $qty = $size->getsizewiseqtysum($product_id,$product_size,$color_name);
        return json_encode($qty);
    }

}
