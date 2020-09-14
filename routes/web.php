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
Route::get('/admindashboard','AdminController@admindashboard')->name('admin.index')->middleware('auth');
Route::get('/studentdashboard','StudentController@studentdashboard')->name('student.index')->middleware('auth');

//Firm Controller
Route::get('/admin/{id}/edit','FirmController@edit')->name('admin.edit')->middleware('auth');
Route::delete('/admin/{id}', 'FirmController@destroy')->name('admin.destroy');
Route::put('/admin/{id}','FirmController@update')->name('admin.update')->middleware('auth');
Route::get('/admin/create','FirmController@create')->name('admin.create')->middleware('auth');
Route::post('/admin/store','FirmController@store')->name('admin.store')->middleware('auth');
Route::get('/firmindex','FirmController@showfirmindex')->name('firm.index')->middleware('auth');
Route::get('/search','FirmController@search')->name('firm.index')->middleware('auth');

//Log Controllers
Route::get('/logindex','LogController@showlogindex')->name('log.index')->middleware('auth');
Route::get('/student/{id}/edit','LogController@edit')->name('student.edit')->middleware('auth');
Route::delete('/student/{id}', 'LogController@destroy')->name('student.destroy');
Route::put('/student/{id}','LogController@update')->name('student.update')->middleware('auth');
Route::get('/student/create','LogController@create')->name('student.create')->middleware('auth');
Route::post('/student/store','LogController@store')->name('student.store')->middleware('auth');

//Document Controller
Route::get('/docindex','DocumentController@showdocindex')->name('doc.index')->middleware('auth');
Route::get('/student/create','DocumentController@create')->name('student.create')->middleware('auth');
Route::post('/student/store','DocumentController@store')->name('student.store')->middleware('auth');

Route::get('/studentinfoindex','StudentController@showinfoindex')->name('info.index')->middleware('auth');
Route::get('document-upload', 'DocumentController@documentupload')->name('document.upload')->middleware('auth');
Route::post('document-upload', 'DocumentController@document')->name('document.upload.post');
Auth::routes();
