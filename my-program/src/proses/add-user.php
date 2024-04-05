<?php
include('koneksi.php');
$nim = $_POST['nim']; 
$username = $_POST['username']; 
$user_nama = $_POST['user_nama'];
$alamat = $_POST['alamat'];
$ttl =  $_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal']; 
$jk = $_POST['jk']; 
$email = $_POST['email'];
$password = $_POST['password'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$notelep = $_POST['notelep'];
$poto = $_POST['poto'];
mysql_query("insert into tab_user(nim,username,user_nama,alamat,ttl,jk,email,password,jurusan,angkatan,notelep,poto) values ('$nim','$username','$user_nama','$alamat','$ttl','$jk','$email','$password','$jurusan','$angkatan','$notelep','$poto')");
?>
	<script type="text/javascript">
		alert("berhasil menambahkan...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=../admin/mahasiswa.php'>";
?>