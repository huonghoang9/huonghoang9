
<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<div class="row1">
                <div class="row1 formtitle">
                    <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
                </div>
                <div class="row1 formcontent ">
                    <form action="index.php?act=updatedm" method="post">
                        <div class="row1 mb10">
                            Mã Loại <br>
                            <input type="text" name="maloai"  id="">
                        </div>

                        <div class="row1 mb10"> 
                            Tên Loại <br>
                            <input type="text" name="ten_loai" value="<?php if (isset($ten_loai)&&($ten_loai!="")) echo $ten_loai; ?>">
                        </div>

                        <div class="row1 mb20">
                            <input type="hidden" name="id" value="<?php if (isset($id)&&($id>0)) echo $id ; ?>">
                            <input type="submit" name="capnhat" value="Cập Nhật">
                            <input type="reset" value="Nhập Lại">
                           <a href="index.php?act=list_dm"><input type="button" value="Danh Sách"> </a>
                        </div>
                        
                        <?php 
                        if (isset($thongbao)&&($thongbao!="")) 
                            echo $thongbao;
                       
                        ?>
                    </form>
                </div>
        </div>
    </div>
    
</body>
</html> 
