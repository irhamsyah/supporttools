<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdmmekaar extends Model
{
    public function unit()
    {
        return $this->belongsTo('App\Unit','kode_unit','kode_unit');
    }
    public $timestamps = false;
    protected $table = 'sdmmekaars';
    protected $fillable = [
        'kode_unit',
        'nama_unit',
        'noa_nasabah',
        'kum',
        'sao_standard',
        'sao_realisasi',
        'ao_standard',
        'ao_realisasi',
        'fao_standard',
        'fao_realisasi'
    ];
}
