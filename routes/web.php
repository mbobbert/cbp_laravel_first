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


Route::get('/', 'HomeController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/blog', 'Blog\BlogController@index');
Route::get('/blog/{id}', 'Blog\BlogController@honza');


Route::get('/portfolio', 'PortfolioController@index');
Route::get('/hello', 'FirstController@index');


Route::get('/form', 'FormController@index');
Route::get('/form/create', 'FormController@create');
Route::post('/form', 'FormController@store');

Route::get('/pets', 'PetContoller@index');