<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\UsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin'] , function(){
    Route::get('show/' , [AdminController::class , 'show']);
    Route::get('products' , [ProductController::class , 'addproductview'])->name('admin.product.addview');
    Route::get('manage/products' , [ProductController::class , 'showproduct'])->name('admin.product.show');
    Route::post('add/product' , [ProductController::class , 'addproduct'])->name('admin.product.add');
    Route::delete('{id}/delete/product' , [ProductController::class , 'deleteproduct'])->name('admin.product.delete');
    Route::get('{id}/updateshow/product' , [ProductController::class , 'updateshowproduct'])->name('admin.product.updateshow');
    Route::put('{id}/update/product' , [ProductController::class , 'updateproduct'])->name('admin.product.update');

    Route::group(['prefix' => 'users'] , function(){
        Route::get('showusers/' , [UsersController::class , 'showusers'])->name('admin.users.show');
        Route::get('addusersshow/' , [UsersController::class , 'addusersshow'])->name('admin.users.addshow');
        Route::post('addusers/' , [UsersController::class , 'addusers'])->name('admin.users.addusers');
        Route::delete('{id}/delete/user/' , [UsersController::class , 'deleteusers'])->name('admin.users.deleteusers');
    });
});