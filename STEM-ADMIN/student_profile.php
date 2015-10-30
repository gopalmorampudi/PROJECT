<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include 'dbconnection.php';
$student_email=$_SESSION['student_email'];
?>
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
					<!--<img src="assets/images/logo.png" alt="Techro HTML5 template">--></a>
			<span style="color:#3d84e6"><h2>STEM</h2></span>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="Student_profile.php">View Profile</a></li>
					<li><a href="view_subject.php">View Subjects</a></li>
					<li>
		<a href="class_history.php?usertype=student&classtype=current">Class Details</a></li>
					<li><a href="change_password.php">Change Password</a></li>
					<li><a href="student_logout.php">Logout</a></li>
					

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Student Details</h1>
                    <p><?php echo $_SESSION['student_email'];?> </p>
                </div>
    </header>


	<!-- container -->
	 

<?php
$student_email=$_SESSION['student_email'];
$sql="select * from student where emailid='$student_email'";
$res=mysql_query($sql);
if($row=mysql_fetch_assoc($res)) {
?>		


               <div class="container" style="table-align:right">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Student Profile</h3>
						<p><?php echo $_SESSION['student_email'];?></p>
						
						<form class="form-light mt-20" action="insert_data.php?action=update_student" method="post" role="form">
							<div class="form-group">
								<label>Student ID</label>
								<input type="text" class="form-control" name="student_id" value="<?=$row['student_id']?>"readonly>
							</div>
							<div class="form-group">
								<label>Student Name</label>
								<input type="text" class="form-control" name="student_name" value="<?=$row['student_name']?>">
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Email ID</label>
										<input type="email" name="emailid" class="form-control" value="<?=$row['emailid']?>"readonly>
									</div>
								</div>
								<!--<div class="col-md-12">
									<div class="form-group">
										<label>Password</label>
										<input type="text" name="password" class="form-control" value=""readonly>
									</div>
								</div>-->

							</div>
                             <div class="form-group">
								<label>Phone Number</label>
								<input type="text" name="phone_number" class="form-control" value="<?=$row['phone_number']?>">
							</div>
					
							<div class="form-group">
								<label>Address</label><input type="text" class="form-control" name="address" value="<?=$row['address']?>" style="height:80px;" >
								
							</div>
							<button type="submit" class="btn btn-primary">Edit</button></a><p><br/></p>
						</form>
					</div>
					
				</div>
			
			</div>
			
			<?php
			}
			?>
	<!-- /container -->

	<footer id="footer">
 
		<div class="container">
   	<!-- <div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div> -->

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="student_profil.php">View Profile</a> | 
								<a href="about.html">View Subjects</a> |
								<a href="courses.html">Change Password</a> |
								<a href="login.html">Logout</a> |
								
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<!-- <div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2015. Template by <a href="www.smartmindsteam.com" rel="develop">www.smartmindsteam.com</a>
							</p>
						</div> -->
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
