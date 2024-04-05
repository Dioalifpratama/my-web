
<?php
$koneksi = mysql_connect("localhost", "root", "") or die("Gagal konek ke server.");
mysql_select_db("akademik") or die("Gagal membuka database.");
$user_id = $_GET['user_id'];
mysql_query("delete from tab_user where user_id='$_GET[user_id]'") or die("Gagal menghapus data.");
mysql_close($koneksi);
?>
<script type="text/javascript">
		alert("berhasil menghapus...!!!");
	</script>
	<?php
	echo "<meta http-equiv='refresh' content='0; url=../admin/mahasiswa.php'>";
?>
