<?php
require 'function.php';
//get data semua dulu
$barang = read("SELECT * FROM penerimaan");
$id = $_GET["id"];


//ambil data detail per id dan juga ambil di indexnya
$barangDetail  = read("SELECT * FROM penerimaan where id = $id")[0];
    ?>



<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>Aplikasi Logistik</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gym website, Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 

    <!-- Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick-carousel/slick.css"> 
    <link rel="stylesheet" type="text/css" href="assets/fonts/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hovereffects.css"> 
    <!-- Theme Styles -->
    <link href="assets/css/scrolling-nav.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    <style type="text/css">
 .box {
  width:  350px;
  height: 100px;
  background-color: #F4A460;
  text-align: center;
  line-height: 30px;
  margin: 5px;
 }
 
 .clear {clear: both;}
</style>
  </head>
  <!-- End Head -->

  <body>
    <!-- Header -->
    <header id="top">
     <!-- Navbar --> 
	  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">Aplikasi<span>Logistik</span></a>  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-menu"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.php">Home</a>
			  </li>
			  <li class="nav-item">
          <div class="dropdown">
          <a class="dropdown-toggle nav-link" type="button" data-toggle="dropdown"> Menu</a>
          <ul class="dropdown-menu">
            <li><a class="nav-link js-scroll-trigger" href="TrackingBarang.php">Tracking Barang</a></li>
            <li><a class="nav-link js-scroll-trigger" href="presensi.php">Presensi</a></li>
            <li><a class="nav-link js-scroll-trigger" href="operasional.php">Operasional</a></li>
            <li><a class="nav-link js-scroll-trigger" href="penerimaan.php">Penerimaan</a></li>
            <li><a class="nav-link js-scroll-trigger" href="penyimpanan.php">Penyimpanan</a></li>
            <li><a class="nav-link js-scroll-trigger" href="LaporanPenerimaan.php">Laporan Penerimaan</a></li>
          </ul>
        </div>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
      <!-- End Navbar --> 
      
   <main role="main" class="mt-lg-5 m-0">
  
  <section class="wt-section" id="services">
        <div class="container">
    <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0">
            <h2 class="mb-md-2">Data Pengiriman</h2>
          </div>
    </div> 
 
      <div class="col-md-12 col-sm-12 col-xs-12">

          <div class="panel panel-default">
              <div class="panel-heading">
               <b>Form Data Pengiriman</b> 
                
              </div> 
              <br>
              <div class="panel-body">
                  <div class="table-responsive">
               
  <form action="function2.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputNama">Nama Barang</label>
      <input type="text" class="form-control" id="exampleInputNama" required name="nama" value="<?= $barangDetail["nama_barang"]; ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputJenis">Jumlah Barang</label>
      <input type="number" class="form-control" id="exampleInputJenis" required name="jumlah" value="<?= $barangDetail["jumlah_barang"]; ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputKode">Nama Vendor</label>
      <input type="text" class="form-control" id="exampleInputKode" required name="vendor" value="<?= $barangDetail["nama_vendor"]; ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputTanggal">Tanggal Penerimaan</label>
      <input type="date" class="form-control" id="exampleInputTanggal" required name="tanggal" value="<?= $barangDetail["tanggal_terima"]; ?>">
    </div> 
    <div class="form-group">
      <label for="exampleInputTanggal">Tanggal Pengiriman</label>
      <input type="date" class="form-control" id="exampleInputTanggal" required name="tanggal">
    </div>  
    <div class="form-group">
      <label for="exampleInputJumlah">Tujuan Gudang</label>
      <input type="text" class="form-control" id="exampleInputJumlah" required name="tujuan">
    </div>
    <div class="form-group">
      <label for="exampleInputNoResi">No Resi</label>
      <input type="number" class="form-control" id="exampleInputNoResi" required name="resi">
    </div>
    <div class="form-group">
      <label for="exampleInputDurasi">Estimasi Durasi Pengiriman</label>
      <input type="number" class="form-control" id="exampleInputDurasi" required name="durasi">
    </div>
    <div class="form-group">
      <label for="exampleInputPengirim">Nama Pengirim</label>
      <input type="text" class="form-control" id="exampleInputPengirim" required name="pengirim">
    </div>
    <div class="form-group">
      <label for="exampleInputPengirim">Status</label>
      <input type="text" class="form-control" id="exampleInputPengirim" value="Dalam Perjalanan" required name="status">
    </div>
      <center>
      <button type="submit" class="btn btn-primary">Kirim Barang ke Gudang</button>
      </center>
  </form>


   
  </div>
      </section>

  
    <!-- Footer -->
    <footer class="bg-dark py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
            <small class="text-white"><a class="text-white" href="https://webthemez.com/free-bootstrap-templates/">&copy; All Rights Reserved</small>
          </div>

          <div class="col-md-4 align-self-center">
            <ul class="list-inline text-center text-md-right mb-0">
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                <a class="text-white" target="_blank" href="https://www.facebook.com/">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                <a class="text-white" target="_blank" href="https://www.instagram.com/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                <a class="text-white" target="_blank" href="https://twitter.com/">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
                <a class="text-white" target="_blank" href="https://dribbble.com/">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  
    <!-- JS Script Files --> 
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Components Vendor  --> 
    <script src="assets/vendors/slick-carousel/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/counters/waypoint.min.js"></script>
    <script src="assets/vendors/counters/counterup.min.js"></script>

	<script src="assets/contact/jqBootstrapValidation.js"></script>
	<script src="assets/contact/contact_me.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <!--Plugin Initialize-->
    <script src="assets/js/global.js"></script>

    <!-- Theme Components and Settings --> 
    <script src="assets/vendors/carousel.js"></script>
    <script src="assets/vendors/counters.js"></script>

    <script>
     function play(){
       var audio = document.getElementById("audio");
       audio.play();
}
</script>

	
  </body>
  <!-- End Body -->
</html>


