<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePkudatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkudatas', function (Blueprint $table) {
            $table->id();
            $table->integer('pic_id');
            $table->string('mba_maya_mekaar_target')->nullable();
            $table->string('mba_maya_mekaar_realisasi')->nullable();
            $table->string('mba_maya_ulamm_target')->nullable();
            $table->string('mba_maya_ulamm_realisasi')->nullable();
            $table->string('kak_wulan_mekaar_target')->nullable();
            $table->string('kak_wulan_mekaar_realisasi')->nullable();
            $table->string('pameran_target')->nullable();
            $table->string('pameran_realisasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pkudatas');
    }
}
