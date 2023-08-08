<div class="row1">
            <form action="#" method="post">
                <div class="row1 formtitle">
                    <h1>Hóa đơn đã thanh toán</h1>
                </div>
                <div class="row1 formcontent ">
                    <div class="row1 mb10 formdsloai"> 
                      <table border=1 >
                        <tr>
                            <th>Mã hóa đơn</th>
                            <th>Tổng tiền</th>
                            <th>Mã thanh toán</th>
                            <th></th>
                        </tr> 

                        <?php 
                        foreach ($ma_hoadon as $list) {
                         ?>
                           <tr>
                           <td><?php echo $list['id']; ?></td>
                            <td><?php echo $list['tongtien']; ?></td>
                            <td><?php echo $list['ma_thanhtoan']; ?></td>
                           
                            <td>
                            <a href="index.php?act=donhang&id=<?php echo $list['id']; ?>"><input type="button" value="Đơn hàng"></a>
                            </td>
                           </tr>
                        <?php } ?>
                      </table>
                       
                    </div>
                </div>
            </form>
        </div>
        <hr>
        </body>
</html> 