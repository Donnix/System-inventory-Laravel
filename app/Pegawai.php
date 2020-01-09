<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table='pegawas';
    protected $fillable = [
        'nama_pegawai','nip','jk_pegawai','nohp_pegawai','alamat',
            ];
}
