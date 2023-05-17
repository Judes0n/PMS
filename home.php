<?php
session_start();
if( !isset($_SESSION['app_status']))
{
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
die ("<center><h1>ACCESS DENIED!</h1><hr><br><br><b>This Page is Protected,<br><a href='register.html'>Login</a> to Access.<b><center>");
}
}
require('php/extract.php');
$acc=$_SESSION['accid'];
$_SESSION['acc_id']=$acc;
$sql="SELECT stats FROM acc WHERE acc_id=$acc;";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res, MYSQLI_ASSOC);
$stat=$row['stats'];
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Presentation Matrimony Service | HOME</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Conjugality web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
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
			<p><i class="fa fa-phone" aria-hidden="true"></i>+91 999-6424-071</p>
		</div>
		<div class="clearfix"></div>

		<div class="sub-agile">
			<div class="col-md-6 logo" id="home">
				<h1><a href="#">HOME</a></h1>
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
							<li class="active"><a href="#home"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>										
							<?php if($stat==1){?>
							<li><a href="user/nest.php" onclick="nest();" class="link link--yaku scroll"><span>C</span><span>H</span><span>O</span><span>I</span><span>C</span><span>E</span><span>S</span></a></li>						
							<li><a data-target="#myModal6" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#myModal2"><span>R</span><span>E</span><span>S</span><span>P</span><span>O</span><span>N</span><span>S</span><span>E</span><span>S</span></a></li>
							<li><a href="user/imagesupld.php" class="link link--yaku scroll" onclick="redrct();"><span>M</span><span>Y</span><span>&nbsp;</span><span>I</span><span>M</span><span>A</span><span>G</span><span>E</span><span>S</span></a></li>
							<?php }?>
							<li><a href="acc.php" class="link link--yaku scroll" data-target="acc.php"onclick="Acc();"><span>M</span><span>Y</span><t> </t><span>A</span><span>C</span><span>C</span><span>O</span><span>U</span><span>N</span><span>T</span></a></li>	
							<li><a href="/php/logout.php" class="link link--yaku scroll" onclick="lgout();"><span>L</span><span>O</span><span>G</span><span>O</span><span>U</span><span>T</span></a></li>						
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
										<h5><a href="#" class="view rew3" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Learn More</a></h5>
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
										<h5><a href="#" class="view rew3" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Learn More</a></h5>
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
						<!-- Modal4 -->
						<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
													<div class="modal-dialog">
													<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h4>Presentation Matrimony</h4>
																	<h5>Let Us Help You</h5>
																	<video class="img-fluid" style="height: 320px; width:fit-content;" autoplay loop muted>
																	<source src="images/vid1.mp4" type="video/mp4" />
																	</video>
																	<span>Everyone is incomplete without their 'other half',Being on a quest for the fact is really Adventurous but is also a Baffling Task.Let Us Assist You in the Pursuit.We are a group of people determined to help you,our dearest clients.</span>
															</div>
														</div>
												
													</div>
												</div>
												<!-- //Modal4 -->

						<!-- Modal5 -->
						<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" style="width: 100%;" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Presentation Matrimony</h4>
											<h5>Let Us Help You</h5>
											
											<center><span>CONTACT & FEEDBACK</span></center>
											<iframe src="user/contact.php" width="100%" height="500px"></iframe>	
									</div>
								</div>
						
							</div>
				        </div>
						<!-- //Modal5 -->

						<!-- Modal6 -->
						<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" style="width: 100%;" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Presentation Matrimony Service</h4>
											<h5>See Who All Are Intrested in You </h5>
											
											<center><span>RESPONSES</span></center>
											<iframe src="user/viewresponse.php?accid=<?php echo $acc; ?>" width="100%" height="700px"></iframe>	
									</div>
								</div>
						
							</div>
				        </div>
						<!-- //Modal6 -->
						
					
<!-- //banner -->
<!-- PROFILES block -->
<iframe src="profileview/profile.php" id="iframe1" width="100%" scrolling="no"  frameBorder="0"  ></iframe>

<!--//PROFILES block end-->
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15707.593038410709!2d76.2460014491243!3d10.188917249791599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x52e81b9b38054c44!2sPresentation%20College%20Of%20Applied%20Science%20(PCAS)!5e0!3m2!1sen!2sin!4v1659888815784!5m2!1sen!2sin" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<div class="map-pos">
			<h3>ADDRESS</h3>
			<p>Manancherikunnu,Puthenvelikara</p>
			<p>Ernakulam,Kerala.</p>
			<p>Call : 123 456 7890</p>
			<p><a href="https://mail.google.com/mail/?view=cm&source=mailto&to=presentation.matrimony2002@gmail.com">G-Mail for Enquiries</a></p>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //map -->
<!-- //main -->

<!-- Footer -->
<div class="footer w3ls">
	<div class="container">
			<div class="logo-fo">
				<h2><a href="#">Presentation Matrimony Services</a></h2>
			</div>
			<div class="ftr-menu">
				 <ul>
					<li><a class="scroll" href="#home">Home </a></li>
					<li><a data-target="#myModal5" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#myModal">Contact</a></li>
					<li><a href="acc.php" onclick='Acc()'>My Account</a></li>
					<li><a data-target="#myModal6" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#myModal2">Responses</a></li>
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
	<p>&copy; 2022 Presentation Matrimony Service. All rights reserved | Design by <a href="https://www.instagram.com/judeson._/">Judeson</a> & <a href="https://www.instagram.com/_hana_mehrin/">Hana</a></p>
</div>
<!-- //Footer -->

<!-- js-scripts -->			
		<!-- js -->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->
	
		<!-- Baneer-js -->
			<script src="js/responsiveslides.min.js"></script>
			<script>	
						function nest()
						{
							window.top.location.replace('user/nest.php');
						}
						function Acc()
						{
							window.top.location.replace("acc.php");
						}
						function redrct()
						{
							window.top.location.replace("user/imageupld.php");
						}
						function lgout()
						{
							top.location.replace("php/logout.php");
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
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
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
				 <script>
    // Selecting the iframe element
    var iframe = document.getElementById("iframe1");
    
    // Adjusting the iframe height onload event
    iframe.onload = function(){
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
    </script>
				<!--<script type="application/javascript">

				function resizeIFrameToFitContent( iFrame )
				 {

   				 iFrame.width  = iFrame.contentWindow.document.body.scrollWidth;
  				 iFrame.height = iFrame.contentWindow.document.body.scrollHeight;
				}

				window.addEventListener('DOMContentLoaded', function(e) 
				{
				var iFrame = document.getElementById( 'iframe1' );
    			resizeIFrameToFitContent( iFrame );
				} );

</script>-->
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- //smooth scrolling-bottom-to-top -->

<!-- //js-scripts -->
</body>
</html>