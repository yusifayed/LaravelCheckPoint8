<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelbarangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode'); //membuat kolom nama
            $table->string('barang'); //membuat kolom email
            $table->string('stok'); //membuat kolom no hp
            $table->text('harga'); //membuat kolom alamat dengan tipe text
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
        Schema::dropIfExists('modelbarangs');
    }
}
