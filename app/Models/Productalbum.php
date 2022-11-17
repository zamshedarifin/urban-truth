<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productalbum extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function productimg()
    {
        return $this->hasMany('App\Models\Productimg');
    }

    public static function getlastablbum($product_id){
       $color_album= Productalbum::where('product_id', $product_id)
                ->orderby('id', 'DESC')
                ->first();
        return $color_album;
    }

    public static function getproductwise($product_id){
        $color_album = Productalbum::where('product_id', $product_id)
                ->orderby('id', 'DESC')
                ->get();
        return $color_album;
    }

    public function getproductcolorwise($product_id,$product_color){
        return Productalbum::where('product_id', $product_id)->where('productalbum_name', $product_color)->first();
    }
}
