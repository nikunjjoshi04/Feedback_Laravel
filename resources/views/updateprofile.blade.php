<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Stretch an Education Category Bootstrap responsive WebTemplate | Join :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Stretch a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!-- js -->
		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

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
							// console.log(data);
						if(data){
							$('#sem_id').empty();
							$('#sem_id').focus;
							$('#sem_id').append('<option value=""> Select Sem </option>'); 
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

		$(document).ready(function() {
		$('#sem_id').on('change', function() {
			var semID = $(this).val();
			if(semID) {
				$.ajax({
					url: '/finddiv/'+semID,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",
					success:function(data) {
                        // console.log("sss");
						if(data){
                        	$('#div_id').empty();
                        	$('#div_id').focus;
                        	$('#div_id').append('<option value=""> Select Div </option>');
							$.each(data, function(key, value){
                        		$('select[name="div_id"]').append('<option value="'+ value.id +'">' + value.div+ '</option>');
							});
						}else{
                    		$('#div_id').empty();
                  		}
						

					}
				});
			}else{
              $('#sem_id').empty();
            }
		});
	});

	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
</head>

<body>
	
	<!--//short-->

	<!--//Header-->
	<!--/inner_connectent-->
	
	<div class="banner_bottom">
		<div class="container">
			<h3 class="headerw3">Edit profile</h3>
			<div class="inner_sec_w3_agileinfo">
				<div class="register-form">
				<form action="{{route('update')}}" method="post">
						@csrf
						<div class="fields-grid">
						<tr>
						<label class="headerw3">Enrollment Number</label>
                                    <input type="text" value="{{$stud->e_no}}" name="eno" placeholder="Enrollment number" required="">
								</tr><br>
                                <tr>
								<label class="headerw3">Your Name</label>	
                                    <input type="text" value="{{$stud->name}}" name="name" placeholder="Fullname" required="">
								</tr><br>
                                <tr>
								<label class="headerw3">Email</label>
                                    <input type="email" value="{{$stud->email}}" name="email" placeholder="Email" required="">
								</tr><br>
                                <tr>
								<label class="headerw3">Phone Number</label>
                                    <input type="text" value="{{$stud->phone_number}}" name="pnum" placeholder="Phone number" required="">
								</tr><br>
                                <tr>
								<label class="headerw3">Address</label>	
                                    <input type="text" value="{{$stud->address}}" name="add" placeholder="Address" required="">
								</tr><br>
								<label class="headerw3">Class</label>	
								<div class="styled-input agile-styled-input-top">
										<select class="category2" name="class" id="class">
										<option selected>{{$stud->class}}</option>
										@foreach($classdata as $cdata)
											<option value="{{ $cdata->id }}" >{{ $cdata->class }}</option>
				 						@endforeach
										</select>
								</div>
								<div class="styled-input agile-styled-input-top">
										<select class="category2" name="sem_id" id="sem_id">
										<option selected>{{$stud->sem}}</option>
										</select>
								</div>
								<div class="styled-input agile-styled-input-top">
										<select class="category2" name="div_id" id="div_id">
										<option selected>{{$stud->div}}</option>
										</select>
								</div>
							<div class="clearfix"> </div>
						</div>
						<input type="submit" value="Update">
					</form>
					<div>
						<a href="/index"><input type="submit" value="Back"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//inner_connectent-->

</body>

</html>