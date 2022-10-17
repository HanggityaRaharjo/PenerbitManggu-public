<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN PENERBIT MANGGU</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets')}}/images/favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets')}}/images/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/images/favicons/favicon-16x16.png" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assetsadmin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assetsadmin')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
@yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2022 <a href="#">penerbitmanggu</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assetsadmin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assetsadmin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assetsadmin')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assetsadmin')}}/dist/js/demo.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
<script>
  // ckeditor
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>
<script>
  // ckeditor
  ClassicEditor
      .create( document.querySelector( '#editor2' ) )
      .catch( error => {
          console.error( error );
      } );
</script>
<script type="text/javascript">
    
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
 
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
 
      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
 
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
  </script>
</body>
</html>
