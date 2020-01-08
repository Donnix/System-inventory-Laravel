@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jenis.create') }}"> Add New Jenis</a>
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
            <th>ID Jenis</th>
            <th>NAMA Jenis</th>
            <th>KODE Jenis</th>
            <th>DETAIL Jenis</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($jenises as $jenis)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $jenis->id }}</td>
            <td>{{ $jenis->nama_jenis }}</td>
            <td>{{ $jenis->kode_jenis }}</td>
            <td>{{ $jenis->keterangan}}</td>
           
    
            <td>
                <form action="{{ route('jenis.destroy',$jenis->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('jenis.show',$jenis->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('jenis.edit',$jenis->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $jenises->links() !!}
      
@endsection