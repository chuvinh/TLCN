<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //
    public function getRegister(){
    	return view('dangky');
    }
    public function postRegister(Request $request){
    	$relues=[
    		'tendangnhap'	=>	'required|min:8',
    		'matkhau'		=>	'required|min:8',
    		'vermatkhau'	=>	'required|min:8',
    		'hovaten'		=>	'required|min:10',
    		'diachi'		=>	'required|min:8',
    		'sodienthoai'	=>	'required|min:10',
    		'email'			=>	'required|email'
    	];
    	$message=[
    		'tendangnhap.required'	=>	'Đây là trường bắt buộc',
    		'tendangnhap.min'		=>	'Tên đăng nhập phải chứa ít nhất 8 kí tự',
    		'matkhau.required'		=>	'Đây là trường bắt buộc',
    		'matkhau.min'			=>	'Mật khẩu phải chứa ít nhất 8 kí tự',
    		'vermatkhau.required'	=>	'Đây là trường bắt buộc',
    		'vermatkhau.min'		=>	'Mật khẩu phải chứa ít nhất 8 kí tự',
    		'hovaten.required'		=>	'Đây là trường bắt buộc',
    		'hovaten.min'			=>	'Họ và tên phải chứa ít nhất 10 kí tự',
    		'diachi.required'		=>	'Đây là trường bắt buộc',
    		'diachi.min'			=>	'Địa chỉ phải chứa ít nhất 8 kí tự',
    		'sodienthoai.required'	=>	'Đây là trường bắt buộc',
    		'sodienthoai.min'		=>	'Số điện thoại phải chứa ít nhất 10 kí tự',
    		'email.required'		=>	'Đây là trường bắt buộc',
    		'email.email'			=>	'Email không đúng'
    	];
    	$validator=Validator::make($request->all(),$relues,$message);
    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator);
    	}else{
    		$tendangnhap=$request->tendangnhap;
    		$matkhau=$request->matkhau;
    		$vermatkhau=$request->vermatkhau;
    		$hovaten=$request->hovaten;
    		$diachi=$request->diachi;
    		$sodienthoai=$request->sodienthoai;
    		$email=$request->email;
    		$arr=[
    			'tendangnhap'=>$tendangnhap,
    			'matkhau'=>md5($matkhau),
    			'tenkhach'=>$hovaten,
    			'diachi'=>$diachi,
    			'sodienthoai'=>$sodienthoai,
    			'email'=>$email,
    			'roleid'=>'kh'
    		];
    		if(DB::table('taikhoanlogin')->insert($arr)){
				$errors=new MessageBag(['errorsSuccse'=>'Đăng ký thành công']);
				return redirect()->back()->withInput()->withErrors($errors);
			}
			else{
				$errors=new MessageBag(['errorsRegister'=>'Đăng ký thất bại']);
				return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }
}
