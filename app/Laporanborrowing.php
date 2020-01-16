<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporanborrowing extends Model
{
    protected $table="laporanborrowings";
        protected $fillable =[
            'nama','nama_peminjam','jumlah','tanggal_pinjam','tanggal_kembali','status_peminjaman','nama_pegawai'
        ];
}
