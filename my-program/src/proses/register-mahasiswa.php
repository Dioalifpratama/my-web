<?php
include('koneksi.php');
$nim = $_POST['nim']; 
$username = $_POST['username']; 
$nama = $_POST['nama'];
$ttl =  $_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal']; 
$jk = $_POST['jk']; 
$email = $_POST['email'];
$password = $_POST['password'];
$jurusan = $_POST['jurusan'];
$poto = $_POST['poto'];
mysql_query("insert into anggota(nim,username,nama,ttl,jk,email,password,jurusan,poto) values ('$nim','$username','$nama','$ttl','$jk','$email','$password','$jurusan','$poto')");
?>
	<script type="text/javascript">
		alert("pendaftaran berhasil...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
?>