<?php
session_start();
$username=$_SESSION['username'];
$db=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("akademik") or die(mysql_error());
$hasil=mysql_query("SELECT * FROM anggota where username='$username'") or die(mysql_error());
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

  </head>
  
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
						<div id="loginContainer"><a href="#" id="loginButton"><span><img src="../images/pick.jpg" width="20px" height="20px">&nbsp;<?php echo $record[1]; ?>&nbsp;<img src="../images/bot.png"></span></a>
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
		</div><br>
		<!-- start header_right -->
		<div class="header_right">
		<div class="create_btn">
			<!--gambar di sini-->
		</div>
		
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clear"></div><br>
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
<div class="women_main">
	<!-- start sidebar -->
	<div class="col-md-3">
	  <div class="w_sidebar">
		<div class="w_nav1">
			<ul>
				<li><div class="foto-profil"><img src="../images/pick.jpg" class="img-responsive " alt=""/></div></li>
				<li><a href="#"><font color="#00405d"><B><?php echo $record[1]; ?></B></font></a></li>
				<li><a href="#">Sunting Profil</a></li>
				
			</ul>	
		</div>
		
		<section  class="sky-form">
					<h4></h4>
						<div class="row1 scroll-pane">
						<div class="judul"><b>Tentang</b></div><br>
							<div class="col col-4">
								
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>kutis</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>churidar kurta</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>salwar</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>printed sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>	
							</div>
						</div>
		</section>
		<section  class="sky-form">
					<h4></h4>
						<div class="row1 scroll-pane">
						<div class="judul"><b>Foto</b></div><br>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>vishud</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>amari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>																								
							</div>
						</div>
		</section>
		
		
	</div>
   </div>
</div>
<!-- sidebar right-->
<div class="col-md-right">
	  <div class="w_sidebar">
		<div class="w_nav1">
			<div class="judul2"><b>Groups</b></div><br>
			<ul>
				<li><a href="women.html">PJKR</a></li>
				<li><a href="#">Bahasa Inggris</a></li>
				<li><a href="#">PPKN</a></li>
				<li><a href="#">Magiste IPS</a></li>
			
			</ul>	
		</div>
		
		<section  class="sky-form">
					<h4></h4>
						<div class="row1-2 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>kutis</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>churidar kurta</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>salwar</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>printed sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>	
							</div>
						</div>
		</section>
		
	</div>
   </div>
		<!-- content-post -->
				<div class="container-posting2">
	<div class="content-posting2">		
	</div> 
	<div class="product">					  
							
		                       <div class="prod1-desc">
		                           
		                           <p class="product_descr">

							
                  	 				<div class="registration_form">
                 				 </div>             <p>
<div class="new_posts">
						<h3>Posting Berita Baru</h3>
						<div class="vertical_post">
							<form method="post" action="../proses/proses-berita.php">
								
								<span>
									
								</span>
								<span><td><input name="nama" type="hidden" id="nama" value="<?php echo $record[1]; ?>" /></td></span>
								<span><textarea type="text" name="pesan" size="50" placeholder="Isi Posting:" required > </textarea></span>
								
									<br>
									<span><input type="submit" value="publish" required /></span>
									<div class="clear"></div>
							</form>
						</div>
	                </div>
								 </p>												 
							  
							  <div class="clearfix">	</div>	
			  
					      </div></center> 
	<footer-post>
			
	</footer> 
</div></div><br>
<!-- /Footer -->
 <?php
$batas=5;
$no=1;
$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$no=$posisi+1;
$query=mysql_query("select * from tbl_info order by id_hubungi DESC limit $posisi,$batas");
while($r=mysql_fetch_array($query))
{
echo"<div class='container-posting2'>
	<div class='content-posting2'>
		</div> 
	 <div class='product'>
								<div class='product-img'>
		                           <img src='../images/pick.jpg' class='img-responsive ' alt=''/>
		                       </div>
		                       <div class='prod1-desc'>
		                           <h5><B><a class='product_link' href='#'>$r[nama]</a></B></h5>
		                           <p class='product_descr'>$r[pesan]</p>									
							   </div>
							   <div class='clearfix'></div>
					     
						 
						 <div class='clearfix'></div>
				     </div>
	<footer-post>
		<ul class='s_icons'>  
					<li><a href='#'><img src='../images/s_icon1.png' alt=''></a></li>
					<li><a href='#'><img src='../images/s_icon2.png' alt=''></a></li>
					<li><a href='delete-status.php?id_hubungi='$row[id_hubungi]''><img src='../images/s_icon3.png' alt=''></a></li>
					<li><span></b>&nbsp;&nbsp;</span></li>
				</ul>
</div> <br>";
}
?>
</div>	
	
	
<!-- footer_top -->
<div class="footer_top">
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
</div>
</body>
</html>