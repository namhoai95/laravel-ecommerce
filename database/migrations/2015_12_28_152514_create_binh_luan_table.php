<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinhLuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binh_luan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_nguoi_dung')->unsigned();
            $table->foreign('id_nguoi_dung')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_san_pham')->unsigned();
            $table->foreign('id_san_pham')->references('id')->on('san_pham')->onDelete('cascade');
            $table->string('ten_nguoi_dung');
            $table->text('noi_dung');
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
        Schema::drop('binh_luan');
    }
}
