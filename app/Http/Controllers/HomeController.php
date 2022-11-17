<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use App\Models\Childcategory;
use App\Models\occasion;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $newArrivals = DB::table('products')
            //->join('subprocats','subprocats.id','=','products.subprocat_id')
            ->join('productalbums','productalbums.product_id','=','products.id')
            ->select('products.*','productalbums.productalbum_name')
            ->where('product_active_deactive',0)
            ->where('products.add_date', '>', Carbon::now()->subDays(45))
            ->groupBy('products.id')
            ->orderBy('products.id','DESC')
            ->limit(10)
            ->get();

        $bestsales = Product::where('product_active_deactive', 0)->where('sale', '>', 4)
            ->latest()->take(10)->get();
        return view('front.include.content', compact('newArrivals', 'bestsales'));
    }

    public function CategoryList($catId, $subCatId, $childCatId)
    {
        $category = Category::where('slug', $catId)->first();
        $subCategory = Subcategory::where('slug', $subCatId)->first();
        $childCatId = Childcategory::where('slug', $childCatId)->first();

        $catWiseProducts = Product::where('cat_id', $category->id)->where('sub_cat_id', $subCategory->id)
            ->where('product_active_deactive', 0)->where('child_cat_id', $childCatId->id)->latest()->get();

        $categories = Childcategory::where('cat_id', $category->id)->where('status', 1)->get();
        return view('front.product.category-wise', compact('categories', 'category', 'catWiseProducts'));
    }

    public function CategoryProducts($catId)
    {
        $childCategory = Childcategory::where('slug', $catId)->first();
        $catWiseProducts = Product::where('child_cat_id', $childCategory->id)->latest()->get();
        $categories = Childcategory::where('cat_id', $childCategory->cat_id)->where('status', 1)->get();
        return view('front.product.category-product', compact('childCategory',  'catWiseProducts','categories'));
    }

    public function CollectionProducts($catId,$campId)
    {
        $collection = Campaign::where('slug',$campId)->first();
        $category = Category::where('slug', $catId)->first();
        $collectionProducts = Product::where('cat_id', $category->id)->where('isSpecial', $collection->id)
            ->where('product_active_deactive', 0)->latest()->get();
        $collections = Campaign::where('status',1)->whereIn('category',[$category,'6'])->get();
        return view('front.product.collection', compact('collection',  'collectionProducts','category','collections'));

    }
    public function OccasionProducts($catId,$occasionId)
    {
        $occasion = occasion::where('slug',$occasionId)->first();
        $category = Category::where('slug', $catId)->first();
        $occasionProducts = Product::where('cat_id', $category->id)->where('spcollection', $occasion->id)
            ->where('product_active_deactive', 0)->latest()->get();
        $occasions = occasion::where('status',1)->whereIn('category',[$category,'6'])->get();
        return view('front.product.occasion', compact('occasion',  'occasionProducts','category','occasions'));

    }
}
