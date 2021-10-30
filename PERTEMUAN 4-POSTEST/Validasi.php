<html>
	<head>
	<style>
 		.error {color: #FF0000;}
	</style>
 	</head>
 
 <body>
 <?php
	$namaErr = $nimErr = $jenis_kelaminErr = $jurusanErr  = $semesterErr   = $fakultasErr ="";
	$nama = $nim = $jenis_kelamin = $jurusan  = $semester   = $fakultas ="";
 	
 
 	if ($_SERVER["REQUEST_METHOD"] == "POST") {
 		if (empty($_POST["nama"])) {
 			$namaErr = "Nama harus diisi";
 		}else {
 			$nama = test_input($_POST["nama"]);
 		}
		 if (empty($_POST["nim"])) {
			$nimErr = "NIM harus diisi";
		}else {
			$nim = test_input($_POST["nim"]);
		}


		if (empty($_POST["jenis_kelamin"])) {
			$jenis_kelaminErr= "Jenis Kelamin harus dipilih";
		}else {
			$jenis_kelamin = test_input($_POST["jenis_kelamin"]);
		}
	}


		if (empty($_POST["jurusan"])) {
			$jurusanErr = "";
		}else {
			$jurusan = test_input($_POST["jurusan"]);
		}


		if (empty($_POST["semester"])) {
			$semesterErr = "";
		}else {
			$semester = test_input($_POST["semester"]);
		}

	


	

		if (empty($_POST["fakultas"])) {
			$fakultasErr = "";
		}else {
			$fakultas = test_input($_POST["fakultas"]);
		}
 
 
 	
	function test_input($data) {
 		$data = trim($data);
 		$data = stripslashes($data);
 		$data = htmlspecialchars($data);
 		return $data;
 	}
 ?>

<form action="" method="post"<?php 
 echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 	<table>
	 <body bgcolor=	#F0F8FF>
	<br>
	<h1 align=center>Data Mahasiswa</h1><br>
	
		<table border=1 align=center width=500px height=300px>
			<tr>
				<td colspan=2 align=center bgcolor=#8FBC8F><b>Data Mahasiswa</b></td>
			
			</tr>

 
 		<tr>
 			<td>Nama:</td>
 			<td><input type = "text" name = "nama">
 			<span class = "error">* <?php echo $namaErr;?></span>
 			</td>
 		</tr>
 
		 <tr>
 			<td>NIM:</td>
 			<td><input type = "" name = "nim">
 			<span class = "error">* <?php echo $nimErr;?></span>
 			</td>
 		</tr>

		 <td>Jenis Kelamin:</td>
 			<td>
 				<input type = "radio" name = "jenis_kelamin" value = "L">Laki-Laki
 				<input type = "radio" name = "jenis_kelamin" value = "P">Perempuan
 				<span class = "error">* <?php echo $jenis_kelaminErr;?></span>
 			</td>
 		</tr>
		 <tr>
 			<td>Jurusan:</td>
 			<td><input type = "text" name = "jurusan">
 			<span class = "error">* <?php echo $jurusanErr;?></span>
 			</td>
 		</tr>

		 <tr>
 			<td>Semester:</td>
 			<td><input type = "text" name = "semester">
 			<span class = "error">* <?php echo $semesterErr;?></span>
 			</td>
 		</tr>
		
			<tr>
 			<td>Fakultas:</td>
 			<td><input type = "text" name = "fakultas">
 		</tr>
		 <td colspan="3" align="center"><input type="submit" name="submit"   value="Submit" /><input type="reset" name="Batal" value="Batal" /></td>
 
 		
 			
 			
 </table>
</form>
 
<?php
	echo "<h2>OUTPUT DATA MAHASISWA</h2>";
	echo "<table border=1 width=1000px>";
	echo "<tr bgcolor=	#00FFFF>";
	echo "<th width=300>Nama</th>";
	echo "<th width=300>NIM</th>";
	echo "<th width=300>Jenis Kelamin</th>";
	echo "<th width=300>Jurusan</th>";
	echo "<th width=300>Semester</th>";
	echo "<th width=300>Fakultas</th>";
    echo "<tr align=center>";
	echo "</tr>";

	echo "<tr align=center>";
	echo "<td>$nama</td>";
	echo "<td>$nim </td>";
	echo "<td> $jenis_kelamin</td>";
	echo "<td> $jurusan</td>";
	echo "<td> $semester</td>";
	echo "<td> $fakultas </td>";
	echo "</tr>";
	
	echo "</table>";
?>


 </body>
</html>