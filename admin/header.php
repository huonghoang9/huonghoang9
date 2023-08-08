<!DOCTYPE html>
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
    <link rel="stylesheet" href="../Layout/css/admin.css">
</head>
<body>
  
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <p>Quản lý trang web</p>  
  <a href="index.php?act=add_dm">Quản lý danh mục</a>
  <a href="index.php?act=addsp">Quản lý kho hàng</a>
  <a href="index.php?act=listbl">Quản lý bình luận</a>
  <a href="index.php?act=dskh">Quản lý người dùng</a>
  <a href="index.php?act=qlidonhang">Quản lý đơn hàng</a>
  <a href="index.php?act=thongke">Thống kê</a>
</div>
<div class="p-3 mb-2 bg-danger text-white" style="max-height: 100px;">
  <div id="main" style="margin-bottom: 35px;">
    <span style="font-size:30px;cursor:pointer;overflow: hidden; float: left;margin-right: 30px;" onclick="openNav()">&#9776; </span>
    <h3>Quản lý trang web</h3>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>