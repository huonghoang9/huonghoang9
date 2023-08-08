<?php
 include_once "pdo.php";

 function insert_acount($username,$password,$email,$address,$phone,$fullname,$image,$permission){
    $sql = "INSERT INTO `user`(`username`, `password`, `email`, `address`, `phone`, `fullname`,`image`,`permission`) VALUES ('$username','$password','$email','$address','$phone','$fullname','$image','$permission')";
    db_execute($sql);
 }

 function update_acount($id,$username,$password,$email,$address,$phone,$fullname,$image){
    $sql = "UPDATE user SET `user.username` = {$username}, `user.password`= {$password} , `user.email`= {$email} , `user.address` = {$address} , `user.phone` = {$phone} , `user.fullname` = {$fullname} , `user.image` = {$image} WHERE `user.id` = {$id}";
    db_execute($sql);
 }

 function update_permission($id,$permission) {
    $sql = "UPDATE user SET `user.permission`  = {$permission} WHERE `user.id` = {$id}";
    db_execute($sql);
 }

 function delete_acount($id){
    $sql = "DELETE FROM acount WHERE `acount.id` = {$id}";
    db_execute($sql);
 }

 function show_acount() {
    $sql = "SELECT * FROM user";
    return db_query($sql);
 }

 function login_acount($username,$password){
   $sql = "SELECT * FROM `user` WHERE `user`.`username` = '{$username}' AND `user`.`password` = '{$password}'";
   return db_query($sql);
 }



function loadall_taikhoan(){
    $sql= "select * from user order by id desc";
    $listtaikhoan=db_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($username,$password,$email,$address,$phone,$fullname,$image,$permission){
    $sql= "insert into user(username,password,email,address,phone,fullname,image,permission) values('$username','$password','$email','$address','$phone','$fullname','$image','$permission')";
    db_execute($sql);
}

function check_user($username,$password){
    $sql = "select * from user where username='".$username."' and password='".$password."'";
    $sp = db_query_one($sql);
    return $sp;
}

function check_email($email){
    $sql = "select * from user where email='".$email."'";
    $sp = db_query_one($sql);
    return $sp;
}

function  update_taikhoan($id,$username,$password,$email,$address,$phone,$fullname,$permission){
    $sql= "update user set username='".$username."', password='".$password."',email='".$email."', address='".$address."', phone='".$phone."', fullname='".$fullname."', permission='".$permission."' where id=".$id; 
    db_execute($sql);
}


function delete_taikhoan($id){
    $sql= "delete from user where id=".$id;
    db_execute($sql);
}


function loadone_taikhoan($id){
    $sql = "select * from user where id=".$id;
    $tk = db_query_one($sql);
    return $tk;
}

function show_acount_username($username){
    $sql = "SELECT * FROM `user` WHERE `user`.`username` = '$username'";
    return db_query($sql);
}
?>