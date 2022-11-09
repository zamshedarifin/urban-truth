<?php

namespace App\Http\Controllers\Admin\role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Rolepermission;
use Validator;

class RoleController extends Controller
{
    public function create() {
        return view('back.role.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'role_name' => 'required|unique:roles,role_name'
        ]);
        $role=new Role();
        $role->role_name=$request->role_name;
        $role->save();
        $role_id=$role->id;
        if($request->has('permission')){
            $permission = $request->permission;
            foreach ($permission as $pinfo) {
                $role_permission = new Rolepermission();
                $role_permission->role_id = $role_id;
                $role_permission->permission = $pinfo;
                $role_permission->save();
            }
        }
        return redirect()->back()->with('save', 'New role add successfully.');
    }

    public function list() {
        $data['roles'] = Role::all();
        return view('back.role.list')->with($data);
    }

    public function edit(Request $request){
        $data['role'] = Role::find($request->id);
        $permission=new Rolepermission();
        $data['permission'] =$permission->get_permission($request->id);
        return view('back.role.edit',$data);
    }

    public function update(Request $request) {
        $vaildation = Validator::make($request->all(), [
                    'role_name' => 'required|unique:roles,role_name,'.$request->id,
        ]);
        if ($vaildation->fails()) {
            return redirect()->back()->withErrors($vaildation)->withInput();
        } else {
        $role=Role::find($request->id);
        $role->role_name = $request->role_name;
        $role->save();
        Rolepermission::where('role_id', $request->id)->delete();
        if($request->has('permission')){
            $permission = $request->permission;
            foreach ($permission as $p_info) {
                //create method use and fillable must set in model
                RolePermission::create([
                    'role_id' => $request->id,
                    'permission' => $p_info
                ]);
            }
            return redirect()->back()->with('save', 'Role  Eidted Successfully!.');
          }
        }
    }

    public function active(Request $request){
        $role=Role::find($request->id);
        $role->active = 1;
        $role->save();
        return redirect()->back()->with('update', 'Role  active Successfully!.');
    }

    public function deactive(Request $request){
        $role=Role::find($request->id);
        $role->active = 0;
        $role->save();
        return redirect()->back()->with('error', 'Role  deactive Successfully!.');
    }
}
