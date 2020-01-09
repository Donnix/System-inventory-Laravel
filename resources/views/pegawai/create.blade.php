@extends('layouts.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Pegawai</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pegawai.index') }}"> Back</a>
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
   
<form action="{{ route('pegawai.store') }}" method="POST">
    @csrf
  
     <div class="row">

     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai</strong>
                <input type="text" name="nama_pegawai" class="form-control" placeholder=" Masukan Nama Pegawai">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIP</strong>
                <input type="text" name="nip" class="form-control" placeholder=" Masukan Nip">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Jenis Kelamin</strong>
            <select class="form-control" name="jk_pegawai" id="jk_pegawai">
                <option value="Laki-laki">Laki-laki</option>
                 <option value="Perempuan" >Perempuan</option>
                 </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NO HP</strong>
                <input type="text" name="nohp_pegawai" class="form-control" placeholder=" Masukan No HP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Pegawai  </strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="alamat"></textarea>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection