<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }} ">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body onafterprint="redirect()">
    <br>
    @php if(isset($startDate) && isset($endDate)){ @endphp
    <h2 style="margin-left: 1%;">Laporan Peminjaman: @php echo $startDate @endphp sampai @php echo $endDate @endphp</h2>
    @php }else{ @endphp
    <h2><center>Laporan Peminjaman</center></h2>
    @php } @endphp
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                     <th scope="col">No</th>
                    <th scope="col">ID Peminjaman</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Status Peminjaman</th>
                    <th scope="col">Nama Pegawai</th>
                </tr>
            </thead>
             @foreach ($laporanborrowings as $laporanpinjaman)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $laporanpinjaman->id }}</td>
             <td>{{ $laporanpinjaman->nama }}</td>
             <td>{{ $laporanpinjaman->nama_peminjam }}</td>
                <td>{{ $laporanpinjaman->jumlah }}</td>
                <td>{{ $laporanpinjaman->tanggal_pinjam }}</td>
                <td>{{ $laporanpinjaman->tanggal_kembali }}</td>
                <td>{{ $laporanpinjaman->status_peminjaman }}</td>
                <td>{{ $laporanpinjaman->nama_pegawai }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

 <h6 align="right">
@php $tgl=date('d-m-Y'); @endphp
   Bogor,{{$tgl}} 
   </br>
Kepala Pendidikan SMK WIKRAMA INDONESIA
</h6>
</br>
</br>
</br>
</br>
</br>

<h6 align="right"> 
Prof Donnix Afrilliando ,MMa.Spg

</h6>
<script type="text/javascript">
    window.print();
</script>


<script type="text/javascript">
    function redirect() {
        window.location.href = '@php echo $redirect; @endphp';
    }
</script>
</html>