<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table='employes';
    protected $fillable = [
        'nama_petugas','id_level','username','password'
            ];
}
          