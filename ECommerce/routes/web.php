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

Route::get('/', function () {
    return view('welcome');
});

//user authentication

//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', ['uses' => "UserController@login" ,'as' => 'login']);
Route::get('/login/checklogin', ['uses' => "UserController@checklogin"]);
Route::get('/login/successlogin', ['uses' => "UserController@successlogin"]);
Route::get('/login/successloginadmin', ['uses' => "UserController@successloginadmin"]);
Route::get('/login/logout', ['uses' => "UserController@logout"]);

Route::get('/boutique/detail/{id}', ['uses' => "ProduitsController@detail", 'as' => 'detail']);

Route::get('index', ['uses'=>"ProduitsController@index", 'as' => 'index']);

Route::get('boutique', ['uses' => "CategoriesController@boutique",'as'=>'boutique']);

Route::get('boutique/{nom}', ['uses' => "ProduitsController@show"]);

Route::get('about-us', ['uses' => "AdminController@about", 'as' => 'about-us']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('website.backend.layouts.users.login');
})->name('dashboard');

Route::get('return-policy', ['uses' => "AdminController@return", 'as' => 'return-policy']);
Route::get('privacy-policy', ['uses' => "AdminController@privacy", 'as' => 'privacy-policy']);
Route::get('terms-conditions', ['uses' => "AdminController@terms", 'as' => 'terms-conditions']);

Route::get('/boutique/AddToCart/{id}',['uses' => "ProduitsController@AddToCart", 'as' => 'AddToCart']);

Route::get('cart', ['uses' => "ProduitsController@ShowCart", 'as' => 'cart']);

//delete from cart
Route::get('/boutique/deleteItemCart/{id}', ['uses' => "ProduitsController@deleteItemCart", 'as' => 'deleteItemCart']);

Route::get('/boutique/AddToCart_up/{id}', ['uses' => "ProduitsController@AddToCart_up", 'as' => 'AddToCart_up']);

Route::get('/boutique/AddToCart_down/{id}', ['uses' => "ProduitsController@AddToCart_down", 'as' => 'AddToCart_down']);

