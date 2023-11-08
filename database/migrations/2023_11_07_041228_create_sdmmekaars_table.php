<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmmekaarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdmmekaars', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_unit',60)->nullable();
            $table->string('nama_unit',60)->nullable();
            $table->integer('noa_nasabah')->nullable();
            $table->integer('kum')->nullable();
            $table->integer('sao_standard')->nullable();
            $table->integer('sao_realisasi')->nullable();
            $table->integer('ao_standard')->nullable();
            $table->integer('ao_realisasi')->nullable();
            $table->integer('fao_standard')->nullable();
            $table->integer('fao_realisasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sdmmekaars');
    }
}