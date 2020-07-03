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


Route::group(['middleware' => 'auth', 'prefix' => 'panel'], function () {
  Route::get('/home', 'HomeController@index')->name('home');

  Route::prefix('users')->group(function () {
    Route::get('/', 'UserController@index')->name('panel.users.index');
  });

  Route::prefix('categories')->group(function () {
    Route::get('/', 'CategoryController@index')->name('panel.categories.index');
    Route::get('/new', 'CategoryController@create')->name('panel.categories.new');
    Route::post('/save', 'CategoryController@store')->name('panel.categories.store');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('panel.categories.edit');
    Route::post('/update/{id}', 'CategoryController@update')->name('panel.categories.update');
    Route::get('/delete/{id}', 'CategoryController@delete')->name('panel.categories.delete');
  });

  Route::prefix('authors')->group(function () {
    Route::get('/', 'AuthorController@index')->name('panel.authors.index');
    Route::get('/new', 'AuthorController@create')->name('panel.authors.new');
    Route::post('/save', 'AuthorController@store')->name('panel.authors.store');
    Route::get('/edit/{id}', 'AuthorController@edit')->name('panel.authors.edit');
    Route::post('/update/{id}', 'AuthorController@update')->name('panel.authors.update');
    Route::get('/delete/{id}', 'AuthorController@delete')->name('panel.authors.delete');
  });

});