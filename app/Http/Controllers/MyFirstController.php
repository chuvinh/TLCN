<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    //
    public function getController(){
    	echo 'Hello';
    }
    public function getSanPham(){
    	return view('sanpham');
    }
}
