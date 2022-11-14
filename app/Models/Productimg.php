<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Productimg extends Model
{
    use HasFactory;
    
    public function productalbum()
    {
        return $this->belongsTo('App\Models\Productalbum');
    }
    
    public static function getimagemulti($album_id){
        $images = array();
        $first = Productimg::where('productalbum_id', $album_id)
                ->orderBy('id','ASC')
				->take(1)
                ->first();
        array_push($images, $first); 
        $last = Productimg::where('productalbum_id', $album_id)
                ->orderBy('id','DESC')
				->take(1)
                ->first();
       array_push($images, $last);	
        return $images;
    }
    
    public static function getimagesingle($album_id){
        $images = Productimg::where('productalbum_id', $album_id)
                ->orderBy('productimg_order', 'ASC')
                ->orderBy('id', 'ASC')
                ->first();
        return $images; 
    }
    
    public function getsingleproductimgs($album_id){
        return Productimg::where('productalbum_id', $album_id)->orderBy('id','ASC')->get();
    }
    
    public function getimagesinglebyproductid($product_id,$color){
        $image_big=DB::table('productalbums')
	   ->join('productimgs','productalbums.id','=','productimgs.productalbum_id')
	   ->select('productimgs.productimg_img')
	   ->where('productalbums.product_id',$product_id)
	   ->where('productalbums.productalbum_name',$color)
	   ->orderBy('productimgs.productimg_order','ASC')
	   ->first();
	   return $image_big;
    }
}


