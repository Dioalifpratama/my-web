<?php
session_start();
include "../proses/koneksi.php";
error_reporting(0);
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){include "tidak-ada-akses.php";}
else{
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
<script src="../js/easyResponsiveTabs.js"></script>
</head>


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
<!----kalender -------->
  <link rel="stylesheet" href="../css/clndr.css" type="text/css" />
  <script src="../js/underscore-min.js"></script>
  <script src= "../js/moment-2.2.1.js"></script>
  <script src="../js/clndr.js"></script>
  <script src="../js/site.js"></script>
  <!----end kalender-------->
  </head>
  <?php
$sql = mysql_query("SELECT * FROM tab_user WHERE id= '$_SESSION[id]'");
while ($data = mysql_fetch_array($sql))
{
$user_nama = $data['user_nama'];
}
?>
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
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" action="../proses/login-proses.php" method="post">
								
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="username"><font color="grey"></font> </label>
						                         <input type="text" name="username" id="nama" placeholder="Username" required />
						                    </fieldset>
						                    <fieldset>
						                            <label for="password"><font color="grey"></font></label>
						                            <input type="password" name="password" id="password" placeholder="Password" required />
						                     </fieldset>
						                    <input type="submit" id="login" value="Masuk">
						                	
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
		
		</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			
				
		  </ul>
	</div>
</div>
</div>
<!-- content -->

<div class="container">
<div class="main">
	
	<div class="container-posting">
	<!-- Header -->
	
	<!-- /Header -->
	
	<div class="content-posting">
		
	</div> <!-- /Content -->
	<div class="product">
						  
								<div class="product-img">
		                           <img src="images/fs14.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                       
		                           <p class="product_descr"> <font color="red"><h3><a href="../index.php">Login</a> terlebih dahulu untuk melanjutkan!!!</h3></font></p>									
							 
							   </div>
							  <div class="clearfix">	</div>
							  
			
					      </div>
	<footer-post>
	
	</footer> <!-- /Footer -->
</div>
		
			
			<!-- content-post -->
			<div class="span_of_3"><!-- start span_of_3 -->
		<div class="span1_of_3"><!-- start span1_of_3 -->
	        
	        </div>
	        <div class="clear"></div>
			<!-- end-content-post-->
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
</html><?php } ?>