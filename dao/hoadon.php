<?php  
 include "pdo.php";

 function insert_hoadon($id_user,$tongtien,$mathanhtoan){
   $sql = "INSERT INTO `hoa_don` (`id_user`,`tongtien`,`ma_thanhtoan`) VALUES ('$id_user','$tongtien','$mathanhtoan')";
   db_execute($sql);
 }

 function show_hoadon(){
  $sql = "SELECT * FROM `hoa_don`";
  return db_query($sql);
 }
 function get_hoadon($id){
    $sql = "SELECT * FROM `hoa_don` WHERE `hoa_don`.`id_user` = '$id'";
   return db_query($sql);
 }
 function get_id_hoadon($mathanhtoan){
  $sql = "SELECT * FROM `hoa_don` WHERE `hoa_don`.`ma_thanhtoan` = '$mathanhtoan'";
  return db_query($sql);
 }

?>