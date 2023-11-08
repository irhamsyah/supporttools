<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdmulamm extends Model
{
    public $timestamps = false;
    protected $table = 'sdmulamms';
    protected $fillable = [
        'nama_unit',
        'kuu',
        'aom',
        'kam',
        'aom_pantas'
    ];
}
