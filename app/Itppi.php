<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itppi extends Model
{
    public function unit()
    {
        return $this->belongsTo('App\Unit','kode_unit','kode_unit');
    }

    public function region()
    {
        return $this->belongsTo('App\Region','id_region','id');
    }

    public function area()
    {
        return $this->belongsTo('App\Area','id_area','id');
    }
    public $timestamps = true;
    protected $table='itppis';
    protected $fillable = [
        'cabang',
        'region',
        'id_area',
        'kode_unit',
        'jumlah_laptop_pc',
        'laptop_pc_aktif',
        'laptop_pc_rusak',
        'laptop_pc_jt_lelang',
        'laptop_pc_hilang',
        'jml_fao',
        'jml_std_laptop',
        'gap_laptop',
        'keterangan'
    ];
}
