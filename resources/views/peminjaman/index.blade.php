@extends('layouts.master')
 
@section('content')
@if(Auth::user()->nama_level == "Peminjam")
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM PEMINJAMAN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('peminjaman.create') }}"> Add New Pinjaman</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    @else
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM PEMINJAMAN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('peminjaman.create') }}"> Add New Pinjaman</a>
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
            <th>ID Peminjaman</th>
            <th>Nama Barang</th>
            <th>Nama Peminjam</th>
            <th>Jumlah</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status Peminjaman</th>
            <th>NamaPegawai</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($peminjamans as $peminjaman)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $peminjaman->id }}</td>
            <td>{{ $peminjaman->nama }}</td>
            <td>{{ $peminjaman->nama_peminjam }}</td>
            <td>{{ $peminjaman->jumlah }}</td>
            <td>{{ $peminjaman->tanggal_pinjam }}</td>
            <td>{{ $peminjaman->tanggal_kembali}}</td>
            <td>{{ $peminjaman->status_peminjaman}}</td>
            <td>{{ $peminjaman->nama_pegawai}}</td>
            <td>
                <form action="{{ route('peminjaman.destroy',$peminjaman->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('peminjaman.show',$peminjaman->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('peminjaman.edit',$peminjaman->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Barang Sudah Kembali ?')">Kembali</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $peminjamans->links() !!}

    @endif
@endsection