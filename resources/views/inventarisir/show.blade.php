@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Inventaris</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('inventarisir.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Inventaris:</strong>
                {{ $inventarisir->id }}</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $inventarisir->nama }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kondisi:</strong>
                {{ $inventarisir->kondisi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>keterangan:</strong>
                {{ $inventarisir->keterangan }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jumlah:</strong>
                {{ $inventarisir->jumlah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id_jenis:</strong>
                {{ $inventarisir->id_jenis }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal_register:</strong>
                {{ $inventarisir->tanggal_register }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id_ruang:</strong>
                {{ $inventarisir->id_ruang }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kode_inventaris:</strong>
                {{ $inventarisir->kode_inventaris }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id petugas:</strong>
                {{ $inventarisir->id_petugas }}
            </div>
        </div>
        
      




    </div>
@endsection