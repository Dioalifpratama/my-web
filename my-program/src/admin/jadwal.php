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

							<a class="popup-with-zoom-anim"  href="#small-dialog">Tambah Jadwal &nbsp;<img src="../images/tambah.gif"></a>
                  	 				<div id="small-dialog" class="mfp-hide">
					                       <div class="priceing-tabel">
												<div class="priceing-header">
													<h3>Update Jadwal Dosen</h3>
	                    <p><div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="../proses/add_jadwal.php" method="post">
			<div>
					<label>
						<input name="kode_dosen" placeholder="Kode Dosen:" type="text" tabindex="4" required>
					</label>
				</div>
				<div>
					<label>
						<input name="nama" placeholder="Nama Dosen:" type="text" tabindex="4" required>
					</label>
				</div>
				<div>
					
						<select name="th_ajar" id="registration_form" onchange="change_country(this.value)" class="frm-field required">
		            <option value="null">Tahun Ajaran </option>         
		            <option value="2015">2015</option>
		            <option value="2014">2014</option>
		            <option value="2013">2013</option>
		            <option value="2012">2012</option>
		            <option value="2011">2011</option>
		            <option value="2010">2010</option>
		            <option value="2009">2009</option>
		            <option value="2008">2008</option>
		            <option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
		            
		         </select></label>
					
				</div>
				<div>
					
						<select name="smester" id="registration_form" onchange="change_country(this.value)" class="frm-field required">
						   <option value="null">Semester </option>      
		            <option value="ganjil">Ganjil </option>         
		            <option value="genap">Genap</option>
		         </select></label>
					
				</div>
				<div>
					
						<select name="mata_kul" id="registration_form" onchange="change_country(this.value)" class="frm-field required">
		            <option value="null">Mata kuliah </option>         
		            <option value="jaringan">Jaringan</option>
		            <option value="software">Software</option>
		            <option value="hardware">Hardware</option>
		            <option value="web dinamis">Web dinamis</option>
		            <option value="kkpi">KKPI</option>
		            <option value="basis data">Basis data</option>
		         </select></label>
				</div>
				
				<div>
					<label>
						<div>
					
						<select name="jurusan" id="registration_form" onchange="change_country(this.value)" class="frm-field required">
		            <option value="null">Jurusan</option>         
		            <option value="rpl">RPL</option>
		            <option value="tkj">TKJ</option>
		            <option value="musik">Musik</option>
		            <option value="akuntansi">Akuntansi</option>
		            <option value="bahasa">Bahasa</option>
		         </select></label>
				</div>
					</label>
				</div>		
				<div>
					<label>
						<div >
				
						<select name="kelas" id="registration_form" onchange="change_country(this.value)" class="frm-field required">
		            <option value="null">Kelas </option>         
		            <option value="pagi">Pagi</option>
		            <option value="siang">Siang</option>
		            <option value="sore">Sore</option>
		         </select></label>
					</div>
					</label>
				</div>						
				<div>
					<label>
						<input name="hari" placeholder="Hari :" type="text" tabindex="4" required>
					</label>
				</div>	
				<div>
					<label>
						<input name="jam_mulai" placeholder="Dari jam: S/d :" type="text" tabindex="4" required>
					</label>
				</div>		
				
				
				<div>
					<input type="submit" value="Tambah" id="register-submit">
				</div>
				
			</form>
			<!-- /Form --></div>
											</div>
										</div>
                 				 </div>              <table style='margin-top:5px;background:white' class="table table-bordered table-striped table-hover">
<hr><center>

   <tr>
       <td background="../images/head-list.jpg"><font color="white">No</font></td>
      <td background="../images/head-list.jpg"><font color="white">Kode dosen</font></td>
      <td background="../images/head-list.jpg"><font color="white">nama</font></td>
      <td background="../images/head-list.jpg"><font color="white">tahun ajaran</font></td>
      <td background="../images/head-list.jpg"><font color="white">smester</font></td>
	  <td background="../images/head-list.jpg"><font color="white">mata kuliah</font></td>
      <td background="../images/head-list.jpg"><font color="white">jurusan</font></td>
	  <td background="../images/head-list.jpg"><font color="white">kelas</font></td>
	  <td background="../images/head-list.jpg"><font color="white">hari</font></td>
	  <td background="../images/head-list.jpg"><font color="white">mulai S/d</font></td>
	  <td background="../images/head-list.jpg"><font color="white">Aksi</font></td>
   </tr>
   <tbody>
   <?php
   $data=mysql_query ('select * from tab_jadwal');
	$no=1;
   while ($row =mysql_fetch_assoc($data)) { ?>
   <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row['kode_dosen'] ?></td>
	  <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['th_ajar'] ?></td>
      <td><?php echo $row['smester'] ?></td>
      <td><?php echo $row['mata_kul'] ?></td>
	  <td><?php echo $row['jurusan'] ?></td>
	  <td><?php echo $row['kelas'] ?></td>
	  <td><?php echo $row['hari'] ?></td>
	  <td><?php echo $row['jam_mulai'] ?></td>
      <td><a style="text-decoration:none" href="delete.php?id=<?php echo $row['id']; ?>"><img src="../images/delete.gif"></a></td>
	  
   </tr>
 	<?php $no++; }?></tbody>
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

