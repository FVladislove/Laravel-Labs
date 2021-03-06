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

Route::get('/', 'App\\Http\\Controllers\\PagesController@home');

Route::get('/about', 'App\\Http\\Controllers\\PagesController@about');

Route::get('/personalArea', 'App\\Http\\Controllers\\PagesController@personalArea');

Route::get('/books', 'App\Http\Controllers\BooksController@booksView');

Route::get('/books/createBook', '\App\Http\Controllers\BooksController@createBook');

Route::post('/books', '\App\Http\Controllers\BooksController@store');

Route::get('/books/{id}/edit', "\App\Http\Controllers\BooksController@edit");

Route::patch('/books/{id}', '\App\Http\Controllers\BooksController@update');
