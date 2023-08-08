<?php
    include "dao/binhluan.php";
    $ma_hh =  $sp['id'];
    $dsbl = load_binhluan($ma_hh);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/3c4fa98e07.js" crossorigin="anonymous"></script>
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <table class="table">
            <?php foreach($dsbl as $dsbl){
            ?>
            <tr>
                <td><i class="fa-solid fa-user"></i> <span><?php echo $dsbl['fullname']?></span></td>
            </tr>
            <tr>
                <td><?php echo $dsbl['noi_dung']; ?></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <?php if(isset($_SESSION['user'])){
    ?>
    <form action="" method="post">
        <input type="hidden" name="ma_hh" value="<?php echo $sp['id']; ?>">
        <input type="text" placeholder="Nhập bình luận" name="noidung" style="padding: 20px;">
        <input type="submit" name="guibinhluan" class="submit">
    </form>
    <?php }else{
    ?>  
    <div class="dangnhap_bl">
        <p style="color: #EE1E25;">Đăng nhập để bình luận</p>
    </div>
    <?php } ?>
    <?php 
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung  = $_POST['noidung'];
            $ma_hh = $_POST['ma_hh'];
            $user = $_SESSION['user'];
            foreach($user as $user){
                $ma_kh = $user['fullname'];
            }
            insert_binhluan($noidung, $ma_hh, $ma_kh);
        }
    ?>
</body>
</html>