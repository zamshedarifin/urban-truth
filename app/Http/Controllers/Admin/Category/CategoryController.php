<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CategoryIndex()
    {
        $categories = Category::latest()->get();
        return view('back.category.category',compact('categories'));
    }


    public function SubCategoryIndex()
    {
        return view('back.category.sub-category');
    }


    public function ChildCategoryIndex()
    {
        return view('back.category.child-category');
    }
}
