<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_san_pham');
            $table->decimal('gia',15,4);
            $table->text('mo_ta');
            $table->string('url_hinh');
            $table->dateTime('ngay_dang');
            $table->integer('ton_kho');
            $table->integer('so_lan_mua');
            $table->integer('so_lan_xem');
            $table->integer('an_hien');
            $table->integer('id_loai')->unsigned();
            $table->foreign('id_loai')->references('id')->on('loai_san_pham')->onDelete('cascade');
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
        Schema::drop('san_pham');
    }
}
