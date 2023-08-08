<body>


    <main role="main">

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" style="background-color: black;"></li>
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

        <article style="margin: 50px">
            <p class="title" style="margin-bottom: 50px">Thời trang bán chạy nhất</p>
            <div class="row">
                <?php foreach ($sanphambanchay as $sanpham) { ?>
                    <div class="col-xl-3">
                        <div class="features-product-item mb-30" style="text-align: center;">
                            <div class="features-product-thumb">
                                <a href="index.php?act=ctsanpham&id=<?php echo $sanpham['id']; ?>">
                                    <img class="mainimg" width="238px" height="238px" src="upload/<?php echo $sanpham['image']; ?>" alt="">
                                </a>
                            </div>
                            <div class="features-product-content">
                                <h5><a href="index.php?act=ctsanpham&id=<?php echo $sanpham['id']; ?>" style="color:black"><?php echo $sanpham['ten_hh']; ?></a></h5>
                                <p class="price" style="color: red;"><?php echo $sanpham['gia']; ?><span style="font-size:small">đ</span></p>
                            </div>
                        </div>
                    </div>
                <?php }   ?>

            </div>
   
            <hr>

            <p class="title" style="margin-bottom: 50px;margin-top: 50px">Thời trang đang giảm giá</p>
            <div class="row">
                <?php foreach ($giamgia as $giamgia) { ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="col">
                            <div class="features-product-item mb-30" style="text-align: center;">
                                <div class="features-product-thumb">
                                    <a href="index.php?act=ctsanpham&id=<?php echo $giamgia['id']; ?>">
                                        <img class="mainimg" width="238px" height="238px" src="./upload/<?php echo $giamgia['image']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="features-product-content">
                                    <h5><a href="index.php?act=ctsanpham&id=<?php echo $giamgia['id']; ?>" style="color:black"><?php echo $giamgia['ten_hh']; ?></a></h5>
                                    <span class="price" style="color: red;"><?php echo $giamgia['gia'];  ?>đ</span> <span style="text-decoration: line-through;color: grey"><?php echo ($giamgia['gia'] / 80 * 100);  ?>đ</span>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </article>

    </main>
    <br>
    <hr>