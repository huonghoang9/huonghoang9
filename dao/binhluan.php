<?php  
function load_binhluan($ma_hh){
    $sql = "SELECT * FROM `binhluan` WHERE `binhluan`.`id_hh` = '$ma_hh'";
    return db_query($sql);
}

function insert_binhluan($noidung, $ma_hh, $ma_kh){
    $sql = "INSERT INTO `binhluan`(`id_hh`, `fullname`, `noi_dung`) VALUES ('$ma_hh','$ma_kh','$noidung')";
    db_execute($sql);
}

function show_binhluan(){
    $sql = "SELECT * FROM `binhluan`";
    return db_query($sql);
}

function delete_binhluan($id){
    $sql = "DELETE FROM `binhluan` WHERE `binhluan`.`id` = '$id'";
    db_execute($sql);
}

?>