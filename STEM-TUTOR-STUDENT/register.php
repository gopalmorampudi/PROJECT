<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Student|Tutor|Register</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<!-- <img src="assets/images/logo.png" alt="Techro HTML5 template">--></a>
			<span style="color:#3d84e6"><h2>STEM</h2></span>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="courses.html">Courses</a></li>
					<li><a href="login.html">Login</a></li>
					<li class="active"><a href="register.html">Register</a></li>
					<li><a href="contact.html">Contact</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1> Register Here</h1>
                    <p>Tutor && Student </p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Tutor Register Here</h3>
						<form class="form-light mt-20" action="insert_data.php?action=insert_tutor_reg" method="post" role="form">
							<div class="form-group">
								<label>UserName</label>
								<input type="text" class="form-control" name="tutor_name" placeholder="Enter Your Name">
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Email ID</label>
										<input type="email" name="emailid" class="form-control" placeholder="Enter Email ID">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control" placeholder="Enter Password">
									</div>
								</div>

							</div>
                             <div class="form-group">
								<label>Phone Number</label>
								<input type="text" name="phone_number" class="form-control" placeholder="Enter Your Phone Number">
							</div>
							<div class="form-group">
								<label>Select Subject</label><br>
	                 <input type="checkbox" name="subject[]" value="Java">Java
                     <input type="checkbox" name="subject[]" value="DBMS" >PHP
		       <input type="checkbox" name="subject[]" value="JavaScript">JavaScript
                     <input type="checkbox" name="subject[]" value="DBMS">DBMS<br>						
							</div>
							 <div class="form-group">
								<label>Working Hours</label>
								<select class="form-control" name="working_hours">
								<option>Select Hours</option>
								  <option value="01">01</option>
								   <option value="02">02</option>
								   <option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
							</select>

							</div>
							 <div class="form-group">
								<label>Working Days</label>
								<select class="form-control" name="working_days">
								<option>Select Days</option>
								  <option value="01">01</option>
								   <option value="02">02</option>
								   <option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								
							</select>

							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" name="address"id="address" placeholder="Write your Address here..." style="height:80px;"></textarea>
							</div>
							<button type="submit" name="action" value="insert_tutor_reg" class="btn btn-two">Submit</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-6">
						<h3 class="section-title">Student Register Here</h3>
						<form class="form-light mt-20" action="insert_data.php?action=new_student" method="post" role="form">
							<div class="form-group">
								<label>UserName</label>
								<input type="text" name="student_name" class="form-control" placeholder="Enter Your Name">
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Email ID</label>
										<input type="email" name="emailid" class="form-control" placeholder="Enter Email ID">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control" placeholder="Enter Password">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="phone_number" placeholder="Enter Your Phone Number">
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" name="address" id="address" placeholder="Write your Address here..." style="height:80px;"></textarea>
							</div>
							<button type="submit" name="action" value="new_student" class="btn btn-two">Submit</button><p><br/></p>
						</form>
					</div>
				</div>
			</div>
	<!-- /container -->

	 <footer id="footer">
 
		<div class="container">
   	<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
								<a href="about.html">About Us</a> |
								<a href="courses.html">Courses</a> |
								<a href="login.html">Login</a> |
								<a href="register.html">Register</a> |
								<a href="contact.html">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2015. Template by <a href="www.smartmindsteam.com" rel="develop">www.smartmindsteam.com</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
