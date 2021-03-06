<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Stretch an Education Category Bootstrap responsive WebTemplate | Courses :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Stretch a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
</head>

<body>
	<!--Header-->
	<div class="top-bar_sub_w3layouts_agile">
		<h6>MAKE CREATIVITY A HABIT <a href="/contact">Contact Us </a></h6>
		<div class="search">
		<?php

if(session()->has('userdata')){
	$data =Session::get('userdata')->first();
}
	
?>
			@if(Session::has('userdata')  )
				<!-- <h5><a class="sign" href="{{ url('/logout') }}">Logout</a></h5> -->
				<li class="nav-item dropdown no-arrow mx-auto">
									<a href="" class="nav-link dropdown-toggle nav-name " data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true"  aria-expanded="false">{{$data->name}}</a>
									<ul class="dropdown-menu">
										<li><a href="/updateprofile">Profile</a></li>
										<li><a href="/changepassword">Change Password</a></li>
										<li><a class="sign" href="{{ url('/logout') }}">Logout</a></li>
									</ul>
								</li>
			@else
				<h5><a class="sign" href="#" data-toggle="modal" data-target="#myModal2">Student Login</a></h5>
			@endif
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
				<!-- cd-header-buttons -->
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="header inner_banner" id="home">
		<!--/top-bar-->
		<div class="top-bar">
			<div class="header-nav-agileits">

				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						<h1><a class="navbar-brand" href="index.html">Stretch <span>Online Education</span></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="top_nav">
								<li><a href="/index">Home</a></li>
								<li><a href="/about">About</a></li>
								<li><a href="/feed">Feedback</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Drop Down <span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="/services">Services</a></li>
										<li><a href="/join">Join now</a></li>
									</ul>
								</li>
								<li><a href="/courses" class="active">Courses</a></li>
								<li><a href="/contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</nav>

			</div>
		</div>
		<!--//top-bar-->
		<!--/ banner-text -->
		<!--// banner-text -->
	</div>
	<!--//inner_banner-->
	<!--/short-->
	<div class="services-breadcrumb-w3ls-agile">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="/index">Home</a><span>|</span></li>
				<li>Courses</li>
			</ul>
		</div>
	</div>
	<!--//short-->
	<!-- //inner_content -->

	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

						<div class="login-m_page_img">

							<img src="images/model.jpg" alt=" " class="img-responsive" />

						</div>
						<div class="login-m_page">
							<h3 class="sign">Sign In</h3>
							<div class="login-form-wthree-agile">
								<form action="#" method="post">
									<input type="email" name="email" placeholder="E-mail" required="">
									<input type="password" name="password" placeholder="Password" required="">
									<div class="tp">
										<input type="submit" value="Sign In">
									</div>
								</form>
							</div>
							<div class="login-social-grids">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

						<div class="login-m_page_img">

							<img src="images/model.jpg" alt=" " class="img-responsive" />

						</div>
						<div class="login-m_page">
							<h3 class="sign">Sign Up</h3>
							<div class="login-form-wthree-agile">
								<form action="#" method="post">
									<input type="text" name="name" placeholder="Username" required="">
									<input type="email" name="email" placeholder="Email" required="">
									<input type="password" name="password" placeholder="Password" required="">
									<input type="password" name="password" placeholder="Confirm Password" required="">
									<input type="submit" value="Sign Up">
								</form>
							</div>
							<p><a href="#"> By clicking Sign up, I agree to your terms</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->

	<!--//Header-->
	<!--/inner_connectent-->
	<!--Gallery-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="headerw3">Courses</h3>
			<div class="inner_sec_w3_agileinfo">
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="100% Satisfaction." href="images/gal1.jpg">
						<img src="images/gal1.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Data Science</h4>
							<p>Description</p>
						</div>
						</a>
					</div>
					<div class="gallery-grid1">
						<a title="100% Satisfaction." href="images/gal2.jpg">
						<img src="images/gal2.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Core IT Skills</h4>
							<p>Description</p>
						</div>
						</a>
					</div>
					<div class="gallery-grid1">
						<a title="100% Satisfaction." href="images/gal4.jpg">
						<img src="images/gal4.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Management</h4>
						    <p>Description</p>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="100% Satisfaction." href="images/gal32.jpg">
						<img src="images/gal3.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Core Skills</h4>
							<p>Description</p>
						</div>
						</a>
					</div>
					<div class="gallery-grid1">
						<a title="100% Satisfaction." href="images/gal5.jpg">
						<img src="images/gal5.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Mass Communincation</h4>
							<p>Description</p>
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="100% Satisfaction." href="images/gal6.jpg">
						<img src="images/gal6.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Literature</h4>
							<p>Description</p>
						</div>
						</a>
					</div>
					<div class="gallery-grid1">
						<a title="100% Satisfaction." href="images/gal8.jpg">
						<img src="images/gal8.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Financial Analysis</h4>
							<p>Description</p>
						</div>
						</a>
					</div>
					<div class="gallery-grid1">
						<a title="100% Satisfaction." href="images/gal7.jpg">
						<img src="images/gal7.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>Feedback Analysis</h4>
							<p>Description</p>
						</div>
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//Gallery-->

	<!--//inner_connectent-->
	<!--footer-->
	<div class="contact-footer-w3layouts-agile">

		<div class="bottom-social-agileits-w3ls">
			<div class="container">
				<div class="col-md-8 botttom-nav-w3ls-agileits">
					<ul class="f_links col-md-4">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="services.html">Services</a>
						</li>
						<li>
							<a href="courses.html">Courses</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
					<ul class="f_links col-md-4">
						<li>
							<a href="index.html">Topics</a>
						</li>
						<li>
							<a href="404.html">Blog</a>
						</li>
						<li>
							<a href="404.html">Careers</a>
						</li>
						<li>
							<a href="services.html">Services</a>
						</li>

					</ul>
					<ul class="f_links thrd col-md-4">
						<li>
							<a href="index.html">Topics</a>
						</li>
						<li>
							<a href="404.html">Events</a>
						</li>
						<li>
							<a href="app.html">Mobile App</a>
						</li>


					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 social-icons-wthree">
					<h6>Connect with us</h6>
					<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
					<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
					<a class="pinterest" href="#"><span class="fa fa-pinterest-p"></span></a>
					<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		<div class="copy-w3-agileits">
			<h2 class="footer-logo"><a href="index.html">Stretch <span>Online Education</span></a></h2>
			<p>© 2018 Stretch . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--/footer -->


	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--gallery -->
	<script src="js/jquery.chocolat.js"></script>
	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.gallery-grid1 a').Chocolat();
		});
	</script>
	<!-- //gallery -->
	<!--//search-bar-->
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>