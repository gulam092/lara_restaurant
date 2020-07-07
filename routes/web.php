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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/disneyplus', 'DisneyplusController@create')->name('disneyplus.create');
Route::post('/disneyplus', 'DisneyplusController@store')->name('disneyplus.store');
Route::get('disneyplus/list', 'DisneyplusController@index')->name('disneyplus.index');
Route::get('/downloadPDF/{id}','DisneyplusController@downloadPDF');




Route::get('/','FoodController@listFood');

Route::get('/foods/{id}','FoodController@view')
                            ->name('food.view');

Route::resource('category','CategoryController')
                          ->middleware('auth');
Route::resource('food','FoodController')->middleware('auth');


Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
