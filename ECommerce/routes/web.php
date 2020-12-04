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

Route::get('privacy-policy', function () {
    return view('website.backend.layouts.privacy-policy');
});

//user authentication

//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', ['uses' => "UserController@login" ,'as' => 'login']);
Route::get('/login/checklogin', ['uses' => "UserController@checklogin"]);
Route::get('/login/successlogin', ['uses' => "UserController@successlogin"]);
Route::get('/login/logout', ['uses' => "UserController@logout"]);

Route::get('/boutique/detail/{id}', ['uses' => "ProduitsController@detail", 'as' => 'detail']);

Route::get('index', ['uses'=>"ProduitsController@index", 'as' => 'index']);

Route::get('boutique', ['uses' => "CategoriesController@boutique",'as'=>'boutique']);

Route::get('boutique/{nom}', ['uses' => "ProduitsController@show"]);

Route::get('about-us', ['uses' => "AdminController@about", 'as' => 'about-us']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
