<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Carbon\Carbon;

class Product extends Model
{

    //use Gloudemans\Shoppingcart\CanBeBought;

    //protected $primaryKey = 'id';
    protected $table = 'products';
    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(Subcategory::class, 'sub_cat_id', 'id');
    }

    public function childCategory()
    {
        return $this->belongsTo(Childcategory::class, 'child_cat_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by', 'id');
    }

    public function viewincrement($product_id){
        Product::where('id', $product_id)->increment('view');
    }

    public function details($product_id){
        return DB::table('products')
            ->join('categories','categories.id','=','products.cat_id')
            ->join('sub_categories','sub_categories.id','=','products.sub_cat_id')
            ->join('child_categories','child_categories.id','=','products.child_cat_id')
            ->join('productalbums', 'productalbums.product_id', '=', 'products.id')
            ->join('productimgs', 'productimgs.productalbum_id', '=', 'productalbums.id')
            ->select('products.*','categories.title','sub_categories.title','child_categories.title','productalbums.productalbum_name','productimgs.productimg_img_thm')
            ->where('products.id',$product_id)
            ->groupBy('products.id')
            ->first();
        //   Product::find($product_id);
    }

}
