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
Route::get('san-pham',function(){
	return view('sanpham');
});
Route::get('dang-ky','RegisterController@getRegister');
Route::post('dang-ky','RegisterController@postRegister');

Route::get('do-nam',function(){
	return view('donam');
});
Route::get('dang-nhap','LoginController@getLogin');
Route::post('dang-nhap','LoginController@postLogin');
Route::get('test',function(){
	return view('test');
});
Route::get('admin','AdminController@getAdmin');
Route::get('quan-ly','QuanlyController@getQuanly');
Route::get('quan-ly/them-san-pham','QuanlyController@getThemSanPham');
Route::get('quan-ly/danh-sach-san-pham','QuanlyController@getDanhSachSanPham');