<?php

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

//首頁路由
Route::get('/', 'SiteController@renderHomePage');

//商品相關路由
Route::group(['prefix' => 'shop'], function () {
    Route::get('/', 'SiteController@renderShopPage');
    Route::get('/addcart/{item_id}', 'SiteController@submitOrder');
});

//Voyager內建的路由
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
