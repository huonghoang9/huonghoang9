
<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class="row1">
                <div class="row1 formtitle">
                    <h1>CẬP NHẬT TÀI KHOẢN</h1>
                </div>

                <div class="row1 formcontent ">
                    <form action="index.php?act=updatetk" method="post">
                        <div class="row1 mb10">
                            Mã user <br>
                            <input type="text" name="id"   value="<?php if (isset($id)&&($id!="")) echo $id; ?>">
                        </div>

                        <div class="row1 mb10"> 
                            Tên Đăng Nhập <br>
                            <input type="text" name="username" value="<?php if (isset($username)&&($username!="")) echo $username; ?>">
                        </div>

                        
                        <div class="row1 mb10"> 
                            Mật Khẩu <br>
                            <input type="text" name="password" value="<?php if (isset($password)&&($password!="")) echo $password; ?>">
                        </div>

                        <div class="row1 mb10"> 
                            Email <br>
                            <input type="text" name="email" value="<?php if (isset($email)&&($email!="")) echo $email; ?>">
                        </div>

                        <div class="row1 mb10"> 
                           Địa Chỉ <br>
                            <input type="text" name="address" value="<?php if (isset($address)&&($address!="")) echo $address; ?>">
                        </div>

                        
                        <div class="row1 mb10"> 
                           Điện Thoại <br>
                            <input type="text" name="phone" value="<?php if (isset($phone)&&($phone!="")) echo $phone; ?>">
                        </div>

                        <div class="row1 mb10"> 
                           Tên Đầy Đủ <br>
                            <input type="text" name="fullname" value="<?php if (isset($fullname)&&($fullname!="")) echo $fullname; ?>">
                        </div>

                        <div class="row1 mb10"> 
                           Vai trò <br>
                            <input type="text" name="permission" value="<?php if (isset($permission)&&($permission!="")) echo $permission; ?>">
                        </div>

                        <div class="row1 mb20">
                            <input type="hidden" name="id" value="<?php if (isset($id)&&($id>0)) echo $id ; ?>">
                            <input type="submit" name="capnhat" value="Cập Nhật">
                            <input type="reset" value="Nhập Lại">
                           <!-- <a href="index.php?act=list_dm"><input type="button" value="Danh Sách"> </a> -->
                        </div>
                        
                        <?php 
                        if (isset($thongbao)&&($thongbao!="")) 
                            echo $thongbao;
                       
                        ?>
                    </form>
                </div>
        </div>
    </div>
</body>
</html> 
