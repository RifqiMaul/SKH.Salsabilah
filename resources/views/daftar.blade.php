<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sekolah">

    <!-- ========== Page Title ========== -->
    <title>SKH Salsabilah</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?= url('/') ?>/front/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?= url('/') ?>/front/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= url('/') ?>/front/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= url('/') ?>/front/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?= url('/') ?>/front/css/themify-icons.css" rel="stylesheet" />
    <link href="<?= url('/') ?>/front/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?= url('/') ?>/front/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= url('/') ?>/front/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?= url('/') ?>/front/css/animate.css" rel="stylesheet" />
    <link href="<?= url('/') ?>/front/css/bootsnav.css" rel="stylesheet" />
    <link href="<?= url('/') ?>/front/style.css" rel="stylesheet">
    <link href="<?= url('/') ?>/front/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="/front/js/html5/html5shiv.min.js"></script>
      <script src="/front/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?= url('/') ?>/back/dist/sweetalert/dist/sweetalert2.min.css">
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
                    <a class="navbar-brand" href="index.html">
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
                            <a href="<?= url('/') ?>/login.html">Login</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="daftar" class="white-popup-block">
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-edit"></i> Daftar Sekarang</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nama Lengkap*" type="text" id="nama_lengkap" name="nama_lengkap">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="text" id="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password*" type="password" id="password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Daftar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

    <!-- Start Footer ============================================= -->
    <br/>
    <footer class="bg-dark text-light" style="background-color: #036566;">
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2023. All Rights Reserved by <a href="#">SKH Salsabilah</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <img src="<?= url('/') ?>/back/gambar/whatsapp.png" alt="" style="width: 32px;height: 32px;">
                                <a href="#">+62 896-6948-0908</a>
                            </li>
                            <li>
                                <img src="<?= url('/') ?>/back/gambar/instagram.png" alt="" style="width: 32px;height: 32px;">
                                <a href="#">skh_salsabilah</a>
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
    <script src="<?= url('/') ?>/front/js/jquery-1.12.4.min.js"></script>
    <script src="<?= url('/') ?>/front/js/bootstrap.min.js"></script>
    <script src="<?= url('/') ?>/front/js/equal-height.min.js"></script>
    <script src="<?= url('/') ?>/front/js/jquery.appear.js"></script>
    <script src="<?= url('/') ?>/front/js/jquery.easing.min.js"></script>
    <script src="<?= url('/') ?>/front/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= url('/') ?>/front/js/modernizr.custom.13711.js"></script>
    <script src="<?= url('/') ?>/front/js/owl.carousel.min.js"></script>
    <script src="<?= url('/') ?>/front/js/wow.min.js"></script>
    <script src="<?= url('/') ?>/front/js/progress-bar.min.js"></script>
    <script src="<?= url('/') ?>/front/js/isotope.pkgd.min.js"></script>
    <script src="<?= url('/') ?>/front/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= url('/') ?>/front/js/count-to.js"></script>
    <script src="<?= url('/') ?>/front/js/YTPlayer.min.js"></script>
    <script src="<?= url('/') ?>/front/js/loopcounter.js"></script>
    <script src="<?= url('/') ?>/front/js/jquery.nice-select.min.js"></script>
    <script src="<?= url('/') ?>/front/js/bootsnav.js"></script>
    <script src="<?= url('/') ?>/front/js/main.js"></script>
    <script src="<?= url('/'); ?>/back/dist/sweetalert/dist/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#daftar').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: 'proses_daftar_siswa.html',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Berhasil melakukan pendaftaran. Silahkan login untuk melakukan pengisian data lebih lanjut.',
                            showConfirmButton: false,
                            timer: 2000
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                location.replace('/login.html');
                            }
                        })
                    },
                    error: function(error) {
                        Swal.fire(
                            'Error!',
                            'Gagal melakukan pendaftaran. Mungkin email anda sudah terdaftar.',
                            'error'
                        )
                        console.log("Error : ", error);
                    }
                });
            });
        });
    </script>

</body>

</html>