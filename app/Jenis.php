<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table='jenises';
    protected $fillable = [
        'nama_jenis','kode_jenis','keterangan'
    ];
}
