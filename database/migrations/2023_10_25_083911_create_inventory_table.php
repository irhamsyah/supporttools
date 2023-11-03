<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('cabang',100)->nullable();
            $table->string('region',100)->nullable();
            $table->string('area',100)->nullable();
            $table->integer('kode_unit')->nullable();
            $table->string('nama_unit',100)->nullable();
            $table->integer('jumlah_kdo')->nullable();
            $table->integer('kdo_aktif')->nullable();
            $table->integer('kdo_rusak')->nullable();
            $table->integer('kdo_jt_lelang')->nullable();
            $table->integer('kdo_hilang')->nullable();
            $table->integer('jml_sdm_bisnis')->nullable();
            $table->integer('jml_std_kdo')->nullable();
            $table->integer('gap_kdo')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('inventory');
    }
}
