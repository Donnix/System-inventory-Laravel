<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventarisir extends Model
{
    protected $table='inventarisis';
    protected $fillable = [
        'nama','kondisi','keterangan','jumlah','id_jenis','tanggal_register','id_ruang','kode_inventaris','id_petugas',
    ];
}
