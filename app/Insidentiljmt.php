<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insidentiljmt extends Model
{
    public $timestamps=false;
    protected $table='insidentiljmt';
    protected $fillable =[
        'jenis_kegiatan',
        'tgl_kegiatan',
        'jml_peserta',
        'keterangan'
    ];
}
