<?php
session_start(); 
include "koneksi.php"; 

$id_user = $_POST['id_user']; 
$pass=md5($_POST['paswd']); 

$sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";


//menangkap inputan code captchanya
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {

$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);

if ($ketemu > 0){
	//untuk menyimpan informasi id_user ke dalam variabel session
 	$_SESSION['iduser'] = $r['id_user'];
 	// untuk menyimpan informasi password ke dalam variabel session 
 	$_SESSION['passuser'] = $r['password'];
 	//jika users berhasil login,alert seperti ini
	echo"USER BERHASIL LOGIN<br>";
	
	echo "id user =",$_SESSION['iduser'],"<br>";
	//dan menampilkan password
	echo "password=",$_SESSION['passuser'],"<br>";
	
	echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}

else{
	echo "<center>Login gagal! username & password tidak benar<br>";
	echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";
}

mysqli_close($con); //digunakan untuk menghentikan koneksi php ke server mysql
}

else {
	echo "<center>Login gagal! Captcha tidak sesuai<br>";
 	echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; 
}

?>