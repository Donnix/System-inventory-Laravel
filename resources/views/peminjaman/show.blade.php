@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Peminjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('peminjaman.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Peminjaman:</strong>
                {{ $peminjaman->id }}</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah:</strong>
                {{ $peminjaman->tanggal_pinjam }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pinjam:</strong>
                {{ $peminjaman->tanggal_pinjam }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pinjam:</strong>
                {{ $peminjaman->tanggal_pinjam }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Kembali:</strong>
                {{ $peminjaman->tanggal_kembali }}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status peminjaman:</strong>
                {{ $peminjaman->status_peminjaman }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id Pegawai:</strong>
                {{ $peminjaman->nama_pegawai }}
            </div>
        </div>
        
      




    </div>
@endsection