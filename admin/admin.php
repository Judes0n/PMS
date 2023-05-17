<?php session_start();
$_SESSION['srch']=0;
if(!isset($_SESSION['log']))
{
	if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
		header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
		die ("<center><h1>ACCESS DENIED!</h1><hr><br><br><b>This Page is Protected,<br><a href='../register.html'>Login</a> to Access.<b><center>");
		}
}
include('../php/connection.php');
$sql="SELECT a_name FROM admins WHERE a_id=1";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$aname=$row['a_name'];
if(isset($_GET['Submitbtn']))
{ 

  if(isset($_GET['key']))
  {
	$_SESSION['srch']=1;
	$_SESSION['key']=$_GET['key'];
	?><script>top.location.replace('admin.php');</script>	<?php
  }
  else
  {
	$_SESSION['srch']=1;
	?> <script>top.location.replace('admin.php');</script> <?php
  }
 
 
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Presentation Matrimony Service | ADMIN PAGE </title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Conjugality web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="addstyle.css">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Economica:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Exo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body> 

<div class="Main-agile">
	<!-- banner -->
	<div class="agile-top">
		<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search Here......." required="">
						<input type="submit" value="Send">
					</form>
				</div>
		</div>
		<div class="ph-agile">
			<p><i class="fa fa-phone" aria-hidden="true"></i><span>+00 28 28 28 85</span></p>
		</div>
		<div class="clearfix"></div>

		<div class="sub-agile">
			<div class="col-md-6 logo" id="top">
				<h1><a href="index.html">HOME</a></h1>
			</div>
			<div class="col-md-6 nav-w3l">
			<!-- navigation --> 
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="header-right">
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">					
						<ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="#admin" ><span>H</span><span>O</span><span>M</span><span>E</span></a></li>						    
						<li><a data-target="#feeds" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#feeds"><span>F</span><span>E</span><span>E</span><span>D</span><span>S</span></a></li>								
						<li><a data-target="#payment" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#payment"><span>M</span><span>E</span><span>M</span><span>B</span><span>E</span><span>R</span><span>S</span><span>H</span><span>I</span><span>P</span><span>S</span></a></li>								
						<li><a href="../php/logout.php" class="link link--yaku scroll" data-target="../php/logout.php" onclick="logout();"><span>L</span><span>O</span><span>G</span><span>O</span><span>U</span><span>T</span></a></li>							
						</ul>		
						<div class="clearfix"> </div>
					</div><!-- //navigation -->
			</div>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
			<!-- banner-text -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>
							<div class="w3layouts-banner-top banner">
							<div class="w3l-overlay">
								<div class="container">
									<div class="agileits-banner-info">
										<h4>WELCOME</h4>
										<h3>Presentation Matrimony</h3>
										<p>We Will Find The 'Chosen One' For You</p>
										<h5><a href="#" class="view rew3" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Learn More</a></h5>
									</div>	
								</div>
							</div>
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top banner-2">
							<div class="w3l-overlay">
								<div class="container">
									<div class="agileits-banner-info">
										<h4>WELCOME</h4>
										<h3>Presentation Matrimony</h3>
										<p>Let Us Help You</p>
										<h5><a href="#" class="view rew3" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Learn More</a></h5>
									</div>	
								</div>
							</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<!-- //banner-text -->
			</div>
			
		<div class="header">
			<div class="social-w3">
				<div class="main">
								<ul>
									<li class="f1">
										<a href="https://www.facebook.com/profile.php?id=100083968672423" class="hvr-grow"><i class="fa fa-facebook f1" aria-hidden="true"></i></a>
									</li>
									<li class="f2">
										<a href="https://mail.google.com/mail/?view=cm&source=mailto&to=presentation.matrimony2002@gmail.com" class="hvr-grow"><i class="fa fa-google f2" aria-hidden="true"></i></a>
									</li>
									<li class="f3">
										<a href="https://twitter.com/Pmsmatrimony" class="hvr-grow"><i class="fa fa-twitter f3" aria-hidden="true"></i></a>
									</li>
									<li class="f4">
										<a href="https://www.instagram.com/presentation_matrimony" class="hvr-grow"><i class="fa fa-instagram f4" aria-hidden="true"></i></a>
									</li>
									<!--<li class="f5">
										<a href="#" class="hvr-grow"><i class="fa fa-dribbble f6" aria-hidden="true"></i></a>
									</li>-->
								</ul>
				</div>
			</div>
		</div>
</div>

						<!-- Modal5 -->
						<div class="modal fade" id="feeds" tabindex="-1" role="dialog" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Presentation Matrimony</h4>
											<h5>FeedBacks</h5>
											<iframe src="feeds.php" height="300px" width="100%"></iframe>								
									</div>
								</div>
						
							</div>
				        </div>
						<!-- //Modal5 -->
						<!-- Modal6 -->
						<div class="modal fade" id="payment" tabindex="-1" role="dialog" >
							<div class="modal-dialog modal-lg">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Presentation Matrimony</h4>
											<h5>Memberships</h5>
											<iframe src="membership.php" height="600px" width="100%"></iframe>								
									</div>
								</div>
						
							</div>
				        </div>
						<!-- //Modal6 -->




		<!--admin actions-->
		<div class="wrapper">

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<h1><center>Welcome, <a title="EDIT ADMIN PROFILE" href="profile/profile.php"><b><?php echo $aname; ?></b></a> to Presentation Matrimony Service Admin Page</center></h1>
			<hr>
			<h4><center>You Are Given All Administrative Privileges to Access All User Details</center></h4>
			<br>
			<hr>
			<br>
			<h3><center>You Can See All User Applications Here,<br>Use Search to Find a Specific User Application Either Search by Name OR Account ID</center></h3>
			<br>
			<form id="srch" action="" method="GET" >
			<center><input type=text id="key" name="key" placeholder="Search Here...." size="70"></center>
			<br>
			<center><button type="submit" id="Submitbtn" name="Submitbtn"><b>Search </b><span class="glyphicon glyphicon-search" aria-hidden="true"></i></button></center>
			<hr>
			<center><iframe id="table" name="table" src="./table.php" width="100%" scrolling="no"  frameBorder="0"></iframe></center>
			 
			</div>
			
</form>

	<!-- map 
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d694.1706498609888!2d76.25255525554228!3d10.195090777857917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b081b2143a6ef31%3A0x52e81b9b38054c44!2sPresentation%20College%20Of%20Applied%20Science%20(PCAS)!5e0!3m2!1sen!2sin!4v1659629552351!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<div class="map-pos">
			<h3>ADDRESS</h3>
			<p>Manancherikunnu,Puthenvelikara</p>
			<p>Ernakulam,Kerala.</p>
			<p>Call : 123 456 7890</p>
			<p><a href="https://mail.google.com/mail/?view=cm&source=mailto&to=presentation.matrimony2002@gmail.com">G-Mail for Enquiries</a></p>
		</div>
	</div>
	 -->
<!-- //main -->

<!-- Footer -->
<div class="footer w3ls">
	<div class="container">
			<div class="logo-fo">
				<h2><a href="index.html">Presentation Matrimony Services</a></h2>
			</div>
			<div class="ftr-menu">
				 <ul>
					<li><a class="scroll" href="#top">Top</a></li>
					<!--<li><a href="index.html/#about">About</a></li>
					<li><a href="index.html/#services">Services</a></li>
					<li><a href="index.html/#founders">Founders</a></li>
					<li><a href="index.html">Gallery</a></li>
					<li><a class="scroll" href="#contact">Contact Us</a></li>-->
				 </ul>
			</div>
			<div class="w3ls-social-icons-2">
				<a class="facebook" href="https://www.facebook.com/profile.php?id=100083968672423"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="https://twitter.com/Pmsmatrimony"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="https://mail.google.com/mail/?view=cm&source=mailto&to=presentation.matrimony2002@gmail.com"><i class="fa fa-google-plus"></i></a>
				<a class="instagram" href="https://www.instagram.com/presentation_matrimony/"><i class="fa fa-instagram"></i></a>
				<!--<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>-->
			</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="copyrights">
	<p>&copy; 2022 Presentation Matrimony Service. All rights reserved | Design by <a href="https://www.instagram.com/judes0n/">Judeson</a> & <a href="https://www.instagram.com/_hana_mehrin/">Hana</a></p>
</div>
<!-- //Footer -->

<!-- js-scripts -->			
	
		<!-- js -->
			<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="../js/bootstrap.js"></script>
			 <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->
	
		<!-- Baneer-js -->
			<script src="../js/responsiveslides.min.js"></script>
			<script>
			var iframe = document.getElementById("table");
    		iframe.onload = function()
				{
      			  iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
   				 }
						function logout()
					{
						top.location="../php/logout.php";
					}
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

		<!-- //Baneer-js -->

		<!-- start-smoth-scrolling -->
				<script type="text/javascript" src="../js/move-top.js"></script>
				<script type="text/javascript" src="../js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->

		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
					
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- //smooth scrolling-bottom-to-top -->

<!-- //js-scripts -->
</body>
</html>
