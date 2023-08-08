<article>
    <div class="row">
        <div class="col-lg-8" style="margin: 20px;">
            Về thương hiệu thời trang nam <strong>FASHIM</strong>

            Ra đời từ 2022, thương hiệu thời trang nam 360 xác định sứ mệnh giúp các chàng trai trở nên đẹp hơn với phiên bản của chính mình. Ngày nay nam giới trẻ đang đứng những cơ hội tuyệt vời của xã hội hiện đại, công nghệ thông tin phát triển, cuộc cách mạng của các trang mạng xã hội để khẳng định bản thân. Bên cạnh đó, 360 hiểu rằng người trẻ cũng đang phải đối diện với những áp lực, thử thách thôi thúc bản thân phải thể hiên mình so với những người khác.

            Với mong muốn được đồng hành, truyền cảm hứng và khuyến khích các bạn nam giới trẻ dám bước ra khỏi vùng an toàn để tự do, tự tin thể hiện chính mình theo phong cách phù hợp với bản thân. Thương hiệu thời trang 360 đầu tư tâm huyết nghiên cứu thiết kế chi tiết từng sản phẩm để có thể mang lại những trải nghiệm mới cho khách hàng, cũng là thông điệp muốn nhắn nhủ đến các bạn trẻ hãy cho bản thân trải nghiệm, dám thay đổi, bứt phá để vươn lên. Chúng ta chỉ thực sự thay đổi khi chúng ta hành động. 360 tin rằng dù có thể thành công hay thất bại, nhưng chắc chắn chỉ có những trải nghiệm mới giúp bạn trưởng thành. Trưởng thành là một hành trình với những dấu mốc thanh xuân, để khi nhìn lại tôi và bạn có thể tự tin không phải nuối tiếc “giá như…”

            Mỗi bạn trẻ là một phiên bản độc đáo và duy nhất.

            <strong>FASHIM</strong> – Be yourself
        </div>
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
        <div class="row">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Top 10 yêu thích
                </div>
                <ul class="list-group list-group-flush">
                    <!-- <li class="list-group-item"><a href="#">Điện thoại</a></li>
                        <li class="list-group-item"><a href="#">Điện thoại</a></li>
                        <li class="list-group-item"><a href="#">Điện thoại</a></li> -->
                </ul>
            </div>
        </div>
    </div>
    </div>
</article>
<hr>