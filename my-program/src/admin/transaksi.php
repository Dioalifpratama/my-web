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
<title>SHIL.STORE</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="../js/jquery-1.11.1.min.js"></script>
<!-- Custom desain -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/notif.css" rel='stylesheet' type='text/css' />

<link href="../css/css-content.css" rel='stylesheet' type='text/css' />
<!-- Custom desain -->
<link rel="shortcut icon" href="../images/icon.png" type="image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- mulai menu -->
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
		<h2>Shil Store Online Shop</h2>
	</div>
	<div class="top_right">
		<ul>
		
		<li><a href="#">Call Us : +62 89629756872</a></li>|
			
		
			<li class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span><img src="../images/pick.jpg" width="20px" height="20px">&nbsp;<?php echo $record[1]; ?>&nbsp;<img src="../images/bot.png"></span></a>
						    <div id="loginBox">                        
						        <form id="loginForm">
						                <fieldset id="body">
						                	
						                    <label for="email"><a href="#"><font color="#727272">Pengaturan <img src="../images/icon-pengaturan.png"></font></a></label>
											<img src="../images/hr.png" width="120">
						                     <label for="Keluar"><a href="../proses/logout.php"><font color="#727272">Keranjang &nbsp;<img src="../images/bag.png" width="23px"></font></a></label>
											 <label for="Keluar"><a href="../proses/logout.php"><font color="#727272">Notifikasi &nbsp;<img src="../images/notif.png" width="23px"></font></a></label>
											 <label for="Keluar"><a href="../proses/logout.php"><font color="#727272">Pesan &nbsp;<img src="../images/message2.png" width="20px"></font></a></label>
											   <label for="Keluar"><a href="../proses/logout.php"><font color="#727272">Keluar<img src="../images/logout.png"></font></a></label>
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
			<a href="home.php"><img src="../images/logoatas.png" width="40%" alt=""/> </a>
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
			<li><li class="active grid"><a class="color1" href="home.php">Home</a></li>
			<li><a class="color4" href="transaksi.php">Transaksi</a>
			<li class="grid"><a class="color2" href="#">Tentang Kami</a></li>
			<li><a class="color3" href="#">Produk</a>
			<li class="grid"><a class="color4" href="#">Bisnis</a>
			<li><a class="color7" href="#">Promo</a>
			<li><a class="color2" href="#">Layanan</a>
			<li><a class="color6" href="#">Testimoni</a>
			<li><a class="color5" href="#">Bantuan</a>
				
				
				
			
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
					<h4></h4><br><div class="judul"><b>Tentang</b></div>
						<div class="row1 scroll-pane">
						
							
							<div class="col col-4">
								<label ><i><span><p>Tempat Tinggal:</p></span></i>Padalarang, kp.blok salim rt.02/03</label>
								<label ><i><span><p>Kota Asal:</p></span></i>Yala, thailand</label>
								<label ><i><span><p>Pekerjaan:</p></span></i>Direktur</label>
								<label ><i><span><p>Tanggal Lahir:</p></span></i>16 Juli 1997</label>
								<label ><i><span><p>Jenis Kelamin:</p></span></i>Laki-laki</label>
								<label ><i><span><p>Agama:</p></span></i>Islam</label>
								
							</div>
						</div>
		</section>
		<section  class="sky-form">
					<h4></h4><br><div class="judul"><b>Foto</b></div>
						<div class="row1-4 scroll-pane">
						
							<div class="col col-4">
										<img src="../images/pick.jpg" width="31%"/>&nbsp;<img src="../images/pick.jpg" width="31%"/>&nbsp;<img src="../images/pick.jpg" width="31%"/>																					
							</div>
						</div>
		</section>
		
		
	</div>
   </div>
</div>

		<!-- content-post -->
				<div class="container-posting-transaksi">
	<div class="content-posting2">		
	</div> 
	<div class="product">					  
							
		                       <div class="prod1-desc">
		                           
		                           <p class="product_descr">

			<ul class="megamenu skyblue">
			<li><li class="active grid"><a class="color1" href="#">Belum Dibayar</a></li>
			<li><a class="color4" href="#">Belum Dikirimkan</a>
			<li class="grid"><a class="color2" href="#">Belum Diterima</a></li>
			<li><a class="color3" href="#">Selesai</a>
			<li class="grid"><a class="color4" href="#">Batal</a>	
			 </ul>   
									
								 </p>												 
							  
							  <div class="clearfix">	</div>	
			  
					      </div></center> 
	<footer-post>
			
	</footer> 
</div></div><br>
<!-- /Footer -->
</div>	
	
	
<!-- footer_top -->
<div class="footer_top">
		<!-- start span_of_2 -->
	<div class="span_of_2">
		<div class="span1_of_2">
			
			<p> Call us: +62 89629756872</p>
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
		<p class="link">&copy; <a href="#"> SHIL.STORE</a></p>
	</div>
 </div>
</div>
</div>
</body>
</html>