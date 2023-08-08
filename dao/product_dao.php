<?php
 include_once "pdo.php";

 function insert_product($ten_hh,$loai,$gia,$giamgia,$filename,$soluong,$mota){
    $sql = "INSERT INTO `product`( `ten_hh`, `id_loai`, `gia`, `id_giamgia`, `image`, `so_luong`, `mota`) VALUES ('$ten_hh','$loai','$gia','$giamgia','$filename','$soluong','$mota')";
    db_execute($sql);
 }

 function show_all_sp() {
   $sql = "SELECT * FROM `product`";
   return db_query($sql);
 }

 function show_sp_id($id){
   $sql = "SELECT * FROM `product` WHERE `product`.`id` = {$id}";
   return db_query($sql);
 }

 function show_sp_category($id){
  $sql = "SELECT * FROM `product` WHERE `product`.`id_loai` = {$id}";
  return db_query($sql);
 }

 function xoasp($id){
    $sql= "delete from product where id=".$id;
    db_execute($sql);
}

function loadmotsp($id){
  $sql="SELECT * from `product` where `product`.`id` = '$id'";
  return db_query($sql);
}

function update_sanpham($id,$ten_hh,$gia,$mota,$filename,$loai,$id_giamgia,$soluong){
 $sql = "UPDATE `product` SET `ten_hh`='$ten_hh',`id_loai`='$loai',`gia`='$gia',`id_giamgia`='$id_giamgia',`image`='$filename',`so_luong`='$soluong',`mota`='$mota' WHERE `product`.`id` = '$id'";
  db_execute($sql);
}

function loadall_sanpham($kyw="",$iddm= 0){
  $sql= "select * from product where 1";
  if ($kyw !="") {
      $sql.=" and ten_hh like '%".$kyw."%'";
  }

  if ($id_loai > 0) {
      $sql.=" and id_loai = '".$id_loai."'";
  }
   $sql.=" order by id desc";
  $listsanpham=db_query($sql);
  return $listsanpham;
}

function show_sp_giamgia(){
  $sql = "SELECT * FROM `product` WHERE `product`.`id_giamgia` = 2";
  return db_query($sql);
}

function loadspbc(){
  $sql= "select * from product where 1 order by soluotmua desc limit 0,8";
  $sanphambanchay=db_query($sql);
  return $sanphambanchay;
}

function show_sp_cungloai($id_loai){
  $sql = "SELECT * FROM `product` WHERE `product`.`id_loai` = '$id_loai'";
  return db_query($sql);
}

?>