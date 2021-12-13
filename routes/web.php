<?php

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
Route::group(['prefix' => '/','middleware'=>'check.status'], function () {
Route::get('/', 'IndexController@getIndex')->middleware('check.status')->name('index');

Route::get('category/{id}/{slug}', 'IndexController@getCategory')->name('index.getCategory');



Route::get('checkout', 'CheckoutController@getCheckout')->name('admin.getCheckout');
Route::post('checkout', 'CheckoutController@postCheckout')->name('admin.postCheckout');
Route::get('/AddCart/{id}', 'CartController@AddCart')-> name('AddCart');
Route::get('/DeleteItemCart/{id}', 'CartController@DeleteItemCart')-> name('DeleteItemCart');
Route::get('/DeleteItemListCart/{id}', 'CartController@DeleteItemListCart')-> name('DeleteItemListCart');
Route::get('/viewcart', 'CartController@ViewListCart')-> name('viewcart');
Route::get('/SaveItemListCart/{id}/{quanty}', 'CartController@SaveItemListCart')-> name('SaveItemListCart');
Route::get('/search', 'IndexController@search') -> name('index.search');     
});

Route::get('login', 'LoginController@getLogin')->name('admin.login');
Route::post('login', 'LoginController@postLogin')->name('admin.login');
Route::get('logout', 'LoginController@getLogout')->name('admin.logout');
Route::post('register', 'LoginController@register')->name('admin.register');
Route::get('register', 'LoginController@getregister')->name('admin.getregister');
Route::post('otp', 'LoginController@postotp')->name('admin.postotp');
Route::get('otp', 'LoginController@getotp')->name('admin.getotp');   
Route::get('resend_otp', 'LoginController@resend')->name('resend');   



Route::group(['prefix' => 'admin'], function () {
    Route::get('index', function () {
        return view('admin.layouts.index');
    })->name('admin.index');

    Route::get('order', 'OrderController@getDanhSach')->name('admin.order.getDanhSach');

    Route::group(['prefix' => 'user'], function () {
        Route::get('danhsach', 'UserController@getDanhSach')->name('admin.user.getDanhSach');

        Route::get('them', 'UserController@getThem')->name('admin.user.getThem');
        Route::post('them', 'UserController@postThem')->name('admin.user.postThem');

        Route::get('sua/{id}', 'UserController@getSua')->name('admin.user.getSua');
        Route::post('sua/{id}', 'UserController@postSua')->name('admin.user.postSua');

        Route::get('xoa/{id}', 'UserController@getXoa')->name('admin.user.getXoa');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('danhsach', 'CategoryController@getDanhSach')->name('admin.category.getDanhSach');

        Route::get('them', 'CategoryController@getThem')->name('admin.category.getThem');
        Route::post('them', 'CategoryController@postThem')->name('admin.category.postThem');

        Route::get('sua/{id}', 'CategoryController@getSua')->name('admin.category.getSua');
        Route::post('sua/{id}', 'CategoryController@postSua')->name('admin.category.postSua');

        Route::get('xoa/{id}', 'CategoryController@getXoa')->name('admin.category.getXoa');
    });

    Route::group(['prefix' => 'book'], function () {
        Route::get('danhsach', 'BookController@getDanhSach')->name('admin.book.getDanhSach');

        Route::get('them', 'BookController@getThem')->name('admin.book.getThem');
        Route::post('them', 'BookController@postThem')->name('admin.book.postThem');

        Route::get('sua/{id}', 'BookController@getSua')->name('admin.book.getSua');
        Route::post('sua/{id}', 'BookController@postSua')->name('admin.book.postSua');

        Route::get('xoa/{id}', 'BookController@getXoa')->name('admin.book.getXoa');
    });

    Route::group(['prefix' => 'order_detail'], function () {
        Route::get('danhsach', 'Order_detailController@getDanhSach')->name('admin.order_detail.getDanhSach');

        Route::get('them', 'Order_detailController@getThem')->name('admin.order_detail.getThem');
        Route::post('them', 'Order_detailController@postThem')->name('admin.order_detail.postThem');

        Route::get('sua/{id}', 'Order_detailController@getSua')->name('admin.order_detail.getSua');
        Route::post('sua/{id}', 'Order_detailController@postSua')->name('admin.order_detail.postSua');

        Route::get('xoa/{id}', 'Order_detailController@getXoa')->name('admin.order_detail.getXoa');
    });

   Route::group(['prefix' => 'customer'], function () {
        Route::get('danhsach', 'CustomerController@getDanhSach')->name('admin.customer.getDanhSach');

        Route::get('them', 'CustomerController@getThem')->name('admin.customer.getThem');
        Route::post('them', 'CustomerController@postThem')->name('admin.customer.postThem');

        Route::get('sua/{id}', 'CustomerController@getSua')->name('admin.customer.getSua');
        Route::post('sua/{id}', 'CustomerController@postSua')->name('admin.customer.postSua');

        Route::get('xoa/{id}', 'CustomerController@getXoa')->name('admin.customer.getXoa');
    });
});

