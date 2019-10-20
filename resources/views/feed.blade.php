<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Stretch an Education Category Bootstrap responsive WebTemplate | App :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Feedback Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Josefin+Slab:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
</head>

<body>
	<!--Header-->
	<div class="top-bar_sub_w3layouts_agile">
		<h6>MAKE CREATIVITY A HABIT <a href="contact.html">Contact Us </a></h6>
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
								<li><a href="/feed" class="active">Feedback</a></li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Drop Down <span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="/services">Services</a></li>
										<li><a href="/join">Join now</a></li>
									</ul>
								</li>
								<li><a href="/courses">Courses</a></li>
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
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>Feedback</li>
			</ul>
		</div>
	</div>
	<!--//short-->

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
<form action="{{route('feedback') }}" method="post">
	@csrf
<fieldset>
<center><u>Student's FeedBack Form</u></center><br>
 
<fieldset>



<h3>Please give your answer about the following question by circling the given grade on the scale:</h3>

<table class="table table-bordered" style="margin-top:50px">

</table>
@foreach($teacherdata as $tdata)
<table class="table table-bordered" style="margin-top:50px">
<td>
	<tr>
		<h1 name="teacher" id="teacher" class="text-center">{{ $tdata->fname }} {{ $tdata->lname}}</h1>
	</tr>
</td>
</table>
<h3>1-Course Material</h3>
<table class="table table-bordered">
<tr>
<td><b>1:</b> Teacher provided the course outline having weekly content plan with list of  required text book:</td>  
<td>

<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q1_1" q_id='{{ $tdata->id }}_q1' val='1' onclick="add(this,'{{ $tdata->id }}_q1',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q1_2" q_id='{{ $tdata->id }}_q1' val='2' onclick="add(this,'{{ $tdata->id }}_q1',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q1_3" q_id='{{ $tdata->id }}_q1' val='3' onclick="add(this,'{{ $tdata->id }}_q1',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q1_4" q_id='{{ $tdata->id }}_q1' val='4' onclick="add(this,'{{ $tdata->id }}_q1',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q1_5" q_id='{{ $tdata->id }}_q1' val='5' onclick="add(this,'{{ $tdata->id }}_q1',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
<input type="hidden" name="{{ $tdata->id }}_q1" id='{{ $tdata->id }}_q1' value="5">
</td>
</tr>
  
<tr>
<td><b>2:</b>Course objectives,learning outcomes and grading criteria are clear to me:</td> 
<td>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q2_1" q_id='{{ $tdata->id }}_q2' val='1' onclick="add(this,'{{ $tdata->id }}_q2',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q2_2" q_id='{{ $tdata->id }}_q2' val='2' onclick="add(this,'{{ $tdata->id }}_q2',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q2_3" q_id='{{ $tdata->id }}_q2' val='3' onclick="add(this,'{{ $tdata->id }}_q2',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q2_4" q_id='{{ $tdata->id }}_q2' val='4' onclick="add(this,'{{ $tdata->id }}_q2',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q2_5" q_id='{{ $tdata->id }}_q2' val='5' onclick="add(this,'{{ $tdata->id }}_q2',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
<input type="hidden" name="{{ $tdata->id }}_q2" id='{{ $tdata->id }}_q2' value="5">
</td>
</tr>

<tr>
<td>
<b>3:</b>Course integrates throretical course concepts with the real world examples:</td> 
<td>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q3_1" q_id='{{ $tdata->id }}_q3' val='1' onclick="add(this,'{{ $tdata->id }}_q3',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q3_2" q_id='{{ $tdata->id }}_q3' val='2' onclick="add(this,'{{ $tdata->id }}_q3',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q3_3" q_id='{{ $tdata->id }}_q3' val='3' onclick="add(this,'{{ $tdata->id }}_q3',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q3_4" q_id='{{ $tdata->id }}_q3' val='4' onclick="add(this,'{{ $tdata->id }}_q3',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q3_5" q_id='{{ $tdata->id }}_q3' val='5' onclick="add(this,'{{ $tdata->id }}_q3',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
<input type="hidden" name="{{ $tdata->id }}_q3" id='{{ $tdata->id }}_q3' value="5">
</td>
</tr>
</table>

<h3>2-Class Teaching</h3>
<table  class="table table-bordered" >
<Td><b>4:</b> Teacher is punctual,arrives on time and leaves on time:</td>
<td> 
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q4_1" q_id='{{ $tdata->id }}_q4' val='1' onclick="add(this,'{{ $tdata->id }}_q4',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q4_2" q_id='{{ $tdata->id }}_q4' val='2' onclick="add(this,'{{ $tdata->id }}_q4',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q4_3" q_id='{{ $tdata->id }}_q4' val='3' onclick="add(this,'{{ $tdata->id }}_q4',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q4_4" q_id='{{ $tdata->id }}_q4' val='4' onclick="add(this,'{{ $tdata->id }}_q4',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q4_5" q_id='{{ $tdata->id }}_q4' val='5' onclick="add(this,'{{ $tdata->id }}_q4',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
	<input type="hidden" name="{{ $tdata->id }}_q4" id='{{ $tdata->id }}_q4' value="5">
</td>

<tr>
<td>
<b>5:</b> Teacher is good at stimulating the interest in the course content:</td>
<td> 
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q5_1" q_id='{{ $tdata->id }}_q5' val='1' onclick="add(this,'{{ $tdata->id }}_q5',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q5_2" q_id='{{ $tdata->id }}_q5' val='2' onclick="add(this,'{{ $tdata->id }}_q5',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q5_3" q_id='{{ $tdata->id }}_q5' val='3' onclick="add(this,'{{ $tdata->id }}_q5',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q5_4" q_id='{{ $tdata->id }}_q5' val='4' onclick="add(this,'{{ $tdata->id }}_q5',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q5_5" q_id='{{ $tdata->id }}_q5' val='5' onclick="add(this,'{{ $tdata->id }}_q5',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
	<input type="hidden" name="{{ $tdata->id }}_q5" id='{{ $tdata->id }}_q5' value="5">
</tr>
<tr>
<td><b>6:</b> Teacher is good at explaining the subject matter:</td>
<td>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q6_1" q_id='{{ $tdata->id }}_q6' val='1' onclick="add(this,'{{ $tdata->id }}_q6',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q6_2" q_id='{{ $tdata->id }}_q6' val='2' onclick="add(this,'{{ $tdata->id }}_q6',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q6_3" q_id='{{ $tdata->id }}_q6' val='3' onclick="add(this,'{{ $tdata->id }}_q6',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q6_4" q_id='{{ $tdata->id }}_q6' val='4' onclick="add(this,'{{ $tdata->id }}_q6',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q6_5" q_id='{{ $tdata->id }}_q6' val='5' onclick="add(this,'{{ $tdata->id }}_q6',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
	<input type="hidden" name="{{ $tdata->id }}_q6" id='{{ $tdata->id }}_q6' value="5">
</td>
</tr>

<tr><td>
<b>7:</b> Teacher's presentation was clear,loud ad easy to understand:</td>
<td> 
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q7_1" q_id='{{ $tdata->id }}_q7' val='1' onclick="add(this,'{{ $tdata->id }}_q7',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q7_2" q_id='{{ $tdata->id }}_q7' val='2' onclick="add(this,'{{ $tdata->id }}_q7',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q7_3" q_id='{{ $tdata->id }}_q7' val='3' onclick="add(this,'{{ $tdata->id }}_q7',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q7_4" q_id='{{ $tdata->id }}_q7' val='4' onclick="add(this,'{{ $tdata->id }}_q7',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q7_5" q_id='{{ $tdata->id }}_q7' val='5' onclick="add(this,'{{ $tdata->id }}_q7',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
	<input type="hidden" name="{{ $tdata->id }}_q7" id='{{ $tdata->id }}_q7' value="5">
</td>
<tr>
<td>
<b>8:</b> Teacher is good at using innovative teaching methods/ways:</td><td> 
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q8_1" q_id='{{ $tdata->id }}_q8' val='1' onclick="add(this,'{{ $tdata->id }}_q8',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q8_2" q_id='{{ $tdata->id }}_q8' val='2' onclick="add(this,'{{ $tdata->id }}_q8',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q8_3" q_id='{{ $tdata->id }}_q8' val='3' onclick="add(this,'{{ $tdata->id }}_q8',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q8_4" q_id='{{ $tdata->id }}_q8' val='4' onclick="add(this,'{{ $tdata->id }}_q8',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
	<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q8_5" q_id='{{ $tdata->id }}_q8' val='5' onclick="add(this,'{{ $tdata->id }}_q8',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
	<input type="hidden" name="{{ $tdata->id }}_q8" id='{{ $tdata->id }}_q8' value="5">
</td>
</tr>
<tr>
<td>
<b>9:</b> Teacher is available and helpful during counseling hours:</td> 
<td>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q9_1" q_id='{{ $tdata->id }}_q9' val='1' onclick="add(this,'{{ $tdata->id }}_q9',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q9_2" q_id='{{ $tdata->id }}_q9' val='2' onclick="add(this,'{{ $tdata->id }}_q9',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q9_3" q_id='{{ $tdata->id }}_q9' val='3' onclick="add(this,'{{ $tdata->id }}_q9',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q9_4" q_id='{{ $tdata->id }}_q9' val='4' onclick="add(this,'{{ $tdata->id }}_q9',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q9_5" q_id='{{ $tdata->id }}_q9' val='5' onclick="add(this,'{{ $tdata->id }}_q9',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
		<input type="hidden" name="{{ $tdata->id }}_q9" id='{{ $tdata->id }}_q9' value="5">
</td>
</tr>
<tr>
<td>
<b>10:</b> Teacher has competed the whole course as per course outline:</td>
<td>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q10_1" q_id='{{ $tdata->id }}_q10' val='1' onclick="add(this,'{{ $tdata->id }}_q10',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q10_2" q_id='{{ $tdata->id }}_q10' val='2' onclick="add(this,'{{ $tdata->id }}_q10',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q10_3" q_id='{{ $tdata->id }}_q10' val='3' onclick="add(this,'{{ $tdata->id }}_q10',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q10_4" q_id='{{ $tdata->id }}_q10' val='4' onclick="add(this,'{{ $tdata->id }}_q10',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q10_5" q_id='{{ $tdata->id }}_q10' val='5' onclick="add(this,'{{ $tdata->id }}_q10',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
		<input type="hidden" name="{{ $tdata->id }}_q10" id='{{ $tdata->id }}_q10' value="5">
	</td>
</tr>
</table>

<h3>3-Class Assessment</h3>
 <table  class="table table-bordered" >
<tr>
<td><b>11:</b>Teacher was always fair and impartial:</td>
<td>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q11_1" q_id='{{ $tdata->id }}_q11' val='1' onclick="add(this,'{{ $tdata->id }}_q11',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q11_2" q_id='{{ $tdata->id }}_q11' val='2' onclick="add(this,'{{ $tdata->id }}_q11',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q11_3" q_id='{{ $tdata->id }}_q11' val='3' onclick="add(this,'{{ $tdata->id }}_q11',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q11_4" q_id='{{ $tdata->id }}_q11' val='4' onclick="add(this,'{{ $tdata->id }}_q11',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q11_5" q_id='{{ $tdata->id }}_q11' val='5' onclick="add(this,'{{ $tdata->id }}_q11',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
		<input type="hidden" name="{{ $tdata->id }}_q11" id='{{ $tdata->id }}_q11' value="5">
	</td>
</tr>
<tr>
<td><b>12:</b>Assessments conducted are clearly connected to maximize learining objectives:</td>
<Td>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q12_1" q_id='{{ $tdata->id }}_q12' val='1' onclick="add(this,'{{ $tdata->id }}_q12',1)" data-toggle="tooltip" title="Very Bad" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q12_2" q_id='{{ $tdata->id }}_q12' val='2' onclick="add(this,'{{ $tdata->id }}_q12',2)" data-toggle="tooltip" title="Ok" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q12_3" q_id='{{ $tdata->id }}_q12' val='3' onclick="add(this,'{{ $tdata->id }}_q12',3)" data-toggle="tooltip" title="Good" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q12_4" q_id='{{ $tdata->id }}_q12' val='4' onclick="add(this,'{{ $tdata->id }}_q12',4)" data-toggle="tooltip" title="Very Good" aria-hidden="true"></span></a>
		<a class="btn"><span class="fa fa-star-o fa-lg" id="{{ $tdata->id }}_q12_5" q_id='{{ $tdata->id }}_q12' val='5' onclick="add(this,'{{ $tdata->id }}_q12',5)" data-toggle="tooltip" title="Excellent" aria-hidden="true"></span></a>
		<input type="hidden" name="{{ $tdata->id }}_q12" id='{{ $tdata->id }}_q12' value="5">
	</td>
</tr>
</table>

<b>13:</b>Any suggestion:<br><br>
<center>
<textarea name="{{ $tdata->id }}_msg" id="{{ $tdata->id }}_msg" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center><br><br>
<hr>
@endforeach
<!-- <p align="center"><button type="submit" style="font-size:7pt;color:white;background-color:brown;border:2px solid #336600;padding:7px" name="sub">Submitt</button></p> -->
<p align="center" class="register-form"><input type="submit" value="Submit"></p>

</form>
</fieldset>


<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>




	
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
	<!--//search-bar-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('[data-toggle="tooltip"]').tooltip();
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
		$('span').click(function(){
			var q_id = $(this).attr('q_id');
			var va = $(this).attr('val');
			console.info(q_id);
			console.info(va);
			$('[id='+q_id+']').val(va);
			var imp = $('[id='+q_id+']').val();
			console.info(imp);
		});

		function add(ths,ss,sno)
		{
			for(var i=1;i<=5;i++)
			{
				var cur=document.getElementById(ss+'_'+i)
				cur.className= "fa fa-star-o fa-lg"
			}

			for (var i=1;i<=sno;i++) 
			{
				var cur=document.getElementById(ss+'_'+i)
				if(cur.className == "fa fa-star-o fa-lg")
				{
					cur.className = "fa fa-star fa-lg";
				}
			}
		}		
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