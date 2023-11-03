<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenisunit extends Model
{
    public $timestamps = false;
    protected $table = 'jenisunits';
    protected $fillable = ['jenis_unit'];

    public function pelatihan()
    {
        return $this->hasMany('App\Pelatihan','id','jenisunit_id');
    }
}
