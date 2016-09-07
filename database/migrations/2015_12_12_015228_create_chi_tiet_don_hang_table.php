<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('so_luong');
            $table->decimal('gia_ban',15,4);
            $table->integer('id_don_dat_hang')->unsigned();
            $table->foreign('id_don_dat_hang')->references('id')->on('don_dat_hang')->onDelete('cascade');
            $table->integer('id_san_pham')->unsigned();
            $table->foreign('id_san_pham')->references('id')->on('san_pham')->onDelete('cascade');
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
        Schema::drop('chi_tiet_don_hang');
    }
}
