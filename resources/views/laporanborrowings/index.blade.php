@extends('layouts.master')
 
@section('content')
    <div class="row" class="form-control">
        <div class="col-lg-12 margin-tb">
      
            <div class="pull-left">
                <h2>Laporan</h2>
                <form action="/laporanborrowings/cari" method="GET">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <input type="date" class="form-control @error('startDate') is-invalid @enderror mb-3" name="startDate" id="startDate">
                        @error('starDate')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <label class="col-sm-2 mb-3"><b>-</b></label>
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-contorl @error('endDate')is-invalid @enderror mb-3" name="endDate" id="endDate">
                        @error('endDate')
                        <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Cari</button>
                        @php if(isset($startDate) && isset($endDate)){ @endphp
                        <a href="{{ route('laporanborrowings.print', ['startDate' => $startDate, 'endDate' => $endDate]) }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php }else{ @endphp
                        <a href="{{ route('laporanborrowings.print') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php } @endphp
                    </div>
            </div>
        </div>
    </div>
  </form>

</form> 
    <table class="table table-bordered">
        <tr>
           
        <td>NO</td>
            <th>ID Peminjaman</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status Peminjaman</th>
            <th>NamaPegawai</th>
          
        </tr>
        @foreach ($laporanborrowings as $peminjaman)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $peminjaman->id }}</td>
            <td>{{ $peminjaman->nama }}</td>
            <td>{{ $peminjaman->jumlah }}</td>
            <td>{{ $peminjaman->tanggal_pinjam }}</td>
            <td>{{ $peminjaman->tanggal_kembali}}</td>
            <td>{{ $peminjaman->status_peminjaman}}</td>
            <td>{{ $peminjaman->nama_pegawai}}</td>
         

            
        </tr>
        @endforeach
   		 </table>
     	
     @endsection
  
