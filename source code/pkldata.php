<?php
    include "koneksi.php";
    //untuk pemilihan kelas yang diambil dari database kelas
    $dbpkl = "select * from datapkl";
    $datapkl = $conn->query($dbpkl);
    while($data=mysqli_fetch_array($datapkl)){
    };

    $q = "SELECT * from pkldetail INNER JOIN datapkl on pkldetail.idkota = datapkl.idkota";
    $data = $conn->query($q);

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
    .group{
        width: 260px;
        height: 95px;
    }

    .group-2{
        width: 800px;
        height: 95px;
    }

    .fix {
        width: 250px;
        height: 160px;
    }

    </style>


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
        <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
                                <li><a href="index.php#datapkl">Data PKL</a></li>								
                            <!-- Dropdown -->
                                                    
                            </ul>
                        </div>						
                    </div>
                </nav>
            </header>
        <!-- End Header Area -->

        <!-- start blog Area -->     
            <section class="about-area" id="blog">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <br><br>
                                <h1 class="mb-10">D A T A  P K L</h1>
                                <p>Berupa kumpulan data informasi tentang lowongan magang yang tersedia.</p>
                            </div>
                        </div>                       
                    </div>
                    <div class="row">
                        <?php 
                            foreach ($data as $index => $value){
                        ?>
                        <div class="col-lg-3 col-md-6 single-blog">
                            <img class="fix" src="<?php echo $value ['foto'] ?>" alt="" >
                            <p class="date"><?php echo $value['nama_kota'];?></p>
                            <h4><a href="pkldetail.php?data_id=<?php echo $value['data_id'] ?>"><?php echo $value ['nama_pt'] ?></a></h4>
                            <p>
                                <?php echo substr($value ['deskripsi'], 0, 80)?>
                            </p>								
                        </div>
                        <?php
                            }
                        ?>	
                        <br><br> 					
                    </div>
                </div>
            </section>
        <!-- end blog Area -->

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