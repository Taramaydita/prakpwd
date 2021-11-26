<?php
include "koneksi.php"; //digunakan untuk koneksi dengan database akademik2

$sql="delete from users where id_user= '$_GET[id]'";
mysqli_query($con, $sql);
mysqli_close($conn); //digunakan untuk menghentikan koneksi php ke server mysql
header('location:tampil_user.php');
?>