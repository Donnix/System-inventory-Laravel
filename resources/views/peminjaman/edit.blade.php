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
                <option value="Sudah" @if ($peminjaman->status_peminjaman == "Sudah")selected @endif>Sudah</option>
                 <option value="Kembali" @if ($peminjaman->status_peminjaman == "Kembali")selected @endif>Kembali</option>
                 </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Peminjaman</strong>
                <input type="text" name="id_pegawai" value="{{$peminjaman->id_pegawai}}" class="form-control" placeholder=" MasukanID">
            </div>
        </div>




            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection