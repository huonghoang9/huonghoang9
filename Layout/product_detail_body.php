<div id="content" style="overflow: hidden;">
    <div class="col-lg-9" id="boxleft" style="overflow: hidden; float:left">
        <div class="row">
            <h1 class="detail-title">Chi tiết sản phẩm</h1>
        </div>
        <div class="row">
            <?php foreach($sp as $sp){ ?>
            <div class="col-lg-6" style="float: left">
                <img src="./upload/<?php echo $sp['image'];  ?>" alt="" width="450px"><br><br>
                <div class="trait" style="margin-left:40px ;">
                <h5 class="detail-title">Đặc điểm nổi bật:</h5>
                <p><?php echo $sp['mota'];  ?></p>
            </div>
            </div>
            <div class="col-lg-6" style="float: right;overflow:hidden">
                <h4 class="detail-title"><?php echo $sp['ten_hh'];  ?></h4>
                <hr>
                <h2 class="detail-title"><?php echo $sp['gia'];  ?></h2>
                <div class="box" style="width: 100px; height: 28px; background-color: red; color: white; text-align: center; border-radius: 5px;">
                    Giá giảm
                </div> <br>
                <div class="product__details__option">
                    <div class="product__details__option__size">
                        <span>Size:</span>
                        <label for="xxl">xxl
                            <input type="radio" id="xxl">
                        </label>
                        <label for="xl">xl
                            <input type="radio" id="xl">
                        </label>
                        <label for="l">l
                            <input type="radio" id="l">
                        </label>
                        <label for="sm">s
                            <input type="radio" id="sm">
                        </label>
                    </div>
                    <div class="product__details__option__color">
                        <span>Color:</span>
                        <label class="c-1" for="sp-1">
                            <input type="radio" id="sp-1">
                        </label>
                        <label class="c-2" for="sp-2">
                            <input type="radio" id="sp-2">
                        </label>
                        <label class="c-3" for="sp-3">
                            <input type="radio" id="sp-3">
                        </label>
                        <label class="c-4" for="sp-4">
                            <input type="radio" id="sp-4">
                        </label>
                        <label class="c-9" for="sp-9">
                            <input type="radio" id="sp-9">
                        </label>
                    </div>
                </div>
                <div class="product__details__cart__option">
                    <div class="quantity">
                        <div class="pro-qty">
                            <input type="number" value="1">
                        </div>
                    </div>
                   
                </div>
                <br>
                <button style="width: 100%; border-radius:5px; background-color: #FD4522; border: white; color: white" id="btn-buynow">
                    <span style="font-weight: bold">MUA NGAY</span>
                    <br>Giao hàng tận nơi
                </button>
                <BR></BR>
                <button style="width: 48%;height: 40px; border-radius:5px; background-color: white; border:1px solid #FD4522; color: #FD4522" id="btn-1">
                  <a href="index.php?act=cart&id=<?php echo $sp['id']; ?>"> <span style="font-weight: bold">THÊM VÀO GIỎ HÀNG</span> </a> 
                </button>
                <button style="width: 48%;height: 40px; border-radius:5px; background-color: white; border: 1px solid #FD4522; color: #FD4522; float: right;" id="btn-1">
                    <span style="font-weight: bold">MUA TRẢ GÓP</span>
                </button>
            </div>
            <?php } ?>
        </div>

        <div class="row" style="margin-left:5px ;">
            <h4 class="detail-title">Sản phẩm cùng loại</h4>
            <div class="col-lg-12">
                <br><li><a href=" linksanphamcungloai ">Tên sp cùng loại</a></li>
            </div>
        </div>
        <br>
        <div class="row" id="binhluan" style="margin-left:5px ;">
            <h4 class="detail-title">Bình luận</h4>
        </div>
    </div>