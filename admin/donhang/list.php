<div class="row1">
            <form action="#" method="post">
                <div class="row1 formtitle">
                    <h1>danh sách hóa đơn</h1>
                </div>
                <div class="row1 formcontent ">
                    <div class="row1 mb10 formdsloai"> 
                      <table>
                        <tr>
                            <th>mã hóa đơn</th>
                            <th>id người dùng</th>
                            <th>tổng tiền</th>
                            <th>mã thanh toán</th>
                            <th></th>
                        </tr> 

                        <?php 
                        foreach ($hoadon as $list) {
                         ?>
                           <tr>
                           <td><?php echo $list['id']; ?></td>
                            <td><?php echo $list['id_user']; ?></td>
                            <td><?php echo $list['tongtien']; ?></td>
                            <td><?php echo $list['ma_thanhtoan']; ?></td>
                           
                            <td>
                            <a href="index.php?act=donhang&id=<?php echo $list['id']; ?>"><input type="button" value="đơn hàng"></a>
                            </td>
                           </tr>
                        <?php } ?>
                      </table>
                       
                    </div>
                </div>
            </form>
        </div>
</body>
</html> 