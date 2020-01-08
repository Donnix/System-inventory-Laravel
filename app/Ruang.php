<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table='ruangans';
    protected $fillable = [
       'nama_ruangan','kode_ruangan','keterangan'
     ];}
