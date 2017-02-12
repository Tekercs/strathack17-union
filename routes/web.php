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

    Route::post("/search-help", "AdsController@searchConverter");
    Route::get("/search/{key}/{page?}", "AdsController@search");

});

Route::get("/seed", function ()
{

    $temp = new \App\Categories();
    $temp->name = "sales";
    $temp->save();

    $temp = new \App\Categories();
    $temp->name = "jobs";
    $temp->save();

    $temp = new \App\Categories();
    $temp->name = "rent";
    $temp->save();

    $temp = new \App\Ads();
    $temp->title = "The yard barstaff job";
    $temp->breef = "work at the yard at the union as a bar staff memeber";
    $temp->content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus vel quam ut faucibus. Morbi erat magna, ultrices et venenatis id, malesuada vel lectus. Mauris fermentum nisl tortor, in tempor metus ultricies eget. Aenean condimentum sed arcu nec molestie. Sed molestie sem pharetra nisi ullamcorper iaculis. Suspendisse at gravida tellus, vitae dapibus tortor. Donec vitae metus at diam sodales sodales id ac nisi. Mauris nec sapien massa. Vestibulum at erat erat. Cras consectetur sed mauris eget maximus. Sed mattis maximus est ac auctor. Pellentesque in auctor tellus.";
    $temp->price = 0;
    $temp->categoryId = 2;
    $temp->pictureList = "pic01.jpg;pic02.jpg;pic03.jpg";
    $temp->save();

    $temp = new \App\Ads();
    $temp->title = "Barony Bar cleaner job";
    $temp->breef = "work at the barony bar at the union as a staff memeber";
    $temp->content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus vel quam ut faucibus. Morbi erat magna, ultrices et venenatis id, malesuada vel lectus. Mauris fermentum nisl tortor, in tempor metus ultricies eget. Aenean condimentum sed arcu nec molestie. Sed molestie sem pharetra nisi ullamcorper iaculis. Suspendisse at gravida tellus, vitae dapibus tortor. Donec vitae metus at diam sodales sodales id ac nisi. Mauris nec sapien massa. Vestibulum at erat erat. Cras consectetur sed mauris eget maximus. Sed mattis maximus est ac auctor. Pellentesque in auctor tellus.";
    $temp->price = 0;
    $temp->categoryId = 2;
    $temp->pictureList = "pic01.jpg;pic02.jpg;pic03.jpg";
    $temp->save();

    $temp = new \App\Ads();
    $temp->title = "Sell my soul";
    $temp->breef = "usable for any research purpose";
    $temp->content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus vel quam ut faucibus. Morbi erat magna, ultrices et venenatis id, malesuada vel lectus. Mauris fermentum nisl tortor, in tempor metus ultricies eget. Aenean condimentum sed arcu nec molestie. Sed molestie sem pharetra nisi ullamcorper iaculis. Suspendisse at gravida tellus, vitae dapibus tortor. Donec vitae metus at diam sodales sodales id ac nisi. Mauris nec sapien massa. Vestibulum at erat erat. Cras consectetur sed mauris eget maximus. Sed mattis maximus est ac auctor. Pellentesque in auctor tellus.";
    $temp->price = 0;
    $temp->categoryId = 1;
    $temp->pictureList = "pic01.jpg;pic02.jpg;pic03.jpg";
    $temp->save();

    $temp = new \App\Ads();
    $temp->title = "container to rent";
    $temp->breef = "for any ways of use";
    $temp->content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus vel quam ut faucibus. Morbi erat magna, ultrices et venenatis id, malesuada vel lectus. Mauris fermentum nisl tortor, in tempor metus ultricies eget. Aenean condimentum sed arcu nec molestie. Sed molestie sem pharetra nisi ullamcorper iaculis. Suspendisse at gravida tellus, vitae dapibus tortor. Donec vitae metus at diam sodales sodales id ac nisi. Mauris nec sapien massa. Vestibulum at erat erat. Cras consectetur sed mauris eget maximus. Sed mattis maximus est ac auctor. Pellentesque in auctor tellus.";
    $temp->price = 0;
    $temp->categoryId = 3;
    $temp->pictureList = "pic01.jpg;pic02.jpg;pic03.jpg";
    $temp->save();


});