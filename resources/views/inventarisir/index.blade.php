@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM INVENTARIS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('inventarisir.create') }}"> Add New inventaris</a>
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
            <th>ID Inventaris</th>
            <th>Nama Barang</th>
            <th>kondisi</th>
            <th>keterangan</th>
            <th>jumlah</th>
            <th>Jenis</th>
            <th>Tanggal register</th>
            <th>Ruangan</th>
            <th>Petugas</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($inventarisirs as $inventarisir)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $inventarisir->id }}</td>
            <td>{{ $inventarisir->nama }}</td>
            <td>{{ $inventarisir->kondisi}}</td>
            <td>{{ $inventarisir->keterangan}}</td>
            <td>{{ $inventarisir->jumlah}}</td>
            <td>{{ $inventarisir->nama_jenis}}</td>
            <td>{{ $inventarisir->tanggal_register}}</td>
            <td>{{ $inventarisir->nama_ruangan}}</td>
            <td>{{ $inventarisir->nama_petugas}}</td>
            <td>
                <form action="{{ route('inventarisir.destroy',$inventarisir->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('inventarisir.show',$inventarisir->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('inventarisir.edit',$inventarisir->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $inventarisirs->links() !!}
      
@endsection