<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    public function handle($request, Closure $next) {
        if (Auth::guard('admin')->check()) {
            $admin_login_id = Auth::guard('admin')->user()->id;
            return $next($request);
        }else{
            $login='admin.login';
            return redirect()->route($login);
        }
    }
}
