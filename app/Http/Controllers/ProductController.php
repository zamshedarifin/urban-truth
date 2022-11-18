<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Productalbum;
use App\Models\Productimg;
use App\Models\Productsize;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{

    public static function GetProductImage($product_id)
    {
        $color_album = Productalbum::where('product_id', $product_id)
            ->orderby('id', 'DESC')
            ->first();

        $products = Productimg::where('productalbum_id', $color_album->id)->orderBy('productimg_order', 'ASC')
            ->orderBy('id', 'ASC')->first();
        return $products;
    }

    public static function productImages($album_id)
    {

        $color_album = Productalbum::where('product_id', $album_id)->orderby('id', 'DESC') ->first();

        $images = array();
        $first = Productimg::where('productalbum_id', $color_album->id)
            ->orderBy('id','ASC')->take(1)->first();

        array_push($images, $first);

        $last = Productimg::where('productalbum_id', $color_album->id)
            ->orderBy('id','DESC')->take(1)->first();
        array_push($images, $last);
        return $images;
    }

    public static function GetColors($pro_id)
    {
        $color_album = Productalbum::where('product_id', $pro_id)
            ->orderby('id', 'ASC')->get();
        return $color_album;
    }

    public static function GetProductQty($product_id)
    {
        $pQty = Productsize::where('product_id', $product_id)->sum('SizeWiseQty');
        return $pQty;
    }

    public function GetProductQtyForSolidAlert($product_id)
    {

        $balance = Productsize::where('product_id', $product_id)->sum('SizeWiseQty');
        echo $balance;
    }

    public function details($product_name, $product_color, $product_id)
    {
        $productColor=str_replace('color-','',$product_color);

        $product=new Product();
        $product->viewincrement($product_id);
        $data['product']= $product->details($product_id);
        $singleproduct['singleproduct']= $product->details($product_id);

        $album=new Productalbum();
        $productalbum =$album->getproductcolorwise($product_id,$productColor);
        $data['product_selected_color'] = $productalbum;
        $data['product_color_image'] = Productalbum::where('product_id', $product_id)->get();

        $img=new Productimg();
        $data['singleproductmultiplepic'] = $img->getsingleproductimgs($productalbum->id);
        $data['cart_image'] = Productimg::where('productalbum_id', $productalbum->id)->orderBy('id', 'ASC')->first();

        $size=new Productsize();
        $data['product_qty'] = Productsize::getqtysum($product_id);
        $data['product_sizes'] = $size->getsizescolorwise($product_id,$productColor);
        $data['product_color']=$productColor;


        $product_name = str_replace(' ', '-', $data['product']->product_name);
        $product_url = strtolower($product_name);
        $data['details_link']="shop/".$product_url."/color-".$productColor."/".$product_id;

        return view ('front.product.details',$data,$singleproduct);
    }

    public function getProductColors($categoryid, $child_cat)
    {
            $color_names = DB::table('products')
                ->join('productsizes','products.id' ,'=', 'productsizes.product_id')
                ->where('products.cat_id', $categoryid)
                ->where('products.child_cat_id', $child_cat)
                ->groupBy('color_name')
                ->orderBy('color_name')
                ->pluck('color_name')
                ->toArray();
            if($categoryid == 0 || $child_cat == 0)
                $color_names = DB::table('productsizes')
                    ->where('status', 1)
                    ->groupBy('color_name')
                    ->orderBy('color_name')
                    ->pluck('color_name')
                    ->toArray();
            return $color_names;
    }

}
