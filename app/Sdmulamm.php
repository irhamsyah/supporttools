<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdmulamm extends Model
{
    public function unitulamm()
    {
        return $this->belongsTo('App\Unitulamm','kode_unit','kode_unit');
    }
    public $timestamps = false;
    // protected $table = 'sdmulamms';
    // protected $primaryKey = 'kode_unit';
    // protected $keyType = 'string';
    protected $fillable = [
        'kode_unit',
        'kuu',
        'aom',
        'kam',
        'aom_pantas'
    ];
}
