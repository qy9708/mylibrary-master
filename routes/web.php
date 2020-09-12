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


Route::get('/firmindex','FirmController@showfirmindex')->name('firm.index')->middleware('auth');
Route::get('/logindex','LogController@showlogindex')->name('log.index')->middleware('auth');

Route::get('/studentdashboard','StudentController@studentdashboard')->name('student.index')->middleware('auth');

Route::get('/admindashboard','AdminController@admindashboard')->name('admin.index')->middleware('auth');
Route::get('/admin/{id}/edit','FirmController@edit')->name('admin.edit')->middleware('auth');
Route::delete('/admin/{id}', 'FirmController@destroy')->name('admin.destroy');
Route::put('/admin/{id}','FirmController@update')->name('admin.update')->middleware('auth');
Route::get('/admin/create','FirmController@create')->name('admin.create')->middleware('auth');
Route::post('/admin/store','FirmController@store')->name('admin.store')->middleware('auth');


Auth::routes();
