<?php
session_start();
$db = mysql_connect("localhost","root","") or DIE("koneksi ke database gagal");
mysql_select_db("akademik") or die(mysql_error());
$username =mysql_real_escape_string($_POST['username']);
$password =mysql_real_escape_string($_POST['password']);
$hasil = mysql_query("SELECT * FROM tab_user WHERE username='$username' and password='$password'") or die(mysql_error());
$record=mysql_fetch_array($hasil);
$jmldata =mysql_num_rows($hasil);
if ($jmldata!=0){
$_SESSION['username'] = $record[1];
header("location:../admin/home.php");
}
else {
header("location:../index.php");
}

?>
