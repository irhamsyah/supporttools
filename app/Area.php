<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function itppi()
    {
        return $this->hasMany('App\Itppi','id','id_area');
    }
    public $timestamps = false;
    protected $table = 'areas';
    protected $fillable = ['nama_area'];

}
