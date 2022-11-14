<?php

namespace App\Http\Controllers;

use App\Models\Childcategory;
use App\Models\Fabric;
use App\Models\Productimg;
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

}
