<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmulammsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdmulamms', function (Blueprint $table) {
            $table->id();
            $table->string('kode_unit',10)->primary();
            $table->integer('kuu')->nullable();
            $table->integer('aom')->nullable();
            $table->integer('kam')->nullable();
            $table->integer('aom_pantas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sdmulamms');
    }
}
