@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Ruangan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ruangs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
            
    <div class="row">
       
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ruangan:</strong>
                {{ $ruang->nama_ruangan }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Ruangan:</strong>
                {{ $ruang->kode_ruangan }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                {{ $ruang->keterangan }}
            </div>
        </div>
       
        
@endsection