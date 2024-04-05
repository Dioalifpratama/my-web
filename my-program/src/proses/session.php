<?php
session_start();
$db = mysql_connect("localhost","root","") or DIE("koneksi ke database gagal");
mysql_select_db("akademik") or die(mysql_error());
if (trim($_POST[jenis_user])=='pegawai') {

//$pass=md5($_POST[password]);
$login = mysql_query("SELECT * FROM tab_user WHERE username='$username' AND password='$password' AND blokir='N'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0) {
session_start();
session_register("namauser");
session_register("namalengkap");
session_register("passuser");
session_register("leveluser");

$_SESSION[namauser] = $r[id_user];
$_SESSION[namalengkap] = $r[nama_lengkap];
$_SESSION[passuser] = $r[password];
$_SESSION[leveluser] = $r[level];

header('location:../admin/home.php?module=home');
}
else
{
echo "<link href=config/adminstyle.css rel=stylesheet type=text/css>";
echo "<center>LOGIN GAGAL! <br>
Username atau Password Anda tidak benar.<br>
Atau Account Anda sedang diblokir.<br>";
echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}
}

if (trim($_POST[jenis_user])=='dosen') {
//$pass=md5($_POST[password]);
$login = mysql_query("SELECT * FROM anggota WHERE username='$username' AND password='$password'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0) {
session_start();
session_register("namauser");
session_register("namalengkap");
session_register("passuser");
//session_register("leveluser");

$_SESSION[namauser] = $r[kode_dosen];
$_SESSION[namalengkap] = $r[nama_dosen];
$_SESSION[passuser] = $r[password];
//$_SESSION[leveluser] = $r[level];

header('location:../mahasiswa/home.php?module=home');
}
else
{
echo "<link href=config/adminstyle.css rel=stylesheet type=text/css>";
echo "<center>LOGIN GAGAL! <br>
Username atau Password Anda tidak benar.<br>
Atau Account Anda sedang diblokir.<br>";
echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}
}

if (trim($_POST[jenis_user])=='mahasiswa') {
$pass=md5($_POST[password]);
$login = mysql_query("SELECT * FROM mahasiswa WHERE nim='$username' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0) {
session_start();
session_register("namauser");
session_register("namalengkap");
session_register("passuser");
//session_register("leveluser");

$_SESSION[namauser] = $r[nim];
$_SESSION[namalengkap] = $r[nama];
$_SESSION[passuser] = $r[password];
//$_SESSION[leveluser] = $r[level];

header('location:siswa/index.php?module=home');
}
else
{
echo "<link href=config/adminstyle.css rel=stylesheet type=text/css>";
echo "<center>LOGIN GAGAL! <br>
Username atau Password Anda tidak benar.<br>
Atau Account Anda sedang diblokir.<br>";
echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}
}
?>