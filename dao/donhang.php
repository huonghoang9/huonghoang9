<?php  
 include "pdo.php";

 function insert_donhang($soluong,$ten_hh,$color,$size,$gia,$id_hoadon,$image){
    $sql = "INSERT INTO `don_hang`(`soluong`, `ten_hh`, `color`, `size`, `gia`, `image`, `id_hoadon`) VALUES ('$soluong','$ten_hh','$color','$size','$gia','$image','$id_hoadon')";
    db_execute($sql);
 }

 function show_donhang_idhd($hoadon_id){
   $sql = "SELECT * FROM `don_hang` WHERE `don_hang`.`id_hoadon` = '$hoadon_id'";
   return db_query($sql);
 }

 function loadall_thongke(){
  $sql ="select loai.id as maloai, loai.ten_loai as tenloai, count(product.id) as countpr, min(product.gia) as minprice, max(product.gia) as maxprice, avg(product.gia) as avgprice ";
  $sql.=" from product left join loai on loai.id = product.id_loai";
  $sql.=" group by loai.id order by loai.id desc";
  $list_thongke = db_query($sql);
  return $list_thongke;

 }
?>