<?php
$host="localhost"; //untuk hostnya 
$username="root"; //untuk username nya
$password=""; //untuk passwordnya, yaitu kosong
$databasename="akademik2"; /

$con=@mysqli_connect($host,$username,$password,$databasename);
if (!$con) {

 echo "Error: " . mysqli_connect_error();
exit();
}
?>