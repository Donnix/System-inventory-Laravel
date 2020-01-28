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
                <input type="number" name="jumlah" class="form-control" placeholder=" Masukan jumlah ">
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis</strong>
                <select class="form-control" name="nama_jenis" id="nama_jenis">
                @foreach($types as $type)
                <option value="{{$type->nama_jenis}}">{{$type->nama_jenis}}</option>
                @endforeach
                </select>
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
                <strong>Ruangan</strong>
                <select class="form-control" name="nama_ruangan" id="nama_ruangan">
                @foreach($ruangs as $ruang)
                <option value="{{$ruang->nama_ruangan}}">{{$ruang->nama_ruangan}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Petugas</strong>
                <select class="form-control" name="nama_petugas" id="nama_petugas">
                @foreach($pets as $pet)
                <option value="{{$pet->nama_petugas}}">{{$pet->nama_petugas}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection