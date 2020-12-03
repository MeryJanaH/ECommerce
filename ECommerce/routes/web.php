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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/boutique/detail/{id}', ['uses' => "ProduitsController@detail", 'as' => 'detail']);

Route::get('index', ['uses'=>"ProduitsController@index", 'as' => 'index']);

Route::get('boutique', ['uses' => "CategoriesController@boutique",'as'=>'boutique']);

Route::get('boutique/{nom}', ['uses' => "ProduitsController@show"]);

Route::get('about-us', ['uses' => "AdminController@about", 'as' => 'about-us']);
