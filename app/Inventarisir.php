<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventarisir extends Model
{
    protected $table='inventarisis';
    protected $fillable = [
        'nama','kondisi','keterangan','jumlah','nama_jenis','tanggal_register','nama_ruangan','nama_petugas',
    ];
}
