<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChungloaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chung_loai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_chung_loai');
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
        Schema::drop('chung_loai');
    }
}
