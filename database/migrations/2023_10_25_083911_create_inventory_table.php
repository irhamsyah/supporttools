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
            $table->string('cabang',100);
            $table->string('region',100);
            $table->string('area',100);
            $table->integer('kode_unit');
            $table->string('nama_unit',100);
            $table->integer('jumlah_kdo');
            $table->integer('kdo_aktif');
            $table->integer('kdo_rusak');
            $table->integer('kdo_jt_lelang');
            $table->integer('kdo_hilang');
            $table->integer('jml_sdm_bisnis');
            $table->integer('jml_std_kdo');
            $table->integer('gap_kdo');
            $table->text('keterangan');
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
