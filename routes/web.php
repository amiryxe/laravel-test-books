<?php

use Illuminate\Support\Facades\App;
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

Route::get('/books', 'BookController@index');
Route::get('/books/create', 'BookController@create');
Route::get('/books/{id}', 'BookController@show');
Route::post('/books', 'BookController@store')->name('books.store');

Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/categories', 'CategoryController@index');
Route::get('/products/categories/create', 'CategoryController@create')
    ->name('products.categories.create');
Route::post('products/categories', 'CategoryController@store')
    ->name('products.categories.store');
Route::get('/products/{id}', 'ProductController@show');
Route::post('/products', 'ProductController@store')->name('products.store');

Route::get('test/{locale}', function ($locale) {
    App::setLocale($locale);
    dd(__('messages.welcome'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
