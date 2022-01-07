<?php



function register ($userName , $email , $password , $img){
    $con = mysqli_connect("localhost" , "root" , "" ,"first_pro");
    mysqli_query($con , "INSERT INTO `user`(`name` , `email` , `password` ,`img`) VALUES ('$userName' , '$email' , '$password' , '$img') ");
    $res = mysqli_affected_rows($con);

    if ($res == 1){
        return true;
    }else {
        return false;
    }
}


function login($eamil , $password){
    $con = mysqli_connect("localhost" , "root" , "" ,"first_pro");
    $myq = mysqli_query($con , "SELECT * FROM `user` WHERE `email` ='$eamil' AND  `password` = '$password'");
    $res = mysqli_fetch_assoc($myq);
    return $res;
}


function hash_pass($password){
    return sha1($password);
}


function allData(){
    $con = mysqli_connect("localhost" , "root" , "" ,"first_pro");
    $myq = mysqli_query($con , "SELECT * FROM `user`");

    while($res = mysqli_fetch_assoc($myq)){
        $data[] = $res;
    };
    return $data;
}

function userRole(){
    return $_SESSION['user']['user_role'];
}


function deleteUser($id){
    $con = mysqli_connect("localhost" , "root" , "" ,"first_pro");
    mysqli_query($con , "DELETE FROM `user` WHERE `id` ='$id' ");
    $res = mysqli_affected_rows($con);

    if ($res == 1){
        return true;
    }else {
        return false;
    }
}


function  getUserData($id){
    $con = mysqli_connect("localhost" , "root" , "" ,"first_pro");
    $myq = mysqli_query($con , "SELECT * FROM `user` where `id`  ='$id'");

    $res = mysqli_fetch_assoc($myq);    
    return $res;
}

function updateUser($id , $name , $email , $password , $img){
    $con = mysqli_connect("localhost" , "root" , "" ,"first_pro");
    $sql = "UPDATE `user` SET ";
    if(!empty($name)){
        $sql .= " `name` = '$name' ";
    } 
    if(!empty($email)){
        $sql .= " , `email` = '$email' ";
    }
    if(!empty($password)){
        $newpass = hash_pass($password);
        $sql .= " , `password` = '$newpass' ";
    }
    if(!empty($img)){
        $sql .= "  , `img` = '$img' ";
    }
    $sql .= "  WHERE `id` = '$id'";    

    mysqli_query($con , $sql);
    $res = mysqli_affected_rows($con);

    if ($res == 1){
        return true;
    }else {
        return false;
    }

}