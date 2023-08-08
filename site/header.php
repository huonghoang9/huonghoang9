<!DOCTYPE html>
<html lang="en">

<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cửa hàng thời trang nam Fashim</title>
    <script src="https://kit.fontawesome.com/c6eab4491b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/favicon.ico">
    <link rel="canonical" href="https://mysite.com/mypage">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Layout/css/main.css">
    <link rel="stylesheet" href="Layout/css/register.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/donhang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="shortcut icon" type="image/jpg" href="site/images/logo.png"/>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
</head>

<body>
    <nav class="navbar navbar-expand-xl" id="nav">
        <!--tips: to change the nav placement use .fixed-top,.fixed-bottom,.sticky-top-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#idCollapse"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="Layout/images/logo.png" alt="" width="100" height="80">
        </a>
        <div class="collapse navbar-collapse" id="idCollapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php">TRANG CHỦ<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown" id="dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="index.php?act=sanpham" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        THỜI TRANG NAM
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach($category as $loai){ ?>
                        <a class="dropdown-item" href="index.php?act=sanpham&id=<?php echo $loai['id']; ?>"><?php echo $loai['ten_loai']; ?></a>
                        <?php  } ?>
                    </div>
                </li>

                <li class="nav-item" style="float: left;">
                    <a class="nav-link text-white" href="#">LIÊN HỆ</a>
                </li>

                <li class="nav-item" style="float: right;">
                    <a class="nav-link text-white" href="index.php?act=gioithieu">GIỚI THIỆU</a>
                </li>

            </ul>
        </div>
        <div class="right-nav">
            <a href="index.php?act=cart"><i class="fas fa-shopping-cart" id="icon"></i></a>
            <?php if(isset($_SESSION['user'])){
                $user_login = $_SESSION['user'];
                foreach($user_login as $user){
                ?>
                <li class="nav-item dropdown" id="dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo $user['fullname']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?act=dangxuat">Đăng xuất</a>
                        <a class="dropdown-item" href="index.php?act=quanlidonhang">Quản lí đơn hàng</a>
                        <?php if($user['permission'] == "2"){ ?>
                        <a class="dropdown-item" href="admin">Trang quản trị</a>
                        <?php } ?>
                    </div>
                </li>

            <?php } } else { ?>
            <a href="index.php?act=login"><i class="fas fa-user" id="icon"></i></a>
            <?php } ?>
            <input type="text" placeholder="Tìm kiếm" class="search">
            <button type="submit" style="border-radius: 10px; height: 30px;width: 40px; border: none;"><i class="fas fa-search" id="icon-search"></i></button>
        </div>
    </nav>
    <br>