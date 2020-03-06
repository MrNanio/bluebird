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

Route::get('/noticeboard', 'BoardController@board');
Route::get('/about', 'AboutController@about');

Auth::routes();
Route::get('/home', 'PagesController@index')->name('home');

/*Routing dla pages*/
Route::get('pages', [
    'uses'=>'PagesController@index',
    'as'=>'pages.index'
]);
Route::get('pages/create', [
    'uses'=>'PagesController@create',
    'as'=>'pages.create'
]);
Route::post('pages/store', [
    'uses'=>'PagesController@store',
    'as'=>'pages.store'
]);
Route::get('pages/edit/{page}', [
    'uses'=>'PagesController@edit',
    'as'=>'pages.edit'
]);
Route::put('pages/{page}', [
  'uses'=>'PagesController@update',
   'as'=>'pages.update'
]);
Route::delete('pages/{page}', [
    'uses'=>'PagesController@destroy',
    'as'=>'pages.destroy'
]);

/*Routing dla user*/
Route::get('admin', [
    'uses'=>'AdminController@index',
    'as'=>'admin.index'
]);
Route::get('admin/create', [
    'uses'=>'AdminController@create',
    'as'=>'admin.create'
]);
Route::post('admin/store', [
    'uses'=>'AdminController@store',
    'as'=>'admin.store'
]);
Route::get('admin/edit/{page}', [
    'uses'=>'AdminController@edit',
    'as'=>'admin.edit'
]);
Route::put('admin/{page}', [
    'uses'=>'AdminController@update',
    'as'=>'admin.update'
]);
Route::delete('admin/{page}', [
    'uses'=>'AdminController@destroy',
    'as'=>'admin.destroy'
]);
