<?php
include('koneksi.php');
$kode_dosen = $_POST['kode_dosen']; 
$nama = $_POST['nama']; 
$th_ajar = $_POST['th_ajar'];
$smester = $_POST['smester'];
$mata_kul =  $_POST['mata_kul']; 
$jurusan = $_POST['jurusan']; 
$kelas = $_POST['kelas']; 
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesa1 = $_POST['jam_selesai'];

mysql_query("insert into tab_jadwal(kode_dosen,nama,th_ajar,smester,mata_kul,jurusan,kelas,hari,jam_mulai,jam_selesai) values ('$kode_dosen','$nama','$th_ajar','$smester','$mata_kul','$jurusan','$kelas','$hari','$jam_mulai','$jam_selesai')");
?>
	<script type="text/javascript">
		alert("berhasil menambahkan...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=../admin/jadwal.php'>";
?>