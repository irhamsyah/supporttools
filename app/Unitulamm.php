<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unitulamm extends Model
{
    public function sdmulamm() {
        return $this->hasMany('App\Sdmulamm','kode_unit','kode_unit');
    }

    public $timestamps = false;
    protected $table = 'unitulamms';
    protected $primaryKey = 'kode_unit';
    protected $fillable = ['kode_unit','nama_unit'];
    protected $keyType = 'string';


}
