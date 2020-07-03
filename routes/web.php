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
Auth::routes();


Route::group(['prefix' => 'panel'], function () {
  Route::get('/home', 'HomeController@index')->name('home');

  Route::prefix('users')->group(function () {
    Route::get('/', 'UserController@index')->name('panel.users.index');
  });

  Route::prefix('categories')->group(function () {
    Route::get('/', 'CategoryController@index')->name('panel.categories.index');
    Route::get('/new', 'CategoryController@create')->name('panel.categories.new');
    Route::post('/save', 'CategoryController@store');
    Route::get('/edit', 'CategoryController@edit')->name('panel.categories.edit');
    Route::post('/update', 'CategoryController@update');
    Route::get('/delete', 'CategoryController@delete');
  });

});