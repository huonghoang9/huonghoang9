<?php 

include "pdo.php";

function show_all_color() {
   $sql = "SELECT * FROM `color`";
   return db_query($sql);
}

function show_price_color($color) {
   $sql  = "SELECT * FROM `color` WHERE `color`.`color` = '{$color}'";
   return db_query($sql);
}

?>