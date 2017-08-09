<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaikhoanloginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoanlogin', function (Blueprint $table) {
            $table->string('tendangnhap');
            $table->primary('tendangnhap');
            $table->string('matkhau');
            $table->string('tenkhach');
            $table->string('diachi');
            $table->integer('sodienthoai');
            $table->string('email');
            $table->string('roleid');
            $table->foreign('roleid')->references('roleid')->on('phanquyentk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taikhoanlogin');
    }
}
