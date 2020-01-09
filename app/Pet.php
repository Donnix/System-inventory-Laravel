<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table='employes';
    protected $fillable = [
        'nama_petugas','jk_petugas','username','password','nama_level',
            ];
}
          