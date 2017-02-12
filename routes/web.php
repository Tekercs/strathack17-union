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

Route::get("/", "IndexController@index");

Route::get("/register", "IndexController@register");

Route::post("/register", "IndexController@registerPost");

Route::get("/login", "IndexController@login");
Route::post("/login", "IndexController@loginPost");

Route::get("/account", "IndexController@account");
Route::post("/account", "IndexController@accountPost");

Route::get("/logout", "IndexController@logout");

Route::get("/test", "IndexController@test");


Route::group(['prefix' => '/ads'], function ()
{

    Route::get("{id}", "AdsController@viewAd");
    Route::get("/list/{page?}", "AdsController@adList");
    Route::get("/category/{categoryId}/{page?}", "AdsController@categoryList");

});