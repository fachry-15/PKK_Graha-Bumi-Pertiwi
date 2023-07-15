<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_anggota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_panjang');
            $table->integer('rt');
            $table->string('nama_panggilan');
            $table->string('jabatan');
            $table->integer('tahun_jbt');
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
        Schema::dropIfExists('tb_anggota');
    }
}
