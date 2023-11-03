<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenispelatihan extends Model
{
    public $timestamps = false;
    protected $table = 'jenispelatihans';
    protected $fillable = ['nama_pelatihan'];

    public function pelatihan()
    {
        return $this->hasMany('App\Pelatihan','id','jnspelatihan_id');
    }

}
