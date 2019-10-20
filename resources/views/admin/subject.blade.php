<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>LJ institute</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
               <!--header start here-->
			   <div class="header-main">
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Malorum</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a><i class="fa fa-angle-right"></i>Sem </li>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    <div>
		  @if(\Session::has('sucess'))
		  <div class="alert alert-sucess">
		  	<center><b><h1>{{\Session::get('sucess')}}</h1></b></center>
		  </div>
		@endif
		</div>
<!-- Div form-->
    <form action="{{ action('SubjectController@store') }}" method="post">
		{{ csrf_field() }}
		<div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Select class</label>
            <select name="class" id="class">
				<option disable>select class</option>
				@foreach($classdata as $cdata)
					<option value="{{ $cdata->id }}" >{{ $cdata->class }}</option>
				 @endforeach
            </select>
		</div>
		<div class="col-md-12 form-group2 group-mail">
			<label class="control-label">Select Sem</label>
			<select name="sem_id" id="sem_id"></select>
		</div>
         	<div class="vali-form">
            	<div class="col-md-6 form-group1">
              <label class="control-label">Subject</label>
              <input type="text" name="subject" id="subject" placeholder="Subject" required="">
            	</div>
            	<div class="col-md-12 form-group">
              	<button type="submit" class="btn btn-primary">Add</button>
            </div>
          <div class="clearfix"> </div>
    </form>
 	</div>
</div>
<!-- Javascript -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
 <script>
         $(document).ready(function() {
        $('#class').on('change', function() {
            var classID = $(this).val();
            if(classID) {
                $.ajax({
                    url: '/findsem/'+classID,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                      if(data){
                        $('#sem_id').empty();
                        $('#sem_id').focus;
                        $('#sem_id').append('<option value="">-- Select Sem --</option>'); 
                        $.each(data, function(key, value){
                        $('select[name="sem_id"]').append('<option value="'+ key +'">' + value.sem+ '</option>');
                    });
                  }else{
                    $('#sem_id').empty();
                  }
                  }
                });
            }else{
              $('#sem_id').empty();
            }
        });
    });
    </script>		
<!-- End script -->
<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
						   <ul id="menu" >
										<li><a href="index"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
										
										 <li id="menu-academico" ><a href="teachershow"><i class="fa fa-envelope nav_icon"></i><span>Teacher</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="showsubject"><i class="fa fa-bar-chart"></i><span>Subject</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="showsem"><i class="fa fa-bar-chart"></i><span>Sem</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="classhow"><i class="fa fa-bar-chart"></i><span>Class</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="showdiv"><i class="fa fa-bar-chart"></i><span>Div</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="showque"><i class="fa fa-bar-chart"></i><span>Feedback Question</span><div class="clearfix"></div></a></li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
</body>
</html>