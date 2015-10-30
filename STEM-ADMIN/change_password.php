<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include"dbconnection.php";
$student_email=$_SESSION['student_email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Student|Tutor|Login</title>
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
<script>
	function validateLoginForm(){
		var oldpswd=$("#oldpswd").val();
		var newpswd=$("#newpswd").val();
		var confpswd=$("#confpswd").val();
		var errorMessage='';
		errorMessageFinal='';
		if(oldpswd!='' && newpswd!='' && confpswd!=''){
			if(newpswd==confpswd){
				return true;
			}else{
				errorMessage+='<li>New Password and Confirm Password Should be match!</li>';
				errorMessageFinal="<ul style='color:red'>"+errorMessage+"</ul>";
			
				if(errorMessageFinal!=''){
					$("#errorMessages").html(errorMessageFinal);
				}
				return false;
			}
			
		}else{
			
			if(oldpswd==''){
				errorMessage+='<li>Please Enter Old Password</li>';
			}
			if(newpswd==''){
				errorMessage+='<li>Please Enter New Password</li>';
			}
			if(confpswd==''){
				errorMessage+='<li>Please Enter Confirm Password</li>';
			}
			
			errorMessageFinal="<ul style='color:red'>"+errorMessage+"</ul>";
			
			if(errorMessageFinal!=''){
				$("#errorMessages").html(errorMessageFinal);
			}
			return false;
		}
	}
</script>

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
                    <h1>Change Password</h1>
					<p>
					<?php echo $_SESSION["student_email"];?>  </p>
                    
                </div>
    </header>

<?php
  
 if(!empty($_REQUEST['res'])){
if($_REQUEST['res']=='success'){ ?>
  <div style="color:green">Your Password Updated successfully</div>
  <?php }
  if($_REQUEST['res']=='fail'){ ?>
  <div style="color:red">You Entered Old Password Wrong</div>
  <?php 
  }
}
  
?>
	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title"></h3>
						<!-- <p>
						Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. 
						</p> -->
						
						<form class="form-light mt-20" method="post" action="insert_data.php?action=student_change_password" role="form" onsubmit="return validateLoginForm()">
							<div class="form-group">
								<label>Current Password</label>
								<input type="password" name="oldpassword" id="oldpswd" class="form-control">
							</div>
							<div class="form-group">
								<label>New Password</label>
								<input type="password" name="newpassword" id="newpswd" class="form-control">
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" name="confpassword" id="confpswd" class="form-control">
							</div>
							
							<button type="submit" name="action" value="student_change_password" class="btn btn-two">Submit</button><p><br/></p>
						</form>
					</div>
				</div>
			</div>
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
