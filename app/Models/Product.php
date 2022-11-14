<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Carbon\Carbon;

class Product extends Model {

    //use Gloudemans\Shoppingcart\CanBeBought;

    //protected $primaryKey = 'id';
    protected $table = 'products';
   protected $guarded =[];


    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }

   public function subCategory()
   {
       return $this->belongsTo(Subcategory::class,'sub_cat_id','id');
   }



    public function admin()
    {
        return $this->belongsTo(Admin::class,'created_by','id');
    }

}
