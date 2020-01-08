@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jenis.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Jenis:</strong>
                {{ $jenis->id }}</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NAMA Jenis:</strong>
                {{ $jenis->nama_level }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>KODE Jenis:</strong>
                {{ $jenis->nama_level }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DETAIL Jenis:</strong>
                {{ $jenis->keterangan }}
            </div>
        </div>
        
      




    </div>
@endsection