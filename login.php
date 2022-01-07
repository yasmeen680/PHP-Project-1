<?php
session_start();

require "lib.php";
if(!empty($_SESSION['user'])){
    header("LOCATION:  index.php");
}

if(isset($_POST['email'])){

    $email =$_POST['email'];
    $password = $_POST['password'];

    $hashPaswword = hash_pass($password);
    $userdata = login($email, $hashPaswword);

    if(!empty($userdata)){
        $_SESSION['user'] = $userdata;

        header("LOCATION: index.php");

    }else{
        echo "invalid user or password";
    }
}





require "design/login.php";
