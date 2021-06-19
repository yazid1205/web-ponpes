<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMPN 24 Banjarmasin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FreeHTML5.co
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.theme.default.min.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/flexslider.css">

    <!-- Pricing -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/pricing.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url('assets/') ?>js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        
    <div class="fh5co-loader"></div>
    
    <div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="home"><i class="icon-study"></i> SMPN 24 <span>Banjarmasin</span></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul> 
                            <li class="<?php echo $content=='home'? 'active' : ''?>"><a href="home">Home</a></li>
                            <li class="has-dropdown <?php echo $content=='profil'? 'active' : ''?>">
                                <a href="sambutan">Profil Sekolah</a>
                                <ul class="dropdown">                                    
                                    <li><a href="visi">Profil</a></li>
                                    <li><a href="sambutan">Sambutan</a></li>
                                    <li><a href="visi">Visi-Misi</a></li>
                                </ul>
                            </li>
                            <li class="<?php echo $content=='berita'? 'active' : ''?>"><a href="kegiatan">Berita</a></li>
                            <li class="<?php echo $content=='jadwal'? 'active' : ''?>"><a href="jadwal">Jadwal Pelajaran</a></li>
                            <li class="<?php echo $content=='ekscool'? 'active' : ''?>"><a href="ekstra">Ekstrakulikuler</a></li>
                            <li class="<?php echo $content=='prestasi'? 'active' : ''?>"><a href="prestasi">Prestasi</a></li>
                            <li class="<?php echo $content=='galeri'? 'active' : ''?>"><a href="galeri">Galeri</a></li>
                            <li class="<?php echo $content=='kontak'? 'active' : ''?>"><a href="kontak">Kontak</a></li>
                            <li class="<?php echo $content=='kritik-saran'? 'active' : ''?>"><a href="kritik">Kritik & Saran</a></li>
                            <li class="btn btn-cta"><a href="login"><span>Login</span></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </nav>
    
<?php $this->load->view($content); ?>

    <footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-5 fh5co-widget">
                    <h3>SMPN 24 Banjarmasin</h3>
                    <p>Beralamat Di Komplek Madani I, Jl. Sultan Adam Jalur II No. 05 RT.031/RW.003, Surgi Mufti, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>Learn &amp; Grow</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Handbook</a></li>
                        <li><a href="#">Held Desk</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>Engage us</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Visual Assistant</a></li>
                        <li><a href="#">System Analysis</a></li>
                        <li><a href="#">Advertise</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>Kunjungi Kami</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">Copyright &copy; 2021 <a href="#">SMPN 24 BANJARMASIN</a>.</strong> All rights reserved.</small> 
                        <small class="block">CREAT by <a href="$" target="_blank">Siti Zulaika</a></small>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="<?php echo base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/magnific-popup-options.js"></script>
    <!-- Count Down -->
    <script src="<?php echo base_url('assets/') ?>js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="<?php echo base_url('assets/') ?>js/main.js"></script>
    <script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
    </script>
    </body>
</html>

