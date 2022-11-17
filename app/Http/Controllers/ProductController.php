<?php

namespace App\Http\Controllers;

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

}
