@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM LEVEL</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('level.create') }}"> Add New Level</a>
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
            <th>ID Level</th>
            <th>NAMA Level</th>
            <th>DETAIL level</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($levels as $level)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $level->id }}</td>
            <td>{{ $level->nama_level }}</td>
            <td>{{ $level->keterangan}}</td>
           
    
            <td>
                <form action="{{ route('level.destroy',$level->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('level.show',$level->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('level.edit',$level->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $levels->links() !!}
      
@endsection