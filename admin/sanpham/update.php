

<div class="content">
    <h3>Cập nhật sản phẩm</h3>
    <form action="index.php?act=listsp" style="width: 100%;" method="POST" enctype="multipart/form-data">
        <div class="timkiem" style="display: flex; align-items: center; ">
        <?php  foreach($sanpham as $sanpham){ ?>
            <h4>Loại sản phẩm</h4> <br> <br>
            <select name="id_loai" id="" style="width: 15%;">
                <option value="0" selected>Tất cả</option>
                <?php foreach ($list_danhmuc as $danhmuc) {
                    extract($danhmuc);
                    if($id_loai==$id)  echo '<option value="'.$id.'" selected>'.$ten_loai.'</option>';
                    else echo '<option value="'.$id.'">'.$ten_loai.'</option>';
             } ?>
            </select> 
        </div>
        </div>
            <div class="row1 mb10">
                Tên sản phẩm <br>
                <input type="text" name="ten_hh" value="<?php echo $sanpham['ten_hh']; ?>">
            </div>
            <div class="row1 mb10">
                Giá <br>
                <input type="text" name="gia" value="<?php echo $sanpham['gia']; ?>">
            </div>
            <div class="row1 mb10">
                ID Giảm giá <br>
                <input type="text" name="id_giamgia" value="<?php echo $sanpham['id_giamgia']; ?>">
            </div>
            <div class="row1 mb10">
                Số lượng <br>
                <input type="text" name="so_luong" value="<?php echo $sanpham['so_luong']; ?>">
            </div>
            <div class="row1 mb10">
                Hình <br>
               <img width="300px" src="../upload/<?php echo $sanpham['image']; ?>" alt="">
               <input type="file" name="hinh">
               <input type="hidden" name="img" value="<?php echo $sanpham['image']; ?>">
            </div>
            <div class="row1 mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" row1s="10"><?php echo $sanpham['mota']; ?></textarea>
            </div>
            <div class="row1 mb10">
                <input type="hidden" name="id" value="<?php echo $sanpham['id']; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($tb)&&($tb!="")) echo $tb;
            ?>
            <?php } ?>
    </form>
</div>