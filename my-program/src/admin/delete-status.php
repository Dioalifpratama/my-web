
<?php
$koneksi = mysql_connect("localhost", "root", "") or die("Gagal konek ke server.");
mysql_select_db("akademik") or die("Gagal membuka database.");
$id_hubungi = $_GET['id_hubungi'];
mysql_query("delete from tbl_info where id_hubungi='$_GET[id_hubungi]'") or die("Gagal menghapus data.");
mysql_close($koneksi);
?>
<script type="text/javascript">
		alert("berhasil menghapus...!!!");
	</script>
	<?php
	echo "<meta http-equiv='refresh' content='0; url=../admin/home.php'>";
?>
