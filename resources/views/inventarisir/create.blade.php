@extends('layouts.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Inventaris</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('inventarisir.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('inventarisir.store') }}" method="POST">
    @csrf
  
     <div class="row">

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama </strong>
                <input type="text" name="nama" class="form-control" placeholder=" Masukan Nama ">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kondisi </strong>
                <input type="text" name="kondisi" class="form-control" placeholder=" Masukan kondisi ">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail Inventaris:</strong>
                <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Detail Inventaris"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jumlah </strong>
                <input type="text" name="jumlah" class="form-control" placeholder=" Masukan jumlah ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>idjenis </strong>
                <input type="text" name="id_jenis" class="form-control" placeholder=" Masukan id jenis ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal register</strong>
                <input type="date" name="tanggal_register" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id ruang</strong>
                <input type="text" name="id_ruang" class="form-control" placeholder=" MasukanID Ruang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kode inventaris</strong>
                <input type="text" name="kode_inventaris" class="form-control" placeholder=" Masukan Kode Inventaris">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id petugas</strong>
                <input type="text" name="id_petugas" class="form-control" placeholder=" MasukanID petugas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection