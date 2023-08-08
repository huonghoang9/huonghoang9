<?php 
include_once "pdo.php";


function show_giamgia(){
    $sql = "SELECT * FROM `giamgia`";
    return db_query($sql);
}

function show_id($id) {
    $sql = "SELECT * FROM `giamgia` WHERE `giamgia`.`id` = {$id}";
    return db_query($sql);
}



?>