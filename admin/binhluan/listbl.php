

<div class="row1">
            <form action="index.php?act=xoabl" method="post">
                <div class="row1 formtitle">
                    <h1>DANH SÁCH TÀI KHOẢN</h1>
                </div>
                <div class="row1 formcontent ">
                    <div class="row1 mb10 formdsloai"> 
                      <table>
                        <tr>
                            <th>Khách hàng</th>
                            <th>Bình luận</th>
                            <th>Sản phẩm</th>
                            <th></th>
                        </tr> 
                        <?php 
                        foreach($arr_bl as $bl){
                        ?>
                        <tr>
                         <td><?php echo $bl[0]; ?></td>
                         <td><?php echo $bl[1]; ?></td>
                         <td><?php echo $bl[2]; ?></td>
                         <input type="hidden" name="id" value="<?php echo $bl[3]; ?>">
                         <td><button type="submit" name="submit">xóa</button></td>
                        </tr>
                         <?php }  ?>
                        
                      </table>
                       
                    </div>
                </div>
            </form>
        </div>
</body>
</html> 