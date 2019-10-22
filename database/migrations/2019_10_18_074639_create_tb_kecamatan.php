<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbKecamatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kecamatan', function (Blueprint $table) {
            $table->increments('id_kecamatan');
            $table->integer('id_provinsi')->unsigned();
            $table->foreign('id_provinsi')->references('id_provinsi')->on('tb_provinsi');
            $table->integer('id_kabupaten')->unsigned();
            $table->foreign('id_kabupaten')->references('id_kabupaten')->on('tb_kabupaten');
            $table->string('nama_kecamatan');
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
        Schema::dropIfExists('tb_kecamatan');
    }
}
