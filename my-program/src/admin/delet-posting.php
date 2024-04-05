<?php
include('koneksi.php');

$query=mysql_query("delete from tbl_info where id_hubungi='$_GET[id_hubungi]'") or die (mysql_error());
	echo "<meta http-equiv='refresh' content='0; url=../admin/home.php'>";

?>