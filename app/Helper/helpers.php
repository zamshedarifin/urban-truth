<?php
use App\Models\RolePermission;


function getPermission($role_id){
        $role_permission = RolePermission::where('role_id', $role_id)->get();
        $permission = [];
        foreach ($role_permission as $p_list) {
            $permission[] = $p_list->permission;
        }
        return $permission;
}

?>
