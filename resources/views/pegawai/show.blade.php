@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Pegawai</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('peminjaman.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
   
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Pegawai:</strong>
                {{ $pegawai->id}}
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai:</strong>
                {{ $pegawai->nama_pegawai}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIP:</strong>
                {{$pegawai->nip}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                {{$pegawai->jk_pegawai}}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NO HP:</strong>
                {{$pegawai->nohp_pegawai}}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                {{$pegawai->alamat}}
            </div>
        </div>
        
      




    </div>
@endsection