<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;



Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('homePage');

Route::get('clear', function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});
Route::get('ajax/ajax-product-details',[\App\Http\Controllers\AjaxController::class,'popup']);
Route::get('/ajaxcall-getQuantityByColor/{id1}/{id2}/{id3}', [\App\Http\Controllers\AjaxController::class,'getQuantityByColor'])->name('GetQty');

Route::get('category/{catId}/{subCatId}/{childCatId}',[\App\Http\Controllers\HomeController::class,'CategoryList'])->name('categoryList');
Route::get('category/{catId}',[\App\Http\Controllers\HomeController::class,'CategoryProducts'])->name('category');
Route::get('collection/{catId}/{campId}',[\App\Http\Controllers\HomeController::class,'CollectionProducts'])->name('collection');
Route::get('occasion/{catId}/{occasionId}',[\App\Http\Controllers\HomeController::class,'OccasionProducts'])->name('occasion');


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
            Route::post('/update',[CategoryController::class,'CategoryUpdate'])->name('category.update');

            Route::match(['get','post'],'/sub-category',[CategoryController::class,'SubCategoryIndex'])->name('sub-category');
            Route::post('/sub-category/update',[CategoryController::class,'SubCategoryUpdate'])->name('sub-category.update');

            Route::match(['get','post'],'/child-category',[CategoryController::class,'ChildCategoryIndex'])->name('child-category');
            Route::post('/child-category/update',[CategoryController::class,'ChildCategoryUpdate'])->name('child-category.update');

        });

        //Product
        Route::prefix('product')->group(function (){
            Route::get('/',[ProductController::class,'ProductIndex'])->name('product.list');
            Route::match(['get','post'],'/Store',[ProductController::class,'ProductAdd'])->name('product.add');
            Route::post('/Store',[ProductController::class,'ProductSave'])->name('product.save');
            Route::get('/edit/{id}',[ProductController::class,'ProductEdit'])->name('product.edit');
            Route::post('/update/{id}',[ProductController::class,'ProductUpdate'])->name('product.update');

            //image
            Route::get('/image/edit/{imageId}/{serial}/{productId}',[\App\Http\Controllers\Admin\Product\Manageimage::class,'imageEdit'])->name('product.image.edit');
            Route::post('/image/update',[\App\Http\Controllers\Admin\Product\Manageimage::class,'update'])->name('product.image.update');
            Route::get('/image/delete/{imageId}/{serial}/{productId}',[\App\Http\Controllers\Admin\Product\Manageimage::class,'delete'])->name('product.image.delete');

            //stock
            Route::post('/stock/update',[\App\Http\Controllers\Admin\Product\Managestock::class,'update'])->name('product.stock.update');
            Route::get('/stock/delete/{id}',[\App\Http\Controllers\Admin\Product\Managestock::class,'delete'])->name('product.stock.delete');
            Route::post('/stock/add',[\App\Http\Controllers\Admin\Product\Managestock::class,'add'])->name('product.stock.add');

            //album
            Route::post('/album/save',[\App\Http\Controllers\Admin\Product\Managecolor::class,'save'])->name('product.album.save');
            Route::get('/album/delete',[\App\Http\Controllers\Admin\Product\Managecolor::class,'delete'])->name('product.album.delete');

        });

        //ajax
        Route::prefix('ajax')->group(function (){
            Route::get('/get-sub-category',[\App\Http\Controllers\AjaxController::class,'getSubCategories'])->name('getSubCategories');
            Route::get('/get-child-category',[\App\Http\Controllers\AjaxController::class,'getChildCategories'])->name('getChildCategories');
            Route::get('/get-fabric',[\App\Http\Controllers\AjaxController::class,'getFabric'])->name('getFabric');
            Route::get('/get-album',[\App\Http\Controllers\AjaxController::class,'getAlbum'])->name('getAlbum');
        });

        //ajax
        Route::prefix('fabric')->group(function (){
            Route::post('/save',[\App\Http\Controllers\Admin\Product\FabricController::class,'fabricSave'])->name('fabric.add');
            Route::get('/index', [\App\Http\Controllers\Admin\Product\FabricController::class,'FabricIndex'])->name('fabric');
            Route::post('/update', [\App\Http\Controllers\Admin\Product\FabricController::class,'FabricUpdate'])->name('fabric.update');
            Route::get('/delete/{id}', [\App\Http\Controllers\Admin\Product\FabricController::class,'FabricDelete'])->name('fabric.delete');

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
