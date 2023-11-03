<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{

    public $timestamps = false;
    protected $table = 'pelatihans';

    protected $fillable = ['pic','jnspelatihan_id','nmpelatihan_id','jenisunit_id','target','realisasi'];

    public function jenispelatihan()
    {
        return $this->belongsTo('App\Jenispelatihan','jnspelatihan_id','id');
    }
    public function namapelatihan() 
    {
        return $this->belongsTo('App\Namapelatihan','nmpelatihan_id','id');
    }
    public function jenisunit()
    {
        return $this->belongsTo('App\Jenisunit','jenisunit_id','id');
    }
    public function pkuuser()
    {
        return $this->belongsTo('App\Pkuuser','pic','id');
    }
}
