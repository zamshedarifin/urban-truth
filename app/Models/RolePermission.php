<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;
    protected $table = "rolepermissions";
    protected $guarded =[];


    public function get_permission($role_id){
        $role_permission=Rolepermission::where('role_id',$role_id)->get();
        $permission=[];
        foreach($role_permission as $p_list){
            $permission[]=$p_list->permission;
        }
        return $permission;
    }
}
