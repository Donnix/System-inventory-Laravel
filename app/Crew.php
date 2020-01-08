<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $table='employes';
    protected $fillable = [
        'username','password','nama_petugas','id_level'
    ];
}
