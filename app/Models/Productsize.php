<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Productsize extends Model
{
    use HasFactory;
    
   public function product()
    {
        return $this->belongsToMany('App\Models\Product');
    }
    
    public function totalstock(){
        return DB::table('products')
            ->join('productsizes','products.id' ,'=', 'productsizes.product_id')
            ->where('products.product_active_deactive', 0)
            ->sum('SizeWiseQty');
    }
    
    public static function getqtysum($product_id){
        $qty=Productsize::where('product_id',$product_id)->sum('SizeWiseQty');
        return $qty;
    }
    
    public function getsizewiseqtysum($product_id,$size,$color_name){
        $qty=Productsize::where('product_id',$product_id)->where('productsize_size',$size)->where('color_name',$color_name)->sum('SizeWiseQty');
        return $qty;
    }
    
    public function getbarcode($product_id,$size,$color_name){
        $get_barcode=Productsize::where('product_id',$product_id)->where('productsize_size',$size)->where('color_name',$color_name)->first();
        return $get_barcode;
    }
    
    public function getcolors($categoryid = 0, $subcategory = 0){
        $color_names = DB::table('products')
            ->join('productsizes','products.id' ,'=', 'productsizes.product_id')
            ->where('products.procat_id', $categoryid)
            ->where('products.subprocat_id', $subcategory)
            ->groupBy('color_name')
            ->orderBy('color_name')
            ->pluck('color_name')
            ->toArray();
        if($categoryid == 0 || $subcategory == 0)
        $color_names = DB::table('productsizes')
            ->where('status', 1)
            ->groupBy('color_name')
            ->orderBy('color_name')
            ->pluck('color_name')
            ->toArray();
        return $color_names;
    }
    
    public function getsizescolorwise($product_id,$color_name){
        return Productsize::where('product_id', $product_id)->where('color_name', $color_name)->orderBy('productsize_size', 'ASC')->get();
    }
    
    public function productsizes($product_id){
        return Productsize::where('product_id', $product_id)->orderBy('id', 'DESC')->get();
    }
    
    public function productcolors($product_id){
       return Productsize::where('product_id', $product_id)->groupBy('color_name')->get();
    }
    
}
