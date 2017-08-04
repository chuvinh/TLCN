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
    return view('trangchu');
});
Route::get('controller','MyFirstController@getController');
Route::get('sanpham',function(){
	return view('sanpham');
});
Route::get('dangnhap',function(){
	return view('dangnhap');
});
Route::get('dangky',function(){
	return view('dangky');
});