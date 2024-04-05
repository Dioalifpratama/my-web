<?php
session_start();
$username=$_SESSION['username'];
$db=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("akademik") or die(mysql_error());
$hasil=mysql_query("SELECT * FROM tab_user where username='$username'") or die(mysql_error());
//menyimpan record
$record=mysql_fetch_array($hasil);
//menampilkan data

if(!($_SESSION['username'])) {
header ("Location:../index.php");
}else{
}
	?>
<!DOCTYPE HTML>
<html>
<head>
<title>STKIP Pasundan Cimahi</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="../js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/notif.css" rel='stylesheet' type='text/css' />

<link href="../css/css-content.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link rel="shortcut icon" href="../images/logo-header.png" type="image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="../css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="../js/menu_jquery.js"></script>
</head>
<script src="../js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<script type="text/javascript" src="../js/jquery.jendela.js"></script>
<script type="text/javascript" src="../js/script.jendela.js"></script>
 <script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
 <link href="../css/magnific-popup.css" rel="stylesheet" type="text/css">
 <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>    
<!----kalender -------->
  <link rel="stylesheet" href="../css/clndr.css" type="text/css" />
  <script src="../js/underscore-min.js"></script>
  <script src= "../js/moment-2.2.1.js"></script>
  <script src="../js/clndr.js"></script>
  <script src="../js/site.js"></script>
  <!----end kalender-------->
   
<body>
<!-- header_top -->
<div class="top_bg">
<div class="container">
<div class="header_top">
	<div class="top_left">
	<h2>STKIP Pasundan Cimahi</h2>
	</div>
	<div class="top_right">
		<ul>
		
		<li><a href="#">Call Us :(022)6630345</a></li>|
			
		
				<li class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span><img src="../images/pick.jpg" width="20px" height="20px">&nbsp;<?php echo $record[1]; ?> <img src="../images/bot.png"></span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email"><a href="#"><font color="#727272">Pengaturan <img src="../images/icon-pengaturan.png"></font></a></label>
						                    
											<img src="../images/hr.png" width="120">
						                    
						                            <label for="Keluar"><a href="../proses/logout.php"><font color="#727272">Keluar<img src="../images/logout.png"></font></a></label>
						                     </fieldset>
											 </fieldset>
						                     
							 </form>
				        </div>
			      </div>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
</div>
<!-- header -->

		<!-- start header_right -->
		<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="home.php"><img src="../images/logo-baner.png" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
				<div class="create_btn">
		
		</div>
		
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="home.php">Home</a></li>
			
			<li ><a class="color4" href="download.php">Download</a>
				
				</li>				
				<li><a class="color5" href="mahasiswa.php">Mahasiswa</a>
				
				</li>
				<li><a class="color6" href="jadwal.php">Jadwal</a>
				
				</li>
				<li><a class="color7" href="nilai.php">Nilai</a>
				
				</li>
				<li><a class="color8" href="#">Grup</a>
			
				</li>
				
		  </ul>
	</div>
</div>
</div>
<!-- content -->

<div class="container">
<div class="main">
	
	<?php
include ("../proses/koneksi.php");
 
$data = mysql_query("select * from upload");
	$no=1;

?>	
		
			
			<!-- content-post -->
			<div class="container-posting">
	<div class="content-posting">		
	</div> 
	<div class="product">					  
								
		                       <div class="prod1-desc"><!--mulai form upload-->
							   <div class="quote_button">

							<a class="popup-with-zoom-anim"  href="#small-dialog">Tambah File &nbsp;<img src="../images/tambah.gif"></a>
                  	 				<div id="small-dialog" class="mfp-hide">
					                       <div class="priceing-tabel">
												<div class="priceing-header">
													<h3>Upload File</h3>
	                    <p><div class="registration_form">
		 <!-- Form -->
		<?PHP
include("../proses/koneksi.php");
?>
			<form enctype="multipart/form-data" method="post"> 
								<span>
									
								</span>
								
								<span> File:
                <span><input type="file" name="berkas" value="berkas"/>
						</span></span><br><span>keterangan:</span>
								<span><input type="text" name="keterangan" > </textarea></span>
									<div class="clear"></div>
								
									<span><input type="submit" value="publish"/></span>
							</form>
				<!-- proses upload -->
				<?php
include ("../proses/koneksi.php");
 
if ($_POST)
{
   $filedata = addslashes(fread(fopen($_FILES['berkas']['tmp_name'], 'r'),
               $_FILES['berkas']['size']));
   $tipe  = $_FILES['berkas']['type'];
   $ukuran = $_FILES['berkas']['size'];
   $nama_file = $_FILES['berkas']['name'];
   $keterangan = $_POST['keterangan'];
 
   $result = mysql_query ("insert into upload values ('','$keterangan','$tipe','$filedata','$nama_file',$ukuran)") 
                            or die(mysql_error());
 
   if ($result) echo "Upload sukses";
}
?>					
			
			<!-- /Form --></div>
											</div>
										</div></div>
							   <!--end form upload-->
		                           
		                           <p class="product_descr"><table style='margin-top:2px;background:white' class="table table-bordered table-striped table-hover"><center>
   <tr>
      <td background="../images/head-list.jpg"><font color="white">No</font></td>
      <td style="size:20px" background="../images/head-list.jpg"><font color="white">Nama file </font></td>
      <td style="size:60px" background="../images/head-list.jpg"><font color="white">Deskripsi</font></td>
      <td style="size:20px" background="../images/head-list.jpg"><font color="white">Download</font></td>
   </tr>
   <tbody>
   <?php while ($row =mysql_fetch_assoc($data)) { ?>
   <tr>
         <td><?php echo $no; ?></td>
      <td><?php echo $row['filename'] ?></td>
      <td><?php echo $row['deskripsi'] ?></td>
      <td><a href="../proses/download.php?id=<?php echo $row['id'] ?>">Download</a></td>
   </tr>
  <?php $no++; }?></tbody>
</table></p>												 
							   </div>
							  <div class="clearfix">	</div>						  		
					      </div></center> 
	<footer-post>
		
	</footer> <!-- /Footer -->
</div> 
</div></div><br>
<!-- footer_top -->
<div class="clear"></div>
		<!-- start span_of_2 -->
	<div class="span_of_2">
		<div class="span1_of_2">
			
			<p> Call us: (022)6630345</p>
			<div class="social-icons">
				     <ul>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        
					</ul>
			</div>
		</div>
		
		<div class="clearfix"></div>
		</div>
  </div>
</div>
<!-- footer -->
<div class="footer">
 <div class="container">
	<div class="copy">
		<p class="link">&copy; <a href="#"> STKIP Pasundan Cimahi</a></p>
	</div>
 </div>
</div>
</body>
</html>

