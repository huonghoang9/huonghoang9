<?php 
function insert_danhmuc($ten_loai){
    $sql= "insert into loai(ten_loai,gia) values('$ten_loai')";
    db_execute($sql);
}

function delete_danhmuc($id){
    $sql= "delete from loai where id=".$id;
    db_execute($sql);
}

function loadall_danhmuc(){
    $sql= "select * from loai order by id desc";
    $listdanhmuc=db_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id){
    $sql = "select * from loai where id=".$id;
    $dm = db_query_one($sql);
    return $dm;
}

function update_danhmuc($id,$ten_loai){
    $sql= "update loai set ten_loai='".$ten_loai."'  where id=".$id;   
    db_execute($sql);
}
function show_category(){
    $sql = "SELECT * FROM `loai`";
    return db_query($sql);
}

function load_tendm($id_loai){
    if ($id_loai) {
        $sql = "select * from loai where id=".$id_loai;
        $dm = db_query_one($sql);
        extract($dm);
        return $ten_loai;
    }else{
        return "";
    }
   
}

?>