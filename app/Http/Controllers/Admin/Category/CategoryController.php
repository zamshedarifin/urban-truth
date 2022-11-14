<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Childcategory;
use App\Models\Subcategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function CategoryIndex(Request $request)
    {
        if($request->isMethod('post'))
        {
            $validate = $request->validate([
                'title' => 'required|max:255',
            ]);
                $data = new Category();
                $data->title = $request->title;
                $data->status = 1;
                $data->created_by = Auth::guard('admin')->user()->id;
                $data->save();
                Toastr::success('Category added successfully','success');
                return back();

        }
        else
        {
            $categories = Category::latest()->get();
            return view('back.category.category',compact('categories'));
        }
    }

    public function CategoryUpdate(Request $request)
    {
        $category=Category::find($request->id);
        $category->title = $request->title;
        $category->update();
        Toastr::success('Category updated successfully','success');
        return back();
    }

    public function SubCategoryIndex(Request $request)
    {
        if($request->isMethod('post'))
        {
            $validate= $request->validate([
                'category' => 'required',
                'title' => 'required|max:255',
            ]);
            $data = new Subcategory();
            $data->cat_id = $request->category;
            $data->title = $request->title;
            $data->status = 1;
            $data->created_by = Auth::guard('admin')->user()->id;
            $data->save();
            Toastr::success('Sub-category added successfully','success');
            return back();
        }
        else
        {
            $categories = Category::latest()->get();
            $subCategories = Subcategory::latest()->get();
            return view('back.category.sub-category',compact('categories','subCategories'));
        }
    }

    public function SubCategoryUpdate(Request $request)
    {
        $subcategory=Subcategory::find($request->id);
        $subcategory->cat_id = $request->category;
        $subcategory->title = $request->title;
        $subcategory->update();
        Toastr::success('updated successfully','success');
        return back();
    }

    public function ChildCategoryIndex(Request $request)
    {
        if($request->isMethod('post'))
        {
            $validate = $request->validate([
                'category' => 'required',
                'title' => 'required|max:255',
            ]);
            $data = new Childcategory();
            $data->cat_id = $request->category;
            $data->sub_cat_id  = $request->sub_category;
            $data->title = $request->title;
            $data->status = 1;
            $data->created_by = Auth::guard('admin')->user()->id;
            $data->save();
            Toastr::success('Child-category added successfully','success');
            return back();

        }
        else {
            $categories = Category::latest()->get();
            $subCategories = Subcategory::latest()->get();
            $childCategories = Childcategory::latest()->get();
            return view('back.category.child-category',compact('categories','subCategories','childCategories'));
        }
    }

    public function ChildCategoryUpdate(Request $request)
    {
        $childCategory=Childcategory::find($request->id);
        $childCategory->cat_id = $request->category;
        $childCategory->sub_cat_id  = $request->sub_category;
        $childCategory->title = $request->title;
        $childCategory->update();
        Toastr::success('updated successfully','success');
        return back();
    }
}
