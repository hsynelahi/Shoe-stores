<?php

use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\PaymentsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Home\BasketController;
use App\Http\Controllers\Home\CheckoutsController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ProductsController;
use Illuminate\Support\Facades\Route;



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
        Route::get('{id}/edit/user/' , [UsersController::class , 'editusers'])->name('admin.users.editusers');
        Route::put('{id}/update/user/' , [UsersController::class , 'updateusers'])->name('admin.users.updateusers');
    });

    Route::group(['prefix' => 'orders'] , function(){
        Route::get('showorders/' , [OrdersController::class, 'show'])->name('admin.orders.show');
    });

    Route::group(['prefix' => 'payments'] , function(){
        Route::get('showpayments/' , [PaymentsController::class, 'show'])->name('admin.payments.show');
    });
});



Route::group(['prefix' => '/'] , function(){
    Route::get('' , [HomeController::class , 'show'])->name('home.show');
    Route::get('{id}/product-detail' , [ProductsController::class , 'productDetail'])->name('home.productDetail.show');
    Route::get('/showBasket' , [BasketController::class , 'showBasket'])->name('home.showBasket.show');
    Route::get('{product_id}/addToBasket' , [BasketController::class , 'addToBasket'])->name('home.addToBasket.add');
    Route::get('{product_id}/deleteBasket' , [BasketController::class , 'deleteBasket'])->name('home.deleteBasket.delete');
    Route::get('/checkout' , [CheckoutsController::class , 'checkoutShow'])->name('home.checkout.show');
});