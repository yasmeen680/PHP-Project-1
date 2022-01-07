<!-- 

explode("/" , what to explode) ==> thios function convert string to an array 


$type = $_FILES['img']['type']; ==> will return   'img/jpeg'

-->


<?php
session_start();
require "lib.php";
if(!empty($_SESSION['user'])){
    header("LOCATION:  index.php");
}

if(isset($_POST['username']) ){

    $userName = $_POST['username'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    $confermedpassword = $_POST['confermedpassword'];
    $hashPaswword = hash_pass($password);


    // img
    $tmp =$_FILES['img']['tmp_name'];
    $type = $_FILES['img']['type'];    

    $image = explode("/",$type);
    $extension = $image[1];
    
    $imgFullName = $userName. "." .$extension;

    if($password != $confermedpassword){
        echo "Password didn't matched";
    }else{
            $re = register($userName , $email , $hashPaswword ,$imgFullName);
        if($re == true){
            move_uploaded_file($tmp , 'userimages/'.$userName.".".$extension);
            echo "user inserted successfully";
        }else{
            echo "regesteration failed ";
        }    

    }
    
}

require "design/register.php";


?>



