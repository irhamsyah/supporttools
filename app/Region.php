<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function itppi()
    {
        return $this->hasMany('App\Itppi','id','id_region');
    }

    public $timestamps = false;
    protected $table='regions';
}
