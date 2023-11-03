<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkudata extends Model
{
    public function pkuuser()
    {
        return $this->belongsTo('App\Pkuuser','pic_id','id');
    }
    public $timestamps = false;
    protected $table = 'pkudatas';
    protected $fillable = [
        'pic_id',
        'mba_maya_mekaar_target',
        'mba_maya_mekaar_realisasi',
        'mba_maya_ulamm_target',
        'mba_maya_ulamm_realisasi',
        'kak_wulan_mekaar_target',
        'kak_wulan_mekaar_realisasi',
        'pameran_target',
        'pameran_realisasi'
    ];
}
