<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;



Route::get('/', function () {
    return view('front.include.content');
})->name('homePage');

Route::get('clear', function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});

Route::prefix('user')->name('user.')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('/login',  [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login',  [LoginController::class, 'login'])->name('login');
        Route::get('/logout',  [LoginController::class, 'logout'])->name('logout');
        Route::get('/register',  [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register',  [RegisterController::class, 'register']);
    });
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [UserController::class,'index'])->name('dashboard');
    });
});


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class,'showLoginForm'])->name('login');
        Route::post('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class,'login'])->name('login');
        Route::get('logout', [\App\Http\Controllers\Admin\Auth\LoginController::class,'logout'])->name('logout');
    });

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

        //Category
        Route::prefix('category')->group(function (){
            Route::match(['get','post'],'/',[CategoryController::class,'CategoryIndex'])->name('category');
            Route::match(['get','post'],'/sub-category',[CategoryController::class,'SubCategoryIndex'])->name('sub-category');
            Route::match(['get','post'],'/child-category',[CategoryController::class,'ChildCategoryIndex'])->name('child-category');

        });

        //Product
        Route::prefix('product')->group(function (){
            Route::match(['get','post'],'/',[ProductController::class,'ProductIndex'])->name('product');

        });


        //Role Management
        Route::prefix('/role')->group(function(){
            Route::get('/create',[\App\Http\Controllers\Admin\role\RoleController::class,'create'])->name('role.create');
            Route::post('/save',[\App\Http\Controllers\Admin\role\RoleController::class,'store'])->name('role.store');
            Route::get('/list',[\App\Http\Controllers\Admin\role\RoleController::class,'list'])->name('role.list');
            Route::get('/edit',[\App\Http\Controllers\Admin\role\RoleController::class,'edit'])->name('role.edit');
            Route::post('/update',[\App\Http\Controllers\Admin\role\RoleController::class,'update'])->name('role.update');
            Route::get('/active',[\App\Http\Controllers\Admin\role\RoleController::class,'active'])->name('role.active');
            Route::get('/deactive',[\App\Http\Controllers\Admin\role\RoleController::class,'deactive'])->name('role.deactive');
        });
    });
});
