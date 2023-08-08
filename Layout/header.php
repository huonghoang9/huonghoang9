<!DOCTYPE html>
<html lang="en">

<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Page Title</title>
    <script src="https://kit.fontawesome.com/c6eab4491b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/favicon.ico">
    <link rel="canonical" href="https://mysite.com/mypage">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Layout/css/main.css">
    <link rel="stylesheet" href="Layout/css/register.css">

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
                    <a class="nav-link text-white" href="#">TRANG CHỦ<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown" id="dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        THỜI TRANG NAM
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Quần nam</a>
                        <a class="dropdown-item" href="#">Áo nam</a>
                        <a class="dropdown-item" href="#">Giày dép</a>
                        <a class="dropdown-item" href="#">Phụ kiện</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Hàng khuyến mại</a>
                    </div>
                </li>

                <li class="nav-item" style="float: left;">
                    <a class="nav-link text-white" href="#">GIỎ HÀNG</a>
                </li>

                <li class="nav-item" style="float: right;">
                    <a class="nav-link text-white" href="#">GIỚI THIỆU</a>
                </li>

            </ul>
        </div>
        <div class="right-nav">
            <a href="#"><i class="fas fa-shopping-cart" id="icon"></i></a>
            <a href="index.php?act=dangky"><i class="fas fa-user" id="icon"></i></a>
            <input type="text" placeholder="Tìm kiếm" class="search">
            <button type="submit" style="border-radius: 10px; height: 30px;width: 40px; border: none;"><i class="fas fa-search" id="icon-search"></i></button>
        </div>
    </nav>
    <br>