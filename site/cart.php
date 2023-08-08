<div class="smallnav">
        <a href="index.php">TRANG CHỦ</a> > <a href="index.php?act=cart">Giỏ hàng của bạn</a>
    </div>
    <article>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">hình ảnh</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Size</th>
                    <th scope="col">Màu</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                $i = 0;
                foreach($_SESSION['cart'] as $sp) {
                ?>
                <form action="site/thanhtoan.php" method="post">
                <tr>
                    <th scope="row"><input type="checkbox" name="" id=""></th>
                    <td name="ten_hh"><?php echo $sp[0]; ?></td>
                    <td ><img width="100px" src="./upload/<?php echo $sp[2]; ?>" alt=""></td>
                    <td ><?php echo $sp[1]; ?></td>
                    <td><?php echo $sp[3]; ?></td>
                    <td><?php echo $sp[5]; ?></td>
                    <td><?php echo $sp[6]; ?></td>
                    <td><?php echo $sp[4]; ?></td>
                    <td>
                        <button type="button" name="submit" class="chucnang"><a href="index.php?act=delete_cart&id=<?php echo $i; ?>">Xóa</a></button>
                        <?php if(isset($_SESSION['user'])){ 
                            $user = $_SESSION['user'];
                            foreach($user as $user){
                            ?>
                        <input type="hidden" value="<?php echo $i; ?>" name="donhang" >
                        <button class="chucnang" type="submit" name="redirect" id="redirect" >Thanh toán</button>
                        <?php } } else {  ?>
                        <button class="chucnang" type="button" ><a href="index.php?act=login">Thanh toán </a></button>
                        <?php } ?>
                    </td>
                </tr>
                </form>
                <?php $i++; }  ?>
                
            </tbody>
        </table>
        <br>
        <table class="table" id="sticky">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"><input type="checkbox" name="" id=""></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">
                        <form action="site/thanhtoan.php" method="post">
                        <?php if(isset($_SESSION['user'])){ 
                           $user = $_SESSION['user'];
                           foreach($user as $user){
                           ?>
                       <input type="hidden" value="<?php echo $user['id']; ?>" name="id_user">
                        <button class="buy" type="submit" name="redirect" id="redirect" >Mua hàng</button>
                        <?php } } else {  ?>
                        <button class="buy" type="button" ><a href="index.php?act=login">Mua hàng </a></button>
                        <?php  } ?>
                        </form>
                    </th>
                </tr>
            </thead>
        </table>

    </article>
    <br>
    <div class="more">
        <h2>Có thể bạn cũng thích</h2>
        <div class="row">
            <div class="main-article">

                <div class="col-lg-3" id="mainimg">
                    <img src="ao-so-mi-oxford-tay-ngan-asm017-mau-xanh_2_small-15391.png" alt="">
                    <p class="namepro">Tên sp</p>
                    <p class="namepro">399000</p>
                </div>
                <div class="col-lg-3" id="mainimg">
                    <img src="ao-so-mi-oxford-tay-ngan-asm017-mau-xanh_2_small-15391.png" alt="">
                    <p class="namepro">Tên sp</p>
                    <p class="namepro">399000</p>
                </div>
                <div class="col-lg-3" id="mainimg">
                    <img src="ao-so-mi-oxford-tay-ngan-asm017-mau-xanh_2_small-15391.png" alt="">
                    <p class="namepro">Tên sp</p>
                    <p class="namepro">399000</p>
                </div>
                <div class="col-lg-3" id="mainimg">
                    <img src="ao-so-mi-oxford-tay-ngan-asm017-mau-xanh_2_small-15391.png" alt="">
                    <p class="namepro">Tên sp</p>
                    <p class="namepro">399000</p>
                </div>
            </div>
        </div>
    </div>