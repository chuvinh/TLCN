<?php

use Illuminate\Database\Seeder;

class taikhoanlogin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taikhoanlogin')->insert([
 
			'tendangnhap' => 'chuvinh1',
			'matkhau' => md5(12345678),
 			'tenkhach' =>'vinh',
 			'diachi' => 'q.9',
 			'sodienthoai' => '01685699420',
 			'email' => 'sdasdasd',
 			'roleid' => 'kh'
		]);
    }
}
