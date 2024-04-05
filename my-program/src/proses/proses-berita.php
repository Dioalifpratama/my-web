<?php
include('koneksi.php');
$n=$_POST['nama'];
$p=$_POST['pesan'];
mysql_query("insert into tbl_info(nama,pesan) values ('$n','$p')");
?>
	<script type="text/javascript">
		alert("informasi Terkirim...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=../admin/home.php'>";
?>