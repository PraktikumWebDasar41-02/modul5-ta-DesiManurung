<?php
session_start();
include 'konek.php';
$nimaku = $_SESSION['id'];



$qry = "SELECT * FROM t_jurnal1 WHERE nim = '$nim1'";
$hasil=$simpan->query($qry);
if($hasil==true){
	foreach($hasil as $value){
		$namaaku=$value['nama'];
		$nimaku=$value['nim'];
		$email5=$value['email'];
		$komentar5=$value['komentar'];
		$tanggallahir5=$value['tanggallahir'];
		$jenis5=$value['jenis'];
		$programstudi5=$value['programstudi'];
		$fakultas5=$value['fakultas'];
	}
}
	

?>


<form method="post">
<table>
	<tr>
		<td>Nama :</td>
		<td><?php echo $namaaku."<br>"; ?></td>
	</tr>
	<tr>
		<td>NIM :</td>
		<td><?php echo $nimaku."<br>"; ?></td>
	</tr>
	<tr>
		<td>Email :</td>
		<td><?php echo $email5."<br>"; ?></td>
	</tr>
	<tr>
		<td>komentar :</td>
		<td><?php echo $komentar5."<br>"; ?></td>
	</tr>
	<tr>
		<td>Tanggal lahir :</td>
		<td><?php echo $tanggallahir5."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jenis kelamin :</td>
		<td><?php echo $jenis5."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jurusan :</td>
		<td><?php echo $programstudi5."<br>"; ?></td>
	</tr>
	<tr>
		<td>fakultas :</td>
		<td><?php echo $fakultas5."<br>"; ?></td>
	</tr>

	<tr>
		<td><input type="submit" name="keluar" value="Input baru"></td>
	</tr>
</table>

</form>
<?php
if (isset($_POST['keluar'])) {
	session_destroy();
	header("Location:isi.php");
}
 ?>
