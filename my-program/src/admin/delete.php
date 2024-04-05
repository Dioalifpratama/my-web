
<?php
$koneksi = mysql_connect("localhost", "root", "") or die("Gagal konek ke server.");
mysql_select_db("akademik") or die("Gagal membuka database.");
$id = $_GET['id'];
mysql_query("delete from tab_jadwal where id='$_GET[id]'") or die("Gagal menghapus data.");
mysql_close($koneksi);
?>
<script type="text/javascript">
		alert("berhasil menghapus...!!!");
	</script>
	<?php
	echo "<meta http-equiv='refresh' content='0; url=../admin/jadwal.php'>";
?>
