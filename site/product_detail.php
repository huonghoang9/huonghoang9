<div class="row" id="content" style="overflow: hidden; margin-left: 10px">
    <div class="col-lg-9" id="boxleft" style="overflow: hidden; float:left">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="detail-title">Chi tiết sản phẩm</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($sp as $sp) { ?>
                <div class="col-lg-6" style="float: left">
                    <img class="abc" src="./upload/<?php echo $sp['image'];  ?>" style="border: 3px solid black" alt="" width="450px"><br><br>
                    <div class="trait" style="margin-left:40px ;">
                        <h5 class="detail-title">Đặc điểm nổi bật:</h5>
                        <p><?php echo $sp['mota'];  ?></p>
                    </div>
                </div>
                <div class="col-lg-6" style="float: left;overflow:hidden">
                    <h4 class="detail-title"><?php echo $sp['ten_hh'];  ?></h4>
                    <hr>
                    <h2 class="detail-title"><?php echo $sp['gia'];  ?></h2>
                    <div class="box" style="float:left;width: 100px; height: 28px; background-color: red; color: white; text-align: center; border-radius: 5px;">
                        Giá giảm
                    </div> <br> <br>
                    <form action="index.php?act=cart" method="post">
                        <div class="product__details__option">
                            <div class="product__details__option__size">
                                <span>Size:</span>
                                <?php foreach ($size as $size) {  ?>
                                    <label class="c-1" for="sp-1">
                                        <!-- <input type="radio" name="size_sp" value="<?php echo $size['size']; ?>" checked><?php echo $size['size']; ?> -->
                                        <input type="radio" name="size_sp" value="<?php echo $size['size']; ?>" checked><?php echo $size['size']; ?>
                                    </label>
                                <?php  } ?>
                            </div>

                            <div class="product__details__option__color">
                                <span>Color:</span>
                                <?php foreach ($color as $color) {  ?>
                                    <label class="c-1" for="sp-1">
                                        <input type="radio" name="color_sp" value="<?php echo $color['color']; ?>" checked><?php echo $color['color']; ?>
                                    </label>
                                <?php }  ?>
                            </div>

                            <div class="product__details__option__soluong">
                                <span>Số lượng:</span>
                                <label class="c-1" for="sp-1">
                                    <input type="number" name="soluong" value="1">
                                </label>
                            </div>
                            <input type="hidden" name="ten_sp" value="<?php echo $sp['ten_hh']; ?>">
                            <input type="hidden" name="gia_sp" value="<?php echo $sp['gia']; ?>">
                            <input type="hidden" name="hinh" value="<?php echo $sp['image']; ?>">

                        </div>
                        <br>
                        <button style="width: 100%; border-radius:5px; background-color: #FD4522; border: white; color: white" id="btn-buynow">
                            <span style="font-weight: bold">MUA NGAY</span>
                            <br>Giao hàng tận nơi
                        </button>
                        <BR></BR>
                        <button type="submit" name="submit" style="width: 48%;height: 40px; border-radius:5px; background-color: white; border:1px solid #FD4522; color: #FD4522" id="btn-1">
                            <span style="font-weight: bold">THÊM VÀO GIỎ HÀNG</span>
                        </button>
                        <button style="width: 48%;height: 40px; border-radius:5px; background-color: white; border: 1px solid #FD4522; color: #FD4522; float: right;" id="btn-1">
                            <span style="font-weight: bold">MUA TRẢ GÓP</span>
                        </button>
                    </form>
                </div>
        </div>


    <div class="row" style="margin-left:5px ;">

        <div class="col-lg-12">
            <h4 class="detail-title">Sản phẩm cùng loại</h4>
            <br>
                <?php foreach($sp_cungloai as $sanpham){ ?>
                    <br><li> <a href="index.php?act=ctsanpham&id=<?=$sanpham['id']; ?>">
                        <img widt="238px" height="238px" src="upload/<?=$sanpham['image']; ?>" alt=""></li>
                        <h5><a href="index.php?act=ctsanpham&id=<?php echo $sanpham['id']; ?>"><?php echo $sanpham['ten_hh']; ?></a></h5>
                
                <?php }   ?>
        </div>
    </div>
    <br>
    <div class="row" id="binhluan" style="margin-left:5px ;">
        <div class="col-lg-12">
            <h4 class="detail-title">Bình luận</h4>
            <?php include "binhluan.php"; ?>
        </div>
    </div>
    </div>
    <?php } ?>
    <div class="col-lg-3">
        <div class="row" id="boxright">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Danh mục
                </div>
                <ul class="list-group list-group-flush">
                <?php 
                            foreach ($dsdm as $dm) {
                              extract($dm);
                              $linkdm = "index.php?act=sanpham&id=".$id;
                              echo'<li class="list-group-item">
                              <a href="'.$linkdm.'">'.$ten_loai.'</a>
                          </li>';
                            }
                            ?>
                    <!-- <li class="list-group-item"><a href="#">Điện thoại</a></li>
                        <li class="list-group-item"><a href="#">Điện thoại</a></li>
                        <li class="list-group-item"><a href="#">Điện thoại</a></li> -->
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0" action="index.php" method="post">
                <input type="text" style="Width:208px">
                <input type="submit" value="Tìm kiếm">
            </form>
        </div>
        <br>
        
    </div>
</div>
<hr>