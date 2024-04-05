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
						<div id="loginContainer"><a href="#" id="loginButton"><span><img src="../images/icon-user.png" width="8" hight="8">&nbsp;<?php echo $record[1]; ?> <img src="../images/bot.png"></span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email"><a href="#"><font color="#727272">Pengaturan <img src="../images/icon-pengaturan.png"></font></a></label>
						                    
											<img src="../images/hr.png" width="120">
						                    
						                            <label for="Keluar"><a href="#"><font color="#727272">Keluar<img src="../images/logout.png"></font></a></label>
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
			<img src="../images/fs14.jpg" width="60px" height="80px" float= "right"/>  
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
	
	
		
			
			<!-- content-post -->
				<div class="container-posting">
	<div class="content-posting">		
	</div> 
	<div class="product">					  
							
		                       <div class="prod1-desc">
		                           
		                           <p class="product_descr"><div class="quote_button">

							<a class="popup-with-zoom-anim"  href="#small-dialog">Tambah Nilai &nbsp;<img src="../images/tambah.gif"></a>
                  	 				<div id="small-dialog" class="mfp-hide">
					                       <div class="priceing-tabel">
												<div class="priceing-header">
													<h3>Update Nilai Mahasiswa</h3>
	                    <p><div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="contact.php" method="post">
				<div>
					<label>
						<input placeholder="NIM:" type="text" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="nama :" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Jurusan:" type="email" tabindex="3" required>
					</label>
				</div>
									
				<div>
					<label>
						<input placeholder="Mata kuliah:" type="text" tabindex="4" required>
					</label>
				</div>	
				<div>
					<label>
						<input placeholder="Kelas:" type="text" tabindex="4" required>
					</label>
				</div>		
				<div>
					<label>
						<input placeholder="Semester:" type="text" tabindex="4" required>
					</label>
				</div>		
				<div>
					<label>
						<input placeholder="Dosen:" type="text" tabindex="4" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Huruf:" type="text" tabindex="4" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Angka:" type="text" tabindex="4" required>
					</label>
				</div>
				<div>
					<input type="submit" value="Tambah" id="register-submit">
				</div>
				
			</form>
			<!-- /Form --></div>
											</div>
										</div>
                 				 </div>             <table style='margin-top:5px;background:white' class="table table-bordered table-striped table-hover">
<hr><center>

   <tr>
      <td background="../images/sidebarbg.png">No </td>
      <td background="../images/sidebarbg.png">NIM</td>
      <td background="../images/sidebarbg.png">Nama</td>
      <td background="../images/sidebarbg.png">Jurusan</td>
      <td background="../images/sidebarbg.png">Mata kuliah</td>
	  <td background="../images/sidebarbg.png">Kelas</td>
      <td background="../images/sidebarbg.png">Semester</td>
	  <td background="../images/sidebarbg.png">Dosen</td>
	  <td background="../images/sidebarbg.png">Huruf</td>
	  <td background="../images/sidebarbg.png">Angka</td>
	    <td background="../images/sidebarbg.png">Aksi</td>
   </tr>
   <tbody>
   <?php while ($row =mysql_fetch_assoc($data)) { ?>
   <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['filename'] ?></td>
	  <td><?php echo $row['filename'] ?></td>
      <td><?php echo $row['filetype'] ?></td>
      <td><?php echo $row['filesize'] ?></td>
      <td><?php echo $row['deskripsi'] ?></td>
	  <td><?php echo $row['filename'] ?></td>
	  <td><?php echo $row['filename'] ?></td>
	  <td><?php echo $row['filename'] ?></td>
	  <td><?php echo $row['filename'] ?></td>
      <td><a href="download.php?id=<?php echo $row['id'] ?>">E/H</a></td>
   </tr>
   <?php } ?></tbody>
</table></p>												 
							   </div>
							  <div class="clearfix">	</div>						  		
					      </div></center> 
	<footer-post>
		
	</footer> <!-- /Footer -->
</div></div></div></div><br>
<!-- footer_top -->

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
