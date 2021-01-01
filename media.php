<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Portal PSB Online</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <link rel="stylesheet" href="cfg/dist/assets/lib/datatables/css/demo_page.css">
    <link rel="stylesheet" href="cfg/dist/assets/lib/datatables/css/DT_bootstrap.css">

    <!-- securimage -->
    <link rel="stylesheet" href="../assets/securimage/securimage.css" media="screen">
    <!-- end of securimage -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]-->
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->

    <!-- datatables -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
    <script src="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"></script>
    <!-- end of datatables -->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home">PSB Online</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home">Home</a></li>
            <li><a href="tentang-kami.html">Tentang Kami</a></li>
            <li><a href="cara-daftar.html">Cara Pendaftaran</a></li>
            <li><a href="kontak.html">Kontak</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              Link Terkait
            </a>
            <a href="registrasi.html" class="list-group-item">Pendaftaran Siswa Baru</a>
            <a href="daftar-casis-lolos-ver.html" class="list-group-item">Daftar Calon Siswa Lolos Verifikasi</a>
            <a href="daftar-casis-lulus-ujian.html" class="list-group-item">Daftar Calon Siswa Lulus USM</a>
          </div>

          <div class="list-group">
            <a href="#" class="list-group-item active">
              Login Calon Siswa
            </a>
            <a href="casis/sign-in.html" target="_blank" class="list-group-item">Sign in</a>
          </div>
        </div><!-- /.col-sm-4 -->

        <div class="col-sm-8">

          <?php include "open_file.php"; ?>
          
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container -->

    <div id="footer">
      <div class="container">
        <p class="text-muted">Copyright 2016. All right reserved. SMK XYZ.</p>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <!-- js datatables -->
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script>
      $(document).ready(function() {
      $('#example').DataTable();
    } );
    </script>
    <!-- end of js datatables -->
    
  </body>
</html>
