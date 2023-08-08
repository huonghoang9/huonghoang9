
<div class="row1">
            <form action="#" method="post">
                <div class="row1 formtitle">
                    <h1>DANH SÁCH TÀI KHOẢN</h1>
                </div>
                <div class="row1 formcontent ">
                    <div class="row1 mb10 formdsloai"> 
                      <table>
                        <tr>
                            <th></th>
                            <th>Mã TK</th>
                            <th>Tên Đăng Nhập</th>
                            <th>Mật Khẩu</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Điện Thoại</th>
                            <th>Họ Và Tên</th>
                            <th>Vai Trò</th>
                            <th></th>
                        </tr> 

                        <?php 
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk="index.php?act=suatk&id=".$id;
                            $xoatk="index.php?act=xoatk&id=".$id;

                            echo'
                            <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$username.'</td>
                            <td>'.$password.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$phone.'</td>
                            <td>'.$fullname.'</td>
                            <td>'.$permission.'</td>
                           
                            <td>
                            <a href="'.$suatk.'"><input type="button" value="Sửa"></a> 
                            <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
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
                       <!-- <a href="index.php?act=add_dm"><input type="button" value="Nhập Thêm"> </a> -->
                    </div>
                </div>
            </form>
        </div>
</body>
</html> 
