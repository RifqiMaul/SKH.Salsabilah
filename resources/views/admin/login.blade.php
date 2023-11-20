<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SKH Salsabilah</title>
    <link rel="shortcut icon" href="front/img/favicon.png" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= url('/'); ?>/back/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= url('/'); ?>/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= url('/'); ?>/back/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= url('/'); ?>/back/dist/sweetalert/dist/sweetalert2.min.css">
</head>

<body class="hold-transition login-page" style="background-image: url('<?= url('/'); ?>/back/gambar/background.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="login-box" style="width: 500px;">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <div class="row">
                    <!-- <div class="col-md-4"><img src="<?= url('/'); ?>/back/gambar/logo.png" style="width: 100px;"></div> -->
                    <div class="col-md-12"><a href="/" class="h1"><b>Login Admin</b></a></div>
                </div>
            </div>
            <div class="card-body">
                <p class="login-box-msg">SKH SALSABILAH</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <!-- <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div> -->
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="button" onClick="processLogin()" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= url('/'); ?>/back/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= url('/'); ?>/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= url('/'); ?>/back/dist/js/adminlte.min.js"></script>
    <script src="<?= url('/'); ?>/back/dist/sweetalert/dist/sweetalert2.min.js"></script>
</body>

<script>
    function processLogin() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "<?= url('/'); ?>/proses_login_admin.html",
            data: {
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function(res) {
                var obj = JSON.parse(res);
                if (obj.response == "Success") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Selamat Datang, ' + obj.data.nama_admin,
                        showConfirmButton: false,
                        timer: 2000
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.replace('<?= url('/'); ?>/admin/dashboard.html');
                        }
                    })
                } else {
                    Swal.fire(
                        'Error!',
                        'Periksa kembali Username / Password Anda.',
                        'error'
                    )
                }
            }
        })
    }
</script>

</html>