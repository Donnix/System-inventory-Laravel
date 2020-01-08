@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jenis.index') }}"> Back</a>
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
  
    <form action="{{ route('jenis.update',$jenis->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama jenis</strong>
                <input type="text" name="jenis" value="{{$jenis->nama_jenis}}" class="form-control" placeholder=" Masukan Nama jenis">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Jenis</strong>
                <input type="text" name="jenis" value="{{$jenis->kode_jenis}}" class="form-control" placeholder=" Masukan kode">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail Jabatan </strong>
                    <textarea class="form-control" style="height:150px" name="keterangan" placeholder="keterangan">{{ $jenis->keterangan }}</textarea>
                </div>
            </div>

      



            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection