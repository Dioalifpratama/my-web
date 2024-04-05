<?php
include ("koneksi.php");
 
if ($_POST)
{
   $filedata = addslashes(fread(fopen($_FILES['berkas']['tmp_name'], 'r'),
               $_FILES['berkas']['size']));
   $tipe  = $_FILES['berkas']['type'];
   $ukuran = $_FILES['berkas']['size'];
   $nama_file = $_FILES['berkas']['name'];
   $keterangan = $_POST['keterangan'];
 
   $result = mysql_query ("insert into poto values ('','$keterangan','$tipe','$filedata','$nama_file',$ukuran)") 
                            or die(mysql_error());
 
   if ($result) echo "Upload sukses";
}
?>