<?php

use Illuminate\Database\Seeder;

class phanquyentk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('phanquyentk')->insert([
 
			'roleid' => 'kh',
 
			'rolename' => 'khach'
		]);
    }
}
