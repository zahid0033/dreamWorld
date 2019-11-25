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

Route::get('/', 'pagesController@index')->name('pages.index');
Route::get('/about', 'pagesController@about')->name('pages.about');
Route::get('/ourCompany', 'pagesController@ourCompany')->name('pages.ourCompany');
Route::get('/ourProducts', 'pagesController@ourProducts')->name('pages.ourProducts');
Route::get('/gallery', 'pagesController@gallery')->name('pages.gallery');
