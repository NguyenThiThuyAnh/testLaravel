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

Route::get('anhnguyen',function(){
   return 'My Web';
});

Route::get('anhnguyen/{theSubject}','AboutController@showsubject');

Route::get('anhnguyen/controller','HomeController@getData');

// Sử dụng Cookie với request và response
Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');
//Files Uploaded
Route::get('uploadFile',function() {
    return view('welcome');
});

Route::get(' demo/{demo}','MyController@postFile')->name('demo.postFile');

Route::resource('user','Backend\DemoController');
Route::get('/admin','Admin\AdminController@index')->name('admin.index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
