
<form action="#" method="post">
                <div class="row1 formtitle">
                    <h1>DANH SÁCH LOẠI HÀNG</h1>
                </div>
                <div class="row1 formcontent ">

                    <div class="row1 mb10 formdsloai"> 
                      <table>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                            
                            <th></th>
                        </tr>

                        <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;

                            echo'
                            <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$ten_loai.'</td>
                            <td>
                            <a href="'.$suadm.'"><input type="button" value="Sửa"></a> 
                            <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                            </td>
                           </tr>';
                        }
                        ?>
                       
                        
                      </table>
                       
                    </div>

                    <div class="row1 mb20">
                        <input type="button" value="Chọn Tất Cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xóa Các Mục Đã Chọn">
                       <a href="index.php?act=add_dm"><input type="button" value="Nhập Thêm"> </a>
                    </div>
                </div>
            </form>
</body>
</html> 
