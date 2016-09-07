<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThuongHieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuong_hieu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_thuong_hieu');
            $table->integer('thu_tu');
            $table->integer('an_hien');
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
        Schema::drop('thuong_hieu');
    }
}
