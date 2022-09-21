<?php

use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FaceBookController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin
Route::prefix('admin')->group(function(){
    Route::prefix('home')->group( function(){
        Route::get('/', function (){
            return view('home');
        })->name('home.index')->middleware('can:list_home');
    });
    //categories
    Route::prefix('categories')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index')->middleware('can:list_categories');
        Route::get('/search', [CategoryController::class, 'search'])->name('categories.search');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create')->middleware('can:add_categories');
        Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('can:edit_categories');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete')->middleware('can:delete_categories');
    }); 

    // /product
    Route::prefix('product')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('product.index')->middleware('can:list_product');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create')->middleware('can:add_product');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit')->middleware('can:edit_product');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete')->middleware('can:delete_product');
    });
    //slider
    Route::prefix('slider')->group(function(){
        Route::get('/', [SliderController::class, 'index'])->name('slider.index')->middleware('can:list_slider');
        Route::get('/create', [SliderController::class, 'create'])->name('slider.create')->middleware('can:add_slider');
        Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit')->middleware('can:edit_slider');
        Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete')->middleware('can:delete_slider');
    });
    //user
    Route::prefix('user')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('user.index')->middleware('can:list_user');
        Route::get('/create', [UserController::class, 'create'])->name('user.create')->middleware('can:add_user');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware('can:edit_user');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete')->middleware('can:delete_user');
    });
    //role
    Route::prefix('role')->group(function(){
        Route::get('/', [RoleController::class, 'index'])->name('role.index')->middleware('can:list_role');
        Route::get('/create', [RoleController::class, 'create'])->name('role.create')->middleware('can:add_role');
        Route::post('/store', [RoleController::class, 'store'])->name('role.store');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('role.edit')->middleware('can:edit_role');
        Route::post('/update/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('role.delete')->middleware('can:delete_role');
    });
}); 

//frontend
Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('register')->group(function(){
    Route::get('/', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/store', [RegisterController::class, 'store'])->name('register.store');
});

Route::prefix('login')->group(function(){
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::post('/store', [LoginController::class, 'store'])->name('login.store');
});

// Facebook Login URL
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});


