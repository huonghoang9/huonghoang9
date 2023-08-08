<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"
                style="background-color: black;"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" style="background-color: black;"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2" style="background-color: black;"></li>
        </ol>
        <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="site/images/Banner-web-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="site/images/Banner-web-2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="site/images/Banner-web-3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    <br>

    <div class="smallnav">
        <a href="admin_layout.html">TRANG CHỦ</a> > <a href="trangdanhmuc.html">Tên Danh Mục</a>
    </div>

    <article>
        <h3>Tên danh mục sản phẩm</h3>
        <section class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="shop-top-meta mb-35">
        </div>
        <div class="row">
            <?php foreach($sanpham as $sanpham){  ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                          <div class="col">
                            <div class="features-product-item mb-30">
                                <div class="features-product-thumb">
                                <?php  if($sanpham['id_giamgia'] == 2){ ?>
                                    <div class="discount-tag">-<?php echo "20%"; ?></div>
                                    <?php } else { ?>
                                     <div class="discount-tag">-<?php echo "0%"; ?></div>
                                    <?php } ?>
                                    <a href="index.php?act=ctsanpham&id=<?php echo $sanpham['id']; ?>">
                                        <img widt="238px" height="238px" src="./upload/<?php echo $sanpham['image']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="features-product-content">
                                    <h5><a href="index.php?act=ctsanpham&id=<?php echo $sanpham['id']; ?>"><?php echo $sanpham['ten_hh']; ?></a></h5>
                                    <p class="price">$<?php echo $sanpham['gia']; ?></p>
                                </div>
                            </div>
                        </div>
            </div>
            <?php }  ?>
        </div>
        <div class="row">
        
        </div>
    </div>
</section>

  
    </article>
    <hr>