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

Route::redirect('/', '/noticias');

Route::any('noticias/search','NoticiaController@search')->name('noticias.search');
Route::resource('noticias','NoticiaController')->middleware(['auth']);

Route::any('admin/search','AdminController@search')->name('admin.search');
Route::resource('admin','AdminController')->middleware(['auth','check.is.admin']);


Auth::routes();


