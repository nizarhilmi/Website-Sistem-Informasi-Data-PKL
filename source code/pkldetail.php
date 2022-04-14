<?php
    include "koneksi.php";
    //untuk pemilihan kelas yang diambil dari database kelas
    $dbpkl = "select * from datapkl";
    $datapkl = $conn->query($dbpkl);

	$qselect = "select * from datapkl left join pkldetail on pkldetail.idkota = datapkl.idkota where data_id = ".$_GET['data_id'];

    foreach($conn->query($qselect) as $value){
        $data_select=$value;
    };
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

		<style>
		.group-3{
			width: 450px;
			height: -30px;
		}

		</style>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
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
								<li><a href="index.php#dashboard">Dashboard</a></li>
								<li><a href="generic.php">Profile</a></li>
								<li><a href="index.php#service">Pelayanan</a></li>
								<li><a href="pkldata.php">Data PKL</a></li>								
							   <!-- Dropdown -->
							    						
						    </ul>
						  </div>						
					</div>
				</nav>				
			</header>
		<!-- End Header Area -->
					
		<!-- Start Generic Area -->
			<section class="about-generic-area section-gap">
				<div class="container border-top-generic">
					
					<div class="row">
						<div class="col-md-5 mt-4">
							<div class="img-text">
								<div class="group-3">
                                	<img src="<?php echo $data_select ['foto'] ?> " width="350px" height="350px" class="img-fluid float-left mr-20 mb-20">
								</div>
							</div>
						</div>
						<div class="col-md-7 mt-4">
							<h3><?php echo $data_select ['nama_pt']?></h3>
								<div class="single-blog">
									<small class="date"><?php echo $data_select ['nama_kota'] ?></small>
								</div>
								<p><br>
                                    <?php echo $data_select ['deskripsi'] ?>
								</p> 
								<p>
									Alamat lengkap<br>
									<?php echo $data_select['jalan'] ?>
								</p>
									<p>Syarat yang harus dilengkapi yaitu: </p>
								<ul>
									<li>Kartu Hasil Studi</li>
									<li>Kartu Studi Mahasiswa</li>
									<li>Kartu Tanda Mahasiswa</li>
								</ul><br><br>
								<p>
									Kemudian dengan dokumen tersebut institusi dapat membuat surat pengantar yang selanjutnya akan diberikan kepada perusahaan sebagai surat resmi.
								</p>
								<p>
									Contact Person<br>
									<span class="fa fa-phone-square"></span><br>
									<?php echo $data_select ['kontak'] ?><br>
									<span class="fa fa-envelope"></span><br>
									<?php echo $data_select ['kontak'] ?>
								</p>
								<p>
									Kunjungi website perusahaan <a href="<?php echo $data_select ['website'] ?>"> disini</a><br>
									Link pengumpulan dokumen syarat <a href="https://drive.google.com/drive/folders/1rDNpPQ_z11-OBF_TcdcvfikKrBTezPaR?usp=sharing"> disini </a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		<!-- End Generic Start -->
		
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