<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuanlyController extends Controller
{
    //
    public function getQuanly(){
    	return view('quanly');
    }
    public function getThemSanPham(){
    	return view('themsanpham');
    }
    public function getDanhSachSanPham(){
    	return view('danhsachsanpham');
    }
}
