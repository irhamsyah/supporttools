<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Namapelatihan extends Model
{
    public $timestamps = false;
    protected $fillable = ['nama_pelatihan'];
    protected $table = 'namapelatihans';

    public function pelatihan()
    {
        return $this->hasMany('App\Pelatihan','id','nmpelatihan_id');
    }
}
