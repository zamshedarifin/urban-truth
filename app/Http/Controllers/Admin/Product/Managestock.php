<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Productsize;
use App\Models\Product;
use App\Models\MainCat;
use App\Models\Cat;
use App\Models\Subcat;
use App\Models\Prosize;
use DB;

class Managestock extends Controller
{

    public static function GetSizeQty($id){
        $productsize=new Productsize();
        return  $productsize->productsizes($id);
    }

    public static function GetExpectSize($product_id,$color_name){
        $prosizes = DB::select("SELECT *  FROM prosizes where prosize_name not in(select productsize_size  FROM productsizes where product_id='$product_id' and color_name='$color_name')");
        return $prosizes;
    }

     public static function GetColorProSize($product_id){
        $color_wise_size = DB::table('productsizes')->where('product_id', $product_id)->groupBy('color_name')->get();
        return $color_wise_size;
    }


    public function add(Request $request){
         $stcok=new Productsize();
         $stcok->product_id=$request->product_id;
         $stcok->SizeWiseQty=$request->SizeWiseQty;
         $stcok->barcode=$request->barcode;
         $stcok->color_name=$request->color_name;
         $stcok->productsize_size=$request->productsize_size;
         $stcok->save();

        Toastr::success('New size added successfully!','success');
        return back();
    }

    public function update(Request $request){
        $total_pro = $request->id;
        for ($i = 0; $i < count($total_pro); $i++) {
          $stcok=Productsize::find($request->id[$i]);
          $stcok->SizeWiseQty=$request->qty[$i];
          $stcok->barcode=$request->barcode[$i];
          $stcok->save();
        }
        Toastr::success('Quantity Updated successfully!','success');
        return back();
    }

    public function delete($id){
        $stcok=Productsize::find($id);
        $stcok->delete();

        Toastr::success('Quantity deleted successfully!','Delete');
        return back();
    }
}
