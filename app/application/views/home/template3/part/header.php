<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creative Portfolio & Agency Template is a simple Smooth Personal Portfolio and Agency Based Template" />
    <meta name="keywords" content="Personal, Portfolio, Agency, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>OnePro Html5 Template</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url('assets_template/onepro/onepro/') ?>img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets_template/onepro/onepro/') ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_template/onepro/onepro/') ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_template/onepro/onepro/') ?>css/stellarnav.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_template/onepro/onepro/') ?>css/progressbar.css">
    <link rel="stylesheet" href="<?php echo base_url('assets_template/onepro/onepro/') ?>css/owl.carousel.css">
    <link href="<?php echo base_url('assets_template/onepro/onepro/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets_template/onepro/onepro/') ?>css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="<?php echo base_url('assets_template/onepro/onepro/') ?>style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets_template/onepro/onepro/') ?>css/responsive.css" rel="stylesheet">

    <script src="<?php echo base_url('assets_template/onepro/onepro/') ?>js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="top-bar-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="call-to-action">
                            <p><i class="fa fa-phone"></i> <a href="callto:+8801744430440">+880 1911 854 378</a></p>
                            <p><i class="fa fa-envelope-o"></i> <a href="mailto:backpiper.com@gmail.com">backpiper.com@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="header-social-bookmark">
                            <ul class="social-bookmark">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="img/logo.png" alt="logo"></a>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li class="active"><a href="#home">home</a></li>
                                <li><a href="<?php echo base_url('Home/about/'.$this->uri->segment(3)) ?>">About</a></li>
                                <li><a href="<?php echo base_url('Home/agenda/'.$this->uri->segment(3)) ?>">Agenda</a></li>
                                <li><a href="<?php echo base_url('Home/wisata/'.$this->uri->segment(3)) ?>">Wisata</a></li>
                                <li><a href="<?php echo base_url('Home/galeri/'.$this->uri->segment(3)) ?>">Galeri</a></li>
                                <li><a href="<?php echo base_url('Home/berita/'.$this->uri->segment(3)) ?>">Berita</a></li>
                                <li><a href="<?php echo base_url('Home/kontak/'.$this->uri->segment(3)) ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
    </header>
    <!--END TOP AREA-->