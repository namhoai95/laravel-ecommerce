<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonDatHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_dat_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('ngay_lap');
            $table->decimal('tong_thanh_tien',15,4);
            $table->integer('id_tai_khoan')->unsigned();
            $table->foreign('id_tai_khoan')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_tinh_trang');
            $table->foreign('id_tinh_trang')->references('id')->on('tinh_trang')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('don_dat_hang');
    }
}
