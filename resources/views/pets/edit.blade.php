@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Petugas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
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
  
    <form action="{{ route('pets.update',$pet->id) }}" method="POST">
        @csrf
        @method('PUT')
  
         <div class="row">
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama petugas:</strong>
                    <input type="text" name="nama_petugas" value="{{ $pet->nama_petugas }}" class="form-control" placeholder="Nama petugas">
                </div>
            </div>
           
           
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin</strong>
                <select class="form-control" name="jk_petugas" id="jk_petugas">
                <option value="Laki-laki" @if ($pet->jk_petugas == "Laki-laki")selected @endif>Laki-laki</option>
                <option value="Perempuan"@if( $pet->jk_petugas == "Perempuan")selected @endif>Perempuan</option>
                    
                </select>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" name="username" value="{{ $pet->username }}" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="text" name="password" value="{{ $pet->password }}" class="form-control" placeholder="Password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level</strong>
                <select class="form-control" name="nama_level" id="nama_level">
                    @foreach($levels as $level)
                    <option value="{{$level->nama_level}}" @if($pet->nama_level == $level->nama_level)selected @endif>{{$level->nama_level}}</option>
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