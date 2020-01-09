@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pegawai</h2>
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
  
    <form action="{{ route('pegawai.update',$pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

      
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai</strong>
                <input type="text" name="nama_pegawai" value="{{$pegawai->nama_pegawai }}" class="form-control" placeholder=" Masukan Nama Pegawai">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIP</strong>
                <input type="text" name="nip" class="form-control" value="{{$pegawai->nip}}" placeholder=" Masukan Nip">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin</strong>
                <select class="form-control" name="jk_pegawai" id="jk_pegawai">
                <option value="Laki-laki" @if ($pegawai->jk_pegawai == "Laki-laki")selected @endif>Laki-laki</option>
                <option value="Perempuan"@if( $pegawai->jk_pegawai == "Perempuan")selected @endif>Perempuan</option>
                    
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NO HP</strong>
                <input type="text" name="nohp_pegawai"  value="{{$pegawai->nohp_pegawai }}" class="form-control" placeholder=" Masukan No HP">
            </div>
        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Pegawai  </strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="alamat">{{$pegawai->alamat }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection