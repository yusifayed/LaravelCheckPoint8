<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelpembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelpembelians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode'); //membuat kolom nama
            $table->string('jumblah'); //membuat kolom email
           
            $table->text('harga'); //membuat

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
        Schema::dropIfExists('modelpembelians');
    }
}
