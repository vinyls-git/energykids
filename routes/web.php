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

/*Global*/
Route::get('/', 'auth\LoginController@showLogin');

/*Entres*/
Route::put('entres/{entres}', 'EntresController@updateEntres');

/*Stock*/
Route::get('stock', 'StockController@showStock');
Route::post('stock', 'StockController@storeDate');
Route::put('stock/{date}', 'StockController@updateDate');

/*Categories*/
Route::get('categories', 'CategoriesController@showCategories');
Route::post('categories', 'CategoriesController@storeCategories');
Route::get('categories/{id}/editCategories', 'CategoriesController@editCategories');
Route::delete('categories/{categories}', 'CategoriesController@destroyCategories');
Route::put('categories/{categories}', 'CategoriesController@updateCategories');

/*Course*/
Route::get('course', 'CourseController@showCourse');
Route::get('printCourse', 'CourseController@printCourse');

/*Gestion*/
Route::get('gestion', 'GestionController@showGestion');
Route::post('entres', 'GestionController@storeGestion');
Route::get('gestion/{id}/editGestion', 'GestionController@editGestion');
Route::delete('gestion/{entres}', 'GestionController@destroyGestion');
Route::put('gestion/{entres}', 'GestionController@updateGestion');
Route::any('searchAdd', 'GestionController@searchGestion');

/*Users*/
Auth::routes();
Route::get('home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');