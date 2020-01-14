@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('types.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Jenis:</strong>
                {{ $type->id }}</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NAMA Jenis:</strong>
                {{ $type->nama_jenis }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>KODE Jenis:</strong>
                {{ $type->kode_jenis }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DETAIL Jenis:</strong>
                {{ $type->keterangan }}
            </div>
        </div>
        
      




    </div>
@endsection