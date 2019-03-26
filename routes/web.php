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

Route::get('/',"AboutController@index");
Route::get("/xyz", "AboutController@index");
Route::get("/home", "AboutController@home");
Route::get("/about", "AboutController@about");
Route::get("/contact", "AboutController@contact");
