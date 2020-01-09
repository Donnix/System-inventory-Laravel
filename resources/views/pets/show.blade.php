@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Petugas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pets.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
            

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Petugas:</strong>
                {{ $pet->nama_petugas }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                {{ $pet->jk_petugas }}
            </div>
        </div>
       
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                {{ $pet->username }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {{ $pet->password }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Level:</strong>
                {{ $pet->nama_level }}
            </div>
        </div>
        
@endsection