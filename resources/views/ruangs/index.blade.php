@extends('layouts.master')
 
@section('content')
    <br> </br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ruangan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ruangs.create') }}"> Tambah Ruangan</a>
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
            <th>ID Ruangan</th>
            <th>Nama Ruangan</th>
            <th>Kode Ruangan</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ruangs as $ruang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ruang->id }}</td>
            <td>{{ $ruang->nama_ruangan }}</td>
            <td>{{ $ruang->kode_ruangan }}</td>
            <td>{{ $ruang->keterangan }}</td>
            <td>
                <form action="{{ route('ruangs.destroy',$ruang->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('ruangs.show',$ruang->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('ruangs.edit',$ruang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $ruangs->links() !!}

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      
@endsection
