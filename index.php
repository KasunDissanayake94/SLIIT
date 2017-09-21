<!DOCTYPE HTML>
<html>
	<head>
		<title>MediQ-Home</title>
		
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="fonts/font-awesome.min.css"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
  		 <script src="js/bootstrap.js"></script>
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		 <!---- start-smoth-scrolling---->
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
		 <!---- start-smoth-scrolling---->
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
		
	</head>
	<body>
	<?php
require_once('assets/signinmodal.php');
?>
	
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header" >
					
						<div class="container">
						<div class="logo">
							<a href="#"><img src="images/logo.png" id="logo" /></a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="#home" class="scroll">Home </a></li>
								<li><a href="#about" class="scroll">About us</a></li>
						
								<li><a href="#contact" class="scroll">Contact</a></li>
								<li><a href="" onClick="showsignin();" class="scroll" id="signin">Signin</a></li>
								
							</ul>
							<a href="#" id="pull" class="pull-right"><img src="images/menu-icon.png" title="menu" /></a>
							
							
						</nav>
						
						<div class="clearfix"> </div>
						 
					</div>
					
				</div>
			</div>
			
		<!----- //End-header---->
		<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
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
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/slide1.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>highquality service for men & women</label>
			          		<a class="slide-btn" href="#">learn more</a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide1.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>highquality service for men & women</label>
			          		<a class="slide-btn" href="#">learn more</a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide1.jpg" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>highquality service for men & women</label>
			          		<a class="slide-btn" href="#">learn more</a>
			          	</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			<!----- //End-slider---->
			<!---- about ---->
			<div id="about" class="about">
				<div class="container">
					<div class="header about-header text-center">
						<h2>about us</h2>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
					</div>
					<!---- About-grids ---->
					<div class="about-grids">
						<div class="col-md-4">
							<div class="about-grid">
								<img src="images/img1.jpg" title="name" />
								<span class="t-icon1"> </span>
								<div class="about-grid-info text-center">
									<h3><a href="#">Children's specialist</a></h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="about-grid n-about-grid n-about-grid1">
								<img src="images/img2.jpg" title="name" />
								<span class="t-icon1"> </span>
								<div class="about-grid-info text-center">
									<h3><a href="#">Women's specialist</a></h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="about-grid n-about-grid n-about-grid2">
								<img src="images/img3.jpg" title="name" />
								<span class="t-icon2"> </span>
								<div class="about-grid-info text-center">
									<h3><a href="#">men's specialist</a></h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!---- About-grids ---->
				</div>
				
			</div>
			<!---- about ---->
			
		
			<!---- contact ---->
			<div id="contact" class="contact">
				<div class="map">
					
					<div class="contact-info">
						<div class="container">
						<!---- contact-grids ---->
						<div class="contact-grids">
							<h3>contact us</h3>
							<div class="col-md-5 contact-grid-left">
								<h4>contact information</h4>
								<ul>
									<li><span class="cal"> </span><label>Monday - Friday :</label><small>9:30 AM to 6:30 PM</small></li>
									<li><span class="pin"> </span><label>Address :</label><small>123 Some Street , London, UK, CP 123</small></li>
									<li><span class="phone"> </span><label>Phone :</label><small>(032) 987-1235</small></li>
									<li><span class="fax"> </span><label>Fax :</label><small>(123) 984-1234</small></li>
									<li><span class="mail"> </span><label>Email :</label><small> info@doctor.com</small></li>
								</ul>
							</div>
							<div class="col-md-7 contact-grid-right">
								<h4>leave us a message</h4>
								<form>
									<input type="text" value="Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name:';}">
									<input type="text" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email:';}">
									<input type="text" value="Phone No:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone No:';}">
									<textarea rows="2" cols="70" onfocus="if(this.value == 'Message:') this.value='';" onblur="if(this.value == '') this.value='Message:';">Message:</textarea>
									<input type="submit" value="SEND MESSAGE" />
								</form>
							</div>
							<br>
							<br>
							
								
								<div class="clearfix"> </div>
						</div>
						<div class="copy-right">(c) TryCatch++ 2017. All rights reserved.</div>
						<!---- contact-grids ---->
					</div>
					</div>
				</div>
			</div>
			<!---- contact ---->
			<div class="clearfix"> </div>
			<!--- copy-right ---->
			<div class="copy-right">
				<div class="container">
				<div class="copy-right-left">
					<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
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
				</div>
				<div class="copy-right-right">
					<ul>
						<li><a class="facebook" href="#"><span> </span></a></li>
						<li><a class="twitter" href="#"><span> </span></a></li>
						<li><a class="skype" href="#"><span> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<!--- copy-right ---->
	</body>
</html>
<script>
			 function showsignin(){
				 $('#loginModal').modal('show');
			 }
	</script>
