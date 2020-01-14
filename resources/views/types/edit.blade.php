@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('types.index') }}"> Back</a>
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
  
    <form action="{{ route('types.update',$type->id)  }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama type</strong>
                <input type="text" name="nama_jenis" value="{{$type->nama_jenis}}" class="form-control" placeholder=" Masukan Nama type">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Jenis</strong>
                <input type="text" name="kode_jenis" value="{{$type->kode_jenis}}" class="form-control" placeholder=" Masukan kode">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail Jabatan </strong>
                    <textarea class="form-control" style="height:150px" name="keterangan" placeholder="keterangan">{{ $type->keterangan }}</textarea>
                </div>
            </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection