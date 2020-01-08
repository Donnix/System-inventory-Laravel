@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Petugas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('crew.index') }}"> Back</a>
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
  
    <form action="{{ route('level.update',$level->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username</strong>
                <input type="text" name="username" value="{{$crew->username}}" class="form-control" placeholder=" Masukan username">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password</strong>
                <input type="text" name="password" value="{{$crew->password}}" class="form-control" placeholder=" Masukan password">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Petugas</strong>
                <input type="text" name="nama_petugas" value="{{$crew->nama_petugas}}" class="form-control" placeholder=" Masukan Nama Petugas">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Level</strong>
                <select class="form-control" name="id_level" id="id_level">
                    @foreach($levels as $level)
                    <option value="{{$level->nama_level}}" @if($karyawan->id_level == $level->nama_level)selected @endif>{{$level->nama_level}}</option>
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