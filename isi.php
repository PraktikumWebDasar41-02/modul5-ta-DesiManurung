<!DOCTYPE html>
	<html>
	<head>
		<center><title>DESI J MANURUNG</title>
		<h2> FORM MAHASISWA</h2>
	</head>
	<body>
<form method="POST">
	<table>
		<tr>
			<td>NIM :</td>
			<td><input type="number" name="nim" required></td>
		</tr>
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email" placeholder="@gmail.com" required></td>
		</tr>
		<tr>
			<td>Komentar :</td>
			<td><input type="text" name="komentar" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir :</td>
			<td><input type="date" name="tanggallahir" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin :</td>
			<td>
				<input type="radio" name="jenis" value="Perempuan">Perempuan <br>
				<input type="radio" name="jenis" value="Laki-Laki">laki-laki
			</td>
		</tr>
		<tr>
			<td>Program Studi :</td>
			<td><select name="programstudi">
				<option >-------PILIH PROGRAM STUDI------</option>
				<option value="MI">Manajemen informatika</option>
				<option value="TT">Teknik Telekomunikasi</option>
				<option value="DKV">Desain komunikasi visual</option>
				<option value="IK">Ilmu komputer</option>
			
			</select></td>
		</tr>
		<tr>
			<td>Fakultas :</td>
			<td><select name="fakultas">
				<option >-------PILIH FAKULTAS------</option>
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FKB">FKB</option>
				<option value="FEB">FEB</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
			</body>
		</center>
		</tr>
	</html>	
		</tr>
	</table>
</form>

<?php
include 'konek.php';

if (isset($_POST['submit'])) {

	if (strlen($_POST['nim'])==10){
	$nimaku = $_POST['nim'];
	}else{
		echo "NIM Harus berisi 10 angka"."<br>";
	}

	if (strlen($_POST['nama'])<25){
		$namaaku = $_POST['nama'];
	}else{
		echo "Nama Harus berisi Kurang dari 25 huruf"."<br>";
	}

	if (!strpos($_POST['email'], "@")||!strpos($_POST['email'], ".com")) {
		echo "Email KAMU tidak sesuai"."<br>";
	}else{
		$email5 = $_POST['email'];
	}

	$kom = $_POST['komentar'];
	$tang = $_POST['tanggallahir'];
	$prog = $_POST['programstudi'];
	$fak = $_POST['fakultas'];
	if (isset($_POST['jenis'])) {
		$jen = $_POST['jenis'];
	}
	
	session_start();

	$_SESSION['id'] = $nimaku;
	$_SESSION['nm'] = $namaaku;
	
	$qry = "INSERT INTO t_jurnal1 VALUES ($nimaku,'$namaaku','$email5','$tang','$jen','$prog','$fak','$kom')";
	$tambah=$simpan->query($qry);
	if($tambah==true){
		echo "Berhasil";
		header("Location:tampil.php");
	}else{
		echo "Gagal";
	}	

}

 ?>
