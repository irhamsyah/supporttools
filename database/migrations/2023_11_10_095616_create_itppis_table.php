<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItppisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itppis', function (Blueprint $table) {
            $table->id();
            $table->string('cabang',100)->nullable();
            $table->string('region',100)->nullable();
            $table->string('area',100)->nullable();
            $table->integer('kode_unit')->nullable();
            $table->integer('jumlah_laptop_pc')->nullable();
            $table->integer('laptop_pc_aktif')->nullable();
            $table->integer('laptop_pc_rusak')->nullable();
            $table->integer('laptop_pc_jt_lelang')->nullable();
            $table->integer('laptop_pc_hilang')->nullable();
            $table->integer('jml_fao')->nullable();
            $table->integer('jml_std_laptop')->nullable();
            $table->integer('gap_laptop')->nullable();
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
        Schema::dropIfExists('itppis');
    }
}
