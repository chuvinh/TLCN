<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('dangnhap');
    }
    public function postLogin(Request $request){
    	$relues=[
    		'name'		=>	'required|min:8',
    		'password'	=>	'required|min:8'
    	];
    	$message=[
    		'name.required'		=>	'Đây là trường bắt buộc',
    		'name.min'			=>	'Tên phải chứa ít nhất 8 kí tự',
    		'password.required'	=>	'Đây là trường bắt buộc',
    		'password.min'		=>	'Mật khẩu phải chứa ít nhất 8 kí tự'
    	];
    	$validator=Validator::make($request->all(),$relues,$message);
    	if($validator->fails())
    	{
    		return redirect()->back()->withErrors($validator);
    	}else{
    		$name=$request->name;
    		$password=$request->password;
    		$arr=[
    			'tendangnhap' => $name,

				'matkhau'=> md5($password)

			];
			if(DB::table('taikhoanlogin')->where($arr)->count()==1){

				return redirect()->intended('/');
			}
			else{
				$errors=new MessageBag(['errorsLogin'=>'Tên đăng nhập hoặc mật khẩu không đúng']);
				return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }
}

 