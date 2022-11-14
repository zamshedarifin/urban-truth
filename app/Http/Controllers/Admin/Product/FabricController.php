<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Validator;
use App\Models\Fabric;

class FabricController extends Controller
{

    public function FabricIndex()
    {
        $fabrics= Fabric::latest()->get();
        return view('back.fabric.index',compact('fabrics'));
    }

    public function fabricSave(Request $request)
    {
        $data = new Fabric();
        $data->name = $request->title;
        $data->care = $request->details;
        $data->save();

        Toastr::success('Fabric added successfully!','success');
        return back();
    }
    public function FabricUpdate(Request $request)
    {
        $data =Fabric::find($request->id);
        $data->name = $request->title;
        $data->care = $request->care;
        $data->save();
        Toastr::success('Fabric updated successfully!','success');
        return back();
    }

    protected function FabricDelete($id){
        $fabric=Fabric::find($id);
        $fabric->delete();
        Toastr::success('Delete successfully!','success');
        return back();
    }

}
