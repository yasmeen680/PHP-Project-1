<?php
session_start();
require "lib.php";
if(empty($_SESSION['user'])){
    header("LOCATION: login.php");
}

// echo "<pre>";
// print_r($userData);
if(isset($_POST['username'])){
    $id = $_POST['id'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

//  img 
if(!empty($_FILES['img']['tmp_name'])){
    $img = $_FILES['img']['tmp_name'];
    $imgType = $_FILES['img']['type'];
    $type = explode("/" , $imgType);
    
    $ext = $type['1'];
    $newName = $name.".".$ext;
    move_uploaded_file($img , "userimages/".$newName);
}   
    $res = updateUser($id , $name , $email , $password , $newName);
    if($res == true){
        header("LOCATION: index.php");
    }else{
        echo "failed to update";die;
    }
}else{
$userData= getUserData($_GET['id']);
}

require "design/update.php";