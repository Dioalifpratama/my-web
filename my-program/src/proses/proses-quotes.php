<?php
include('koneksi.php');
$quotes=$_POST['quotes'];
mysql_query("insert into tbl_status(quotes) values ('$quotes')");
?>
	<script type="text/javascript">
		alert("sukses..!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=../admin/home.php'>";
?>