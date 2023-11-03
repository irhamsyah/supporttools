<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkuuser extends Model
{
    public function pkudata(){
        return $this->hasMany('App\Pkudata','id','pic_id');
    }
    public $timestamps = false;
    protected $table = 'pkuusers';
    protected $fillable = ['nama'];
}
