<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sekolah">

    <!-- ========== Page Title ========== -->
    <title>SKH Salsabilah</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="front/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="front/css/bootstrap.min.css" rel="stylesheet" />
    <link href="front/css/font-awesome.min.css" rel="stylesheet" />
    <link href="front/css/flaticon-set.css" rel="stylesheet" />
    <link href="front/css/themify-icons.css" rel="stylesheet" />
    <link href="front/css/magnific-popup.css" rel="stylesheet" />
    <link href="front/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="front/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="front/css/animate.css" rel="stylesheet" />
    <link href="front/css/bootsnav.css" rel="stylesheet" />
    <link href="front/style.css" rel="stylesheet">
    <link href="front/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="front/js/html5/html5shiv.min.js"></script>
      <script src="front/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border-none navbar-fixed navbar-transparent white bootsnav" style="background-color: #036566;">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="front/img/logo-light.png" class="logo logo-display" alt="Logo">
                        <img src="front/img/logo.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="<?= url('/') ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/profile.html">Profil</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/agenda.html">Kegiatan</a>
                        </li>
                        <li>
                            <a href="<?= url('/') ?>/daftar.html">Pendaftaran</a>
                        </li>
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel content-less text-light top-pad text-dark slide animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <!-- <div class="item active bg-cover" style="background-image: url(front/img/2440x1578.png);"> -->
                <div class="item active bg-cover" style="background-image: url(front/img/banner_1.jpg);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h4 data-animation="animated fadeInUp">Selamat Datang</h4>
                                            <h2 data-animation="animated fadeInLeft">Di {{ $profile->nama_sekolah }}</strong></h2>
                                            <a data-animation="animated fadeInDown" class="btn btn-light border btn-md" href="/login.html">Login</a>
                                            <a data-animation="animated fadeInUp" class="btn btn-theme effect btn-md" href="/daftar.html">Pendaftaran</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="item bg-cover" style="background-image: url(front/img/2440x1578.png);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h4 data-animation="animated fadeInUp">Upgrade your knowledge</h4>
                                            <h2 data-animation="animated fadeInLeft">Learn From Best Online <strong>Training Course</strong></h2>
                                            <a data-animation="animated fadeInDown" class="btn btn-light border btn-md" href="#">Learn More</a>
                                            <a data-animation="animated fadeInUp" class="btn btn-theme effect btn-md" href="#">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Blog 
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Agenda Sekolah</h2>
                        <p>
                            Pada halaman ini ada info terkait 3 agenda sekolah terakhir. Jadi siswa dapat melihat agenda apa saja yang akan datang maupun yang terakhir dilakukan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    @foreach($agenda as $value)
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><i class="fas fa-calendar-alt"></i> <?= date_format(date_create($value->tanggal), 'd F Y') ?></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a href="#">{{ $value->judul }}</a>
                                    </h4>
                                    <p>
                                        {{ $value->isi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->


    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light" style="background-color: #036566;">
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2023. All Rights Reserved by <a href="#"> SKH Salsabilah</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <img src="<?= url('/') ?>/back/gambar/whatsapp.png" alt="" style="width: 32px;height: 32px;">
                                <a href="#">+62 896-6948-0908</a>
                            </li>
                            <li>
                                <img src="<?= url('/') ?>/back/gambar/instagram.png" alt="" style="width: 32px;height: 32px;">
                                <a href="#">skh.salsabilah</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="front/js/jquery-1.12.4.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/equal-height.min.js"></script>
    <script src="front/js/jquery.appear.js"></script>
    <script src="front/js/jquery.easing.min.js"></script>
    <script src="front/js/jquery.magnific-popup.min.js"></script>
    <script src="front/js/modernizr.custom.13711.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/wow.min.js"></script>
    <script src="front/js/progress-bar.min.js"></script>
    <script src="front/js/isotope.pkgd.min.js"></script>
    <script src="front/js/imagesloaded.pkgd.min.js"></script>
    <script src="front/js/count-to.js"></script>
    <script src="front/js/YTPlayer.min.js"></script>
    <script src="front/js/loopcounter.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/bootsnav.js"></script>
    <script src="front/js/main.js"></script>

</body>

</html>