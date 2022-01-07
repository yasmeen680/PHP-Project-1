<?php
session_start();
require "lib.php";

if(empty($_SESSION['user'])){
    header("LOCATION: login.php");
}

$userid = $_SESSION['user']['id'];

if($userid == $_GET['id'] ){
    echo "your permession not allowed";
}else{
    $res = deleteUser($_GET['id']);
    if($res == 1){
        header("LOCATION: index.php");
    }
}




