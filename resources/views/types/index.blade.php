@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('types.create') }}"> Add New Jenis</a>
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
        @foreach ($jenises as $type)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $type->id }}</td>
            <td>{{ $type->nama_jenis }}</td>
            <td>{{ $type->kode_jenis }}</td>
            <td>{{ $type->keterangan}}</td>
           
    
            <td>
                <form action="{{ route('types.destroy',$type->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('types.show',$type->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('types.edit',$type->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $types->links() !!}
      
@endsection