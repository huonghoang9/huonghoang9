<div class="content">
    <h3>Danh sách sản phẩm</h3>
    <form action="index.php?act=listsp" style="width: 100%;" method="POST">
        <div class="timkiem"  style="display: flex; align-items: center; justify-content: space-around;">
            <h4>Tìm kiếm sản phẩm</h4>
            <input type="text" name="kyw" placeholder="Nhập từ khóa" style="width: 40%;">
            <h4>Loại sản phẩm</h4>
            <select name="id_loai" id="" style="width: 15%;">
            <option value="0" selected>Tất cả</option>
                <?php foreach ($list_danhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$ten_loai.'</option>';
             } ?>
            </select>
            <input type="submit" name="OK" value="Tìm kiếm" class="button">
        </div>
    </form>
    <table class="table">
        <thead>
            <th></th>
            <th>MÃ SẢN PHẨM</th>
            <th>TÊN SẢN PHẨM</th>
            <th>Loại</th>
            <th>GIÁ</th>
            <th>GIẢM GIÁ</th>
            <th>HÌNH</th>
            <th>Số Lượng</th>
            <th>Mô tả</th>
            <th></th>
        </thead>
        <tbody>
            <?php 
            foreach($list_sanpham as $sanpham){
                extract($sanpham);
                $hinhpath="../upload/".$image;
                if(is_file($hinhpath)){
                    $filename="<img src='".$hinhpath."' height='80'>";
                }else{
                    $filename="no photo";
                }
                $suasp = "index.php?act=suasp&id=".$id;
                $xoasp = "index.php?act=xoasp&id=".$id;
            ?>
            <tr>
                <td><input type="checkbox"></td>
                <td><?php echo $id?></td>
                <td><?php echo $ten_hh?></td>
                <td><?php echo $id_loai?></td>
                <td><?php echo $gia?></td>
                <td><?php
                    if ($id_giamgia == "1"){
                        echo "Giá không giảm";
                    } else if ($id_giamgia == "2") {
                        echo "Giảm 20%";
                    }
                ?></td>
                <td><?php echo $filename?></td>
                <td><?php echo $so_luong?></td>
                <td><?php echo $mota?></td>
                <td><a href="<?php echo $suasp?>"><button class="update">Sửa</button></a> <a href="<?php echo $xoasp?>" onclick="return confirm('Bạn có chắc chắn xóa?')"><button class="delete">Xóa</button></a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <button class="op">Chọn tất cả</button>
    <button class="op">Bỏ chọn tất cả</button>
    <button class="op">Xóa các mục đã chọn</button>
    <a href="index.php?act=addsp"><button class="op">Nhập thêm</button></a>
</div>