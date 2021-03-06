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

Route::group(['middleware' => 'admin', 'prefix' => 'panel'], function () {

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

  Route::prefix('books')->group(function () {
    Route::get('/', 'BookController@index')->name('panel.books.index');
    Route::get('/available', 'BookController@available')->name('panel.books.available');
    Route::get('/borrowed', 'BookController@borrowed')->name('panel.books.borrowed');
    Route::get('/', 'BookController@index')->name('panel.books.index');
    Route::get('/new', 'BookController@create')->name('panel.books.new');
    Route::post('/save', 'BookController@store')->name('panel.books.store');
    Route::get('/edit/{id}', 'BookController@edit')->name('panel.books.edit');
    Route::post('/update/{id}', 'BookController@update')->name('panel.books.update');
    Route::get('/delete/{id}', 'BookController@delete')->name('panel.books.delete');
  });


  Route::prefix('borrowed')->group(function () {
    Route::get('/status/{id}/{status}', 'BorrowController@status')->name('panel.borrowed.status');
    Route::get('/request_book/{id}', 'BorrowController@request_book')->name('panel.borrowed.request_book');
    Route::post('/assigned_book/{id}', 'BorrowController@assigned_book')->name('panel.borrowed.assigned_book');
  });

});