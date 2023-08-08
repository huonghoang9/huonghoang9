<?php
 include "pdo.php";

 function show_thbl_idhh($ma_hh){
    $sql = " SELECT * FROM `tonghop_binhluan` WHERE `tonghop_binhluan`.`id_hh` = '$ma_hh'";
    return db_query($sql);
 }


?>