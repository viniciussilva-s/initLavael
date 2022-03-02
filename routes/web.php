<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\movieController;

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

Route::get('/', ["as" => "home.cursos"  , "uses" => "homeController@index"]);
Route::get('/movie/list', ["as" => "movie.list" , "uses" => "movieController@index"]);
Route::match(["get" , "post"], '/movie/created', ["as" => "movie.created" , "uses" => "movieController@created"]);
Route::match(["get" , "put"], '/movie/edit/{id}', ["as" => "movie.edit" , "uses" => "movieController@edit"]);
Route::get('/movie/delete/{id}', ["as" => "movie.delete" , "uses" => "movieController@delete"]);
