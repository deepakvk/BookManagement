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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booksList', 'BooksController@index')->name('book.index');
Route::get('/addBooks', 'BooksController@create');
Route::post('/addBooks', 'BooksController@store');
Route::get('/book/{id}/edit', 'BooksController@edit')->name('book.edit');
Route::get('/book/{id}/delete', 'BooksController@destroy')->name('book.destroy');
Route::post('/book/update','BooksController@update')->name('book.update');

Route::get('/categoriesList','BooksCategoryController@index')->name('category.index');
Route::get('/addCategories', 'BooksCategoryController@create');
Route::post('/addCategories', 'BooksCategoryController@store');
Route::get('/category/{id}/edit', 'BooksCategoryController@edit')->name('category.edit');
Route::get('/category/{id}/delete', 'BooksCategoryController@destroy')->name('category.destroy');
Route::post('/category/update','BooksCategoryController@update')->name('category.update');

Route::get('/authorsList', 'AuthorsController@index')->name('author.index');
Route::get('/addAuthors', 'AuthorsController@create');
Route::post('/addAuthors', 'AuthorsController@store');
Route::get('/author/{id}/edit', 'AuthorsController@edit')->name('author.edit');
Route::get('/author/{id}/delete', 'AuthorsController@destroy')->name('author.destroy');
Route::post('/author/update','AuthorsController@update')->name('author.update');

Route::get('/booklists', 'BookListController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
