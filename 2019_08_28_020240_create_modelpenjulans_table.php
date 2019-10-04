<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelpenjulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelpenjulans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode'); //membuat kolom nama
            $table->string('jumblah'); //membuat kolom email
           
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
        Schema::dropIfExists('modelpenjulans');
    }
}
