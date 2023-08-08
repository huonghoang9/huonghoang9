<div class="noidung">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <h3>Thêm sản phẩm</h3>
        <label for="">Tên sản phẩm</label> 
        <div class="row1 mb10"> 
        <input type="text" name="tensp" style="width: 100%; border-radius: 5px"><br>
        <label for="">Giá sản phẩm</label> <br>
        <input type="text" name="giasp" style="width: 100%; border-radius: 5px"><br>
        <label for="">Giảm giá</label> <br>
        <select name="giamgia" id="" style="border-radius: 5px">
            <?php foreach($list_giamgia as $giamgia){
            ?>
            <option value="<?php echo $giamgia['id']?>"><?php echo $giamgia['giam_gia']?></option>
            <?php }?>
        </select> <br>
        <label for="">Hình sản phẩm</label> <br>
        <input type="file" name="hinh"> <br>
        <label for="">Số lượng</label> <br>
        <input type="number" name="soluong" style="width: 100%; border-radius: 5px"> <br>
        <label for="">Loại sản phẩm</label><br>
        <select name="loaisp" id=""> <br>
            <?php foreach($list_danhmuc as $danhmuc){
            ?>
            <option value="<?php echo $danhmuc['id']?>"><?php echo $danhmuc['ten_loai']?></option>
            <?php }?>
        </select> <br>
        <label for="">Mô tả</label> <br>
        <textarea name="mota" cols="30" rows="10"></textarea> <br>
        <div class="luachon">
            <input type="submit" name="themmoi" value="Thêm mới" class="button">
            <input type="reset" value="Nhập lại" class="button">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="button"></a>
        </div> <br>
        <p class="thanhcong">
        <?php 
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
        </p>
    </form>
</div>