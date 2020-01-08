@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Ruangan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ruangs.index') }}"> Back</a>
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
  
    <form action="{{ route('ruangs.update',$ruang->id) }}" method="POST">
        @csrf
        @method('PUT')
  
         <div class="row">
          
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Ruangan:</strong>
                    <input type="text" name="nama_ruangan" value="{{ $ruang->nama_ruangan }}" class="form-control" placeholder="Nama Ruangan">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Ruangan:</strong>
                    <input type="number" name="kode_ruangan" value="{{ $ruang->kode_ruangan}}" class="form-control" placeholder="kode Ruangan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <input type="text" name="keterangan" value="{{ $ruang->keterangan }}" class="form-control" placeholder="Keterangan">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection