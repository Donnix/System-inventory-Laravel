@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM Petugas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('crew.create') }}"> Add New Petugas</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
        <td>NO</td>
            <th>ID Petugas</th>
            <th>Username</th>
            <th>password</th>
            <th>Nama Pegawai</th>
            <th>Nama Level</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($crews as $crew)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $crew->id }}</td>
            <td>{{ $crew->username }}</td>
            <td>{{ $crew->password}}</td>
            <td>{{ $crew->nama_petugas}}</td>
            <td>{{ $crew->id_level}}</td>
    
            <td>
                <form action="{{ route('crew.destroy',$crew->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('crew.show',$crew->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('crew.edit',$crew->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $crew->links() !!}
      
@endsection