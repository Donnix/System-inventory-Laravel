<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table='peminjamans';
    protected $fillable = [
        'nama','jumlah','tanggal_pinjam','tanggal_kembali','status_peminjaman','nama_pegawai',
    ];
}
