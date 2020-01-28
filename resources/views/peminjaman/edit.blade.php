@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Peminjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('peminjaman.index') }}"> Back</a>
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
  
    <form action="{{ route('peminjaman.update',$peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang</strong>
                <select class="form-control" name="nama" id="nama">
                    @foreach($inventarisirs as $inventarisir)
                    <option value="{{$inventarisir->nama}}" @if($peminjaman->nama == $inventarisir->nama)selected @endif>{{$inventarisir->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Peminjam</strong>
                <input type="text" name="nama_peminjam" class="form-control" value="{{$peminjaman->nama_peminjam }}" placeholder=" Masukan Nama Anda">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah</strong>
                <input type="number" value="{{$peminjaman->jumlah}}" name="jumlah" class="form-control" placeholder=" Masukan Jumlah">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pinjam</strong>
                <input type="date" name="tanggal_pinjam"  value="{{$peminjaman->tanggal_pinjam}}" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Kembali</strong>
                <input type="date" name="tanggal_kembali"  value="{{$peminjaman->tanggal_kembali}}" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Status Peminjaman</strong>
            <select class="form-control" name="status_peminjaman" id="status_peminjaman">
                <option value="Pinjam" @if ($peminjaman->status_peminjaman == "Pinjam")selected @endif>Pinjam</option>
                 <option value="Sewa" @if ($peminjaman->status_peminjaman == "Sewa")selected @endif>Sewa</option>
                 </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai</strong>
                <select class="form-control" name="nama_pegawai" id="nama_pegawai">
                    @foreach($pegawais as $pegawai)
                    <option value="{{$pegawai->nama_pegawai}}" @if($peminjaman->nama_pegawai == $pegawai->nama_pegawai)selected @endif>{{$pegawai->nama_pegawai}}</option>
                    @endforeach
                </select>
            </div>
        </div>




            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection