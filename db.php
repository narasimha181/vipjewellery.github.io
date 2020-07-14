<?php

$server = "sql309.epizy.com";
$username = "epiz_26251490";
$password ="9XKQrcL228w";
$dbname = "epiz_26251490_VIPjewelleryofficial";


$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
?>