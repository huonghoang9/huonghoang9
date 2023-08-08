
<div class="main-pass">
        <h2>Đăng ký</h2>
        <form action="index.php?act=dangky" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="inputUsername">tài khoản</label>
                <input type="text" name="username" class="form-control" id="inputUsername" placeholder="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Mật khẩu </label>
                    <input type="password" name="password" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-group">
                <label for="Fullname">Họ và tên</label>
                <input type="text" name="fullname" class="form-control" id="inputFullname" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Địa chỉ</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Avatar">Ảnh đại diện</label>
                    <input type="file" name="image" class="form-control" id="inputAvatar">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" id="inputTel" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Tôi không phải người máy
                    </label>
                    <label style="float: right;">
                        Đã có tài khoản? <a href="login.html" style="color: #FB685C;">Đăng nhập</a>
                    </label>
                </div>
            </div>
            <button type="submit" name="dangky" class="btn btn-primary" style="background-color: #FB685C;">Đăng ký</button>
        </form>
        <br>
    </div>
    <br>
