<!DOCTYPE html>
  
<html lang="en">
<head>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Laravel DataTable Ajax Crud Tutorial - Tuts Make</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
<h2>Laravel DataTable Ajax Crud Tutorial - <a href="https://www.tutsmake.com" target="_blank">TutsMake</a></h2>

<a href="javascript:void(0)" class="btn btn-info ml-3" id="create-new-pinjam">Add New</a>
<br><br>
  
<table class="table table-bordered table-striped" id="laravel_datatable">
   <thead>
      <tr>
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
   </thead>
</table>
</div>
  
<div class="modal fade" id="ajax-pinjam-modal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="productCrudModal"></h4>
    </div>
    <div class="modal-body">
        <form id="productForm" name="productForm" class="form-horizontal">
           <input type="hidden" name="product_id" id="product_id">
            
           <div class="row">

     
<div class="form-group col-md-12">
    <strong>Nama Barang</strong>
    <select class="form-control"  name="nama"  id="nama">
    @foreach($inventarisir as $inventaris)
    <option value="{{$inventaris->nama}}">{{$inventaris->nama}}</option>
    @endforeach
    </select>
</div>


<div class="form-group col-md-6">
<div class="form-group">
    <strong>Nama Peminjam</strong>
    <input type="text" name="nama_peminjam" class="form-control" value="{{ ucfirst(Auth()->user()->name) }}"   readonly="readonly">
</div>
</div>
<div class="form-group col-md-6">
<div class="form-group">
    <strong>Jumlah</strong>
    <input type="number" name="jumlah" class="form-control" placeholder=" Masukan Jumlah">
</div>
</div>
<div class="form-group col-md-6">
<div class="form-group">
    <strong>Tanggal Pinjam</strong>
    <input type="date" name="tanggal_pinjam" class="form-control" >
</div>
</div>
<div class="form-group col-md-6">
<div class="form-group">
    <strong>Tanggal Kembali</strong>
    <input type="date" name="tanggal_kembali" class="form-control" >
</div>
</div>
<div class="form-group col-md-6">
<div class="form-group">
<strong>Status Peminjaman</strong>
<select class="form-control" name="status_peminjaman" id="status_peminjaman">
    <option value="Pinjam">Pinjam</option>
     <option value="Sewa" >Sewa</option>
     </select>
</div>
</div>
<div class="form-group col-md-6">
<div class="form-group">
    <strong>Nama Pegawai</strong>
    <select class="form-control" name="nama_pegawai" id="nama_pegawai">
    @foreach($pegawai as $pegawai)
    <option value="{{$pegawai->nama_pegawai}}">{{$pegawai->nama_pegawai}}</option>
    @endforeach
    </select>
</div>
</div>
</div>

            </div>
        </form>
    </div>
    <div class="modal-footer">
         
    </div>
</div>
</div>
</div>
</body>
<script>
 var SITEURL = '{{URL::to('')}}';
 $(document).ready( function () {
   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $('#laravel_datatable').DataTable({
         processing: true,
         serverSide: true,
         ajax: {
          url: SITEURL + "pinjam-list",
          type: 'GET',
         },
         columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nama', name: 'nama'},
            {data: 'nama_peminjam', name: 'nama_peminjam'},
            {data: 'jumlah', name: 'jumlah'},
            {data: 'tanggal_pinjam', name: 'tanggal_pinjam'},
            {data: 'tanggal_kembali', name: 'tanggal_kembali'},
            {data: 'status_peminjaman', name: 'status_peminjaman'},
            {data: 'nama_pegawai', name: 'nama_pegawai'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
               ],
        order: [[0, 'desc']]
      });
 
 /*  When user click add user button */
    $('#create-new-pinjam').click(function () {
        $('#btn-save').val("create-pinjam");
        $('#product_id').val('');
        $('#productForm').trigger("reset");
        $('#productCrudModal').html("Add New Product");
        $('#ajax-pinjam-modal').modal('show');
    });
  
   /* When click edit user */
    $('body').on('click', '.edit-pinjam', function () {
      var product_id = $(this).data('id');
      $.get('pinjam-list/' + product_id +'/edit', function (data) {
         $('#title-error').hide();
         $('#product_code-error').hide();
         $('#description-error').hide();
         $('#productCrudModal').html("Edit Product");
          $('#btn-save').val("edit-pinjam");
          $('#ajax-pinjam-modal').modal('show');
          $('#product_id').val(data.id);
          $('#title').val(data.title);
          $('#product_code').val(data.product_code);
          $('#description').val(data.description);
      })
   });
 
    $('body').on('click', '#delete-pinjam', function () {
  
        var product_id = $(this).data("id");
        
        if(confirm("Are You sure want to delete !")){
          $.ajax({
              type: "get",
              url: SITEURL + "pinjam-list/delete/"+product_id,
              success: function (data) {
              var oTable = $('#laravel_datatable').dataTable(); 
              oTable.fnDraw(false);
              },
              error: function (data) {
                  console.log('Error:', data);
              }
          });
        }
    }); 
   
   });
  
if ($("#productForm").length > 0) {
      $("#productForm").validate({
  
     submitHandler: function(form) {
  
      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');
       
      $.ajax({
          data: $('#productForm').serialize(),
          url: SITEURL + "pinjam-list/store",
          type: "POST",
          dataType: 'json',
          success: function (data) {
  
              $('#productForm').trigger("reset");
              $('#ajax-pinjam-modal').modal('hide');
              $('#btn-save').html('Save Changes');
              var oTable = $('#laravel_datatable').dataTable();
              oTable.fnDraw(false);
               
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });
    }
  })
}
</script>
 
</html>