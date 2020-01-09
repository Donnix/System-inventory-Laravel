@extends('layouts.master')
 
@section('content')
    <br> </br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Petugas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pets.create') }}"> Tambah Petugas</a>
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
            <th>NO</th>
            <th>ID Petugas</th>
            <th>Nama Petugas</th>
            <th>JK Petugas</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama Level</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pets as $pet)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->nama_petugas }}</td>
            <td>{{ $pet->jk_petugas }}</td>
            <td>{{ $pet->username }}</td>
            <td>{{ $pet->password }}</td>
            <td>{{ $pet->nama_level }}</td>
            <td>
                <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pets.show',$pet->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pets.edit',$pet->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pets->links() !!}

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      
@endsection
