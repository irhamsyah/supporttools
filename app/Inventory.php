<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';

    public function unit(){
        return $this->belongsTo('App\Unit','kode_unit','kode_unit');
    }
    protected $fillable=[
        'cabang',
        'region',
        'area',
        'kode_unit',
        'nama_unit',
        'jumlah_kdo',
        'kdo_aktif',
        'kdo_rusak',
        'kdo_jt_lelang',
        'kdo_hilang',
        'jml_sdm_bisnis',
        'jml_std_kdo',
        'gap_kdo',
        'keterangan'
    ];
}
