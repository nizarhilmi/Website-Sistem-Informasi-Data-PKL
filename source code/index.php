<?php
    include "koneksi.php";
    //untuk pemilihan kelas yang diambil dari database kelas
    $dbpkl = "select * from datapkl";
    $data_pkl = $conn -> query($dbpkl);
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/icon.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Magang.id</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/jquery.DonutWidget.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="index.php">
						  	<img src="img/logoakhir.png" alt="">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="#dashboard">Dashboard</a></li>
								<li><a href="#Profile">Profile</a></li>
								<li><a href="#service">Pelayanan</a></li>
								<li><a href="#datapkl">Data PKL</a></li>								
							   <!-- Dropdown -->
							    					
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="dashboard" data-parallax="scroll" data-image-src="img/bg-utama1.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen  d-flex align-items-center justify-content-end">
						<div class="banner-content col-lg-12 col-md-12">
					<center>
						<h1><span>Selamat Datang</span><br>Di Website<br><span>Magang.id</span></h1>
					</center>
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<br>
			<!-- Start About Area -->
				<section class="about-area" id="Profile">
				<div class="container-fluid">
					<div class="row justify-content-end align-items-center d-flex no-padding">
						<div class="col-lg-6 about-left mt-50">
							<h1><center>P R O F I L E <br>D E V E L O P E R</center></h1>
							<p align="center"> 
								Developer terbentuk dari tugas besar salah satu mata kuliah 
								di program studi Informatika IT Telkom Purwokerto, pemrograman web.  
								Kami bersepakat untuk membangun website ini yang diharap dapat membantu. 
							<div class="buttons">
								<center>
								<a href="generic.php" class="about-btn text-uppercase primary-border circle">Selengkapnya</a>
								</center>
							</div>
						</div>
						<div class="col-lg-6 about-right">
							<img class="img-fluid" src="img/about.png" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End About Area -->
			
			<!-- start service Area-->
				  <section class="service-area pt-100 pb-150" id="service">
					<div class="container">
					  <div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
						  <div class="title text-center">
							<h1 class="mb-10">Jenis - Jenis Pelayanan</h1>
							<p>
							  Berikut jenis - jenis pelayanan yang disediakan dalam Sistem Informasi Data PKL<br> Syarat dan Ketentuan berlaku.
							</p>
						  </div>
						</div>
					  </div>  
					  <div class="row">
						<div class="sigle-service col-lg-3 col-md-6">
						  <img src="img/yuhu1.jpg" alt="" title="Surat Pengantar PKL" height="135px" width="240px" />
						<center>
							<h4 mb-20>Pembuatan Surat Pengantar <br>PKL</h4>							
							<a href="#myModal" class="text-uppercase primary-btn2 primary-border circle" data-toggle="modal">Syarat & Ketentuan</a>
							<br><br>
							<a href="http://suket.ittelkom-pwt.ac.id/index.php/form/suket_pkl" class="text-uppercase primary-btn2 primary-border circle">Pengajuan</a>
						</center>
						<div id="myModal" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Pembuatan Surat Pengantar PKL</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">				 
					  <h3>Persyaratan :</h3>
						<ol class="ordered-list">
							<li><span>Kartu Tanda Mahasiswa</span>
							<li><span>Kartu Hasil Studi</span>
							<li><span>Kartu Studi Mahasiswa</span>
													
							</div>
							<div class="modal-footer">
								<button type="button" class="text-uppercase primary-btn2 primary-border circle" data-dismiss="modal">Cancel</button>
								
							</div>
						</div>
					</div>
				</div>
						</div>
						<div class="sigle-service col-lg-3 col-md-6">
						  <img src="img/yuhu2.jpg" alt="" title="Surat Pengantar Magang" height="135px" width="240px" />
						  <center>
							<h4>Pembuatan Surat Pengantar <br>Magang</h4>						  
							<a href="#myModal2" class="text-uppercase primary-btn2 primary-border circle" data-toggle="modal">Syarat & Ketentuan</a>
							<br><br>
							<a href="http://suket.ittelkom-pwt.ac.id/index.php/form/suket_magang" class="text-uppercase primary-btn2 primary-border circle">Pengajuan</a>
						  </center>
						  <div id="myModal2" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Pembuatan Surat Pengantar Magang</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
							  <h3>Persyaratan :</h3>
								<ol class="ordered-list">
									<li><span>Kartu Tanda Mahasiswa</span>
									<li><span>Kartu Hasil Studi</span>
									<li><span>Kartu Studi Mahasiswa</span>									
							</div>
							<div class="modal-footer">
								<button type="button" class="text-uppercase primary-btn2 primary-border circle" data-dismiss="modal">Cancel</button>
								
							</div>
						</div>
					</div>
			</div>
						</div>
						<div class="sigle-service col-lg-3 col-md-6">
						  <img src="img/yuhu3.jpg" alt="" title="Surat Observasi" height="135px" width="240px" />
						  <center>
							<h4>Pembuatan Surat Keterangan <br> Observasi</h4>						  
							<a href="#myModal3" class="text-uppercase primary-btn2 primary-border circle" data-toggle="modal">Syarat & Ketentuan</a>
							<br><br>
							<a href="https://forms.gle/13PCYxFjvraLh6m19" class="text-uppercase primary-btn2 primary-border circle">Pengajuan</a>
						  </center>
						  <div id="myModal3" class="modal fade" tabindex="-1">
								<div class="modal-dialog">
								  <div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Pembuatan Surat Keterangan Observasi</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<h3 align="left">Persyaratan :</h3>
								  <ol class="ordered-list">
									  <li><span>Kartu Tanda Mahasiswa</span>
									  <li><span>Kartu Hasil Studi</span>
									  <li><span>Kartu Studi Mahasiswa</span>
							  </div>
							<div class="modal-footer">
								<button type="button" class="text-uppercase primary-btn2 primary-border circle" data-dismiss="modal">Cancel</button>
								
							</div>
						</div>
					</div>
				</div>
						</div>
			
			
						<div class="sigle-service col-lg-3 col-md-6">
						  <img src="img/yuhu4.jpg" alt="" title="Berkas Pengajuan" height="135px" width="240px" />
						  <center>
						  <h4>Syarat Dokumen Berkas <br> Pengajuan</h4>
						  <a href="#myModal4" class="text-uppercase primary-btn2 primary-border circle" data-toggle="modal">Syarat & Ketentuan</a>
						  <br><br>
						  <a href="https://drive.google.com/drive/folders/1rDNpPQ_z11-OBF_TcdcvfikKrBTezPaR?usp=sharing" class="text-uppercase primary-btn2 primary-border circle">Pengajuan</a>
						  </center>

						  <div id="myModal4" class="modal fade" tabindex="-1">
								<div class="modal-dialog">
								  <div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Dokumen Berkas Pengajuan</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
							  <h3 align="left">Persyaratan :</h3>
								<ol class="ordered-list">
									<li><span>Melampirkan Kartu Tanda Mahasiswa</span>
									<li><span>Melampirkan Kartu Hasil Studi</span>
									<li><span>Melampirkan Kartu Studi Mahasiswa</span>
									<li><span>Dokumen dalam format PDF</span></li>	
									<li><span>Link hanya bisa diakses dengan email kampus</span></li>
							</div>
							<div class="modal-footer">
								<button type="button" class="text-uppercase primary-btn2 primary-border circle" data-dismiss="modal">Cancel</button>								
							</div>
						</div>
					</div>
				</div>
			
			</div>                                    

			</div>
		</div>  
		</section>
		<!-- End project Area -->

		<!-- start datapkl Area -->		
			<section class="about-area" id="datapkl">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">D A T A  P K L</h1>
								<p>Berupa kumpulan data informasi tentang lowongan magang yang tersedia.</p>
							</div>
						</div>
					</div>					
						<div class="row">
							<div class="col-lg-3 col-md-6 single-blog">
								<img class="img-fluid" src="img/datapkl1.png" alt="">
								<p class="date">30 Apr 2021</p>
								<h4><a href="">PT Pertamina (Persero)</a></h4>
								<p>
									PT Pertamina adalah sebuah BUMN yang bertugas mengelola penambangan minyak dan gas bumi di Indonesia.
								</p>								
							</div>
							<div class="col-lg-3 col-md-6 single-blog">
								<img class="img-fluid" src="img/datapkl2.jpg" alt="">
								<p class="date">19 Mei 2021</p>
								<h4><a href="">Kominfo Republik Indonesia</a></h4>
								<p>
									Kominfo adalah kementerian dalam Pemerintah Indonesia yang membidangi urusan komunikasi dan informatika.
								</p>															
							</div>
							<div class="col-lg-3 col-md-6 single-blog">
								<img class="img-fluid" src="img/datapkl3.jpg" alt="">
								<p class="date">17 Apr 2021</p>
								<h4><a href="">BUMN (Badan Usaha Milik Negara)</a></h4>
								<p>
									BUMN Sesuai dengan kepanjangannya, BUMN artinya perusahaan yang sahamnya dimiliki oleh negara.
								</p>								
							</div>
							<div class="col-lg-3 col-md-6 single-blog">
								<img class="img-fluid" src="img/datapkl4.jpg" alt="">
								<p class="date">21 Mar 2021</p>
								<h4><a href="">PT PLN (Perusahaan Listrik Negara)</a></h4>
								<p>
									PT PLN adalah sebuah BUMN yang mengurusi semua aspek kelistrikan yang ada di Indonesia.
								</p>									
							</div>						
						</div>
				</div>
				<br>
				<center>
					<a href="pkldata.php" class="text-uppercase primary-btn2 primary-border circle">Selengkapnya</a>
				</center>
				<br>	
			</section>
		<!-- end datapkl Area -->

		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-6  col-md-12">
						<div class="single-footer-widget">
							<h6>About Developer</h6>
							<br>
							<ul class="footer-nav">
								<li><a href="https://github.com/nizarhilmi">Nizar Hilmi</a></li>
								<li><a href="https://github.com/tamiakristina">Tamia Kristina Natalia</a></li>
								<li><a href="https://github.com/novaladzan12">Adzan Bari Naufal</a></li>
								<li>Mahasiswa S1 Teknik Informatika</li>
								<li><a href="https://ittelkom-pwt.ac.id/">IT Telkom Purwokerto</a></li>
							</ul>
						</div>
					</div>
					
					
					<div class="col-lg-6  col-md-12">
						<h6 align="center">Maps</h6>
						<ul class="icons">
							<iframe src="img/maps.png" width="580" height="200" frameborder="0" style="border:0">
							</iframe>
						</ul>						
					</div>						
				</div>

				<div class="row footer-bottom d-flex justify-content-between">
					<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> IT Telkom Purwokerto |  HotWheelsDev</p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="https://www.facebook.com/joinittp"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/ittelkompurwokerto/"><i class="fa fa-instagram"></i></a>
						<a href="https://ittelkom-pwt.ac.id/"><i class="fa fa-google"></i></a>
						<a href="https://www.youtube.com/channel/UCKCYFPqABGctXfBX8dQWfbA"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/parallax.min.js"></script>			
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.DonutWidget.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>			
			<script src="js/main.js"></script>	
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		</body>
	</html>