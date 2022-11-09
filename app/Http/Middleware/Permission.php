<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next) {
        $role_id = Auth::guard('admin')->user()->role_id;
        $url = $request->segment(1);
        $access = RolePermission::where('role_id', $role_id)->where('permission', $url)->count();
        if ($access > 0) {
            return $next($request);
        } else {
            return response()->view('errors.503');
        }
    }
}
