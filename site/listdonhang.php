<div class="row1">
            <form action="#" method="post">
                <div class="row1 formtitle">
                    <h1>đơn hàng </h1>
                </div>
                <div class="row1 formcontent ">
                    <div class="row1 mb10 formdsloai"> 
                      <table border=1 >
                        <tr>
                            <th>hình ảnh</th>
                            <th>tên sản phẩm</th>
                            <th>size</th>
                            <th>color</th>
                            <th>số lượng</th>
                            <th>giá tiền</th>
                            <th></th>
                        </tr> 

                        <?php 
                        foreach ($donhang as $list) {
                         ?>
                           <tr>
                           <td><img width="100px" src="upload/<?php echo $list['image']; ?>" alt=""></td>
                            <td><?php echo $list['ten_hh']; ?></td>
                            <td><?php echo $list['size']; ?></td>
                            <td><?php echo $list['color']; ?></td>
                            <td><?php echo $list['soluong']; ?></td>
                            <td><?php echo $list['gia']; ?></td>
                           </tr>
                        <?php } ?>
                      </table>
                       
                    </div>
                </div>
            </form>
        </div>
</body>
</html> 