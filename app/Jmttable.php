<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jmttable extends Model
{
    public $timestamps = false;
    protected $table = 'jmttable';
    protected $fillable = ['nama','target','realisasi'];
}
