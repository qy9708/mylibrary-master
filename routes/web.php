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

//



Route::get('/', 'HomeController@getPage')->middleware('auth');


Route::get('/firmindex','FirmController@studentfirmindex')->name('firm.index')->middleware('auth');
Route::get('/admindashboard','AdminController@admindashboard')->name('firm.index')->middleware('auth');
Route::get('/studentdashboard','StudentController@studentdashboard')->name('firm.index')->middleware('auth');
Route::get('/admin/{id}/edit','FirmController@edit')->name('admin.edit')->middleware('auth');
Route::delete('/admin/{id}', 'FirmController@destroy')->name('admin.destroy');


Auth::routes();
