@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM PEGAWAI</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Add New Pegawai</a>
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
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>NIP</th>
            <th>JK Pegawai</th>
            <th>NO HP</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pegawais as $pegawai)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $pegawai->id }}</td>
            <td>{{ $pegawai->nama_pegawai }}</td>
            <td>{{ $pegawai->nip}}</td>
            <td>{{ $pegawai->jk_pegawai}}</td>
            <td>{{ $pegawai->nohp_pegawai}}</td>
            <td>{{ $pegawai->alamat}}</td>
            <td>
                <form action="{{ route('pegawai.destroy',$pegawai->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pegawai.show',$pegawai->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pegawai.edit',$pegawai->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pegawais->links() !!}
      
@endsection