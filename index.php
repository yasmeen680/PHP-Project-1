<?php
session_start();
require "lib.php";

if(empty($_SESSION['user'])){
    header("LOCATION: login.php");
}

$userRole = userRole();

$data = allData();
// echo "<pre>";
// print_r($data);

require "design/index.php";


?>

