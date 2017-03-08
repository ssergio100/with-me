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

Route::get('/',function(){
    return 'caralha';}

);
Route::get('/painel/produtos/tests','Painel\ProductController@add');
Route::get('/painel/produtos/update','Painel\ProductController@update');
Route::get('/painel/produtos/delete','Painel\ProductController@delete');

Route::resource('/painel/produtos','Painel\ProductController');