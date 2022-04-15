<?php
$host = "localhost";
$username = "root";
$password = "";
$database_name = "rodztechnology";


$con = mysqli_connect($host, $username, $password, $database_name);

if(!$con){
    echo "Connection failed.";
}
?>
