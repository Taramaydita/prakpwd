<?php
$host="localhost";
$username="root";
$password="";
$databasename="akademikk";
$con=@mysqli_connect($host,$username,$password,$databasename);
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
?>