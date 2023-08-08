<div class="main-pass">
        <form method="post" action="index.php?act=login">
            <div class="form-group">
                <label for="exampleInputEmail1">Tài khoản</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <a href="#" style="color: #FB685C;">Quên mật khẩu?</a> <a href="index.php?act=dangky" style="float: right;color: #FB685C;">Đăng ký</a>
            <br><br>

            <button type="submit" name="submit" class="btn btn-primary" style="width: 100%; background-color: #FB685C;">Đăng nhập</button>
           <?php  
           if(isset($thongbao)){
            echo '<p style="color:red">'.$thongbao.'</p>';
           }
           ?>
        </form>
    </div>
    <hr>