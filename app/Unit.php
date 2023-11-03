<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function inventory()
    {
        return $this->hasMany('App\Inventory','kode_unit','kode_unit');
    }
    public $timestamps = false;
    protected $table = 'unit';
    protected $fillable = [
        'kode_unit',
        'nama_unit'
    ];
}