<?php 

include "pdo.php";

function show_all_size() {
   $sql = "SELECT * FROM `size`";
   return db_query($sql);
}

function show_price_size($size) {
   $sql  = "SELECT * FROM `size` WHERE `size`.`size` = '{$size}'";
   return db_query($sql);
}

?>