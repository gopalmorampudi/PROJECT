<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include"dbconnection.php";

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
	<center><h3></h3></center><br>
<script src="jquery-1.9.0.min.js"></script>
<script>
var subID='';
 function showTutor(sel) {
                        var subject_id = sel.options[sel.selectedIndex].value;
						//alert(subject_id);
                        $("#output1").html("");
                        $("#output2").html("");
                        if (subject_id.length > 0) {
							
                            $.ajax({
                                type: "GET",
                                url: "fetch_tutor.php",
                                data: "subject_id=" + subject_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output1').html();
                                },
                                success: function(html) {
                                    $("#output1").html(html);
                                }
                            });
                        }
                    }

					 
</script>
  <!-- Place this tag after the last widget tag. -->
<script type="text/javascript">
                                (function() {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                })();
</script>
<script>
function f(id){
	//alert(id.id);
	var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		//alert(xmlhttp.responseText);
    document.getElementById("output2").innerHTML=xmlhttp.responseText;
    }
  }
  var url="callableClasses.php?type=getTutorSchedule&id="+id.id+"&sid="+document.getElementById('sid').value;
xmlhttp.open("GET",url,true);
xmlhttp.send();

}
</script>
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
                    <h1>View Subjects</h1>
                    <p> priya@gmail.com</p>
                </div>
    </header>
<!-- container -->
	<div class="container">
				<div class="row">			
								<div class="col-md-12">
								<div>
								<label>Select Subject</label>
								<select class="form-control" name="subject" onChange="showTutor(this);" id="sid">
<option value="">Select subject</option>
	<?php
	$sql="select * from subject";
	$result=mysql_query($sql);
	while($res=mysql_fetch_array($result)){
	?>
	<option value="<?=$res['subject_id']?>"><?=$res['subject_name']?></option>
	<?php
	}
?>
</select>
							</div>
								</div>
								
							</div>
							</div>
						
				
				<div class="container">
			<div class="row">
							
								<div class="col-md-12">
			<div id="output1"></div>
					
					 
	<div class="container">
				<div class="row">
	<div id="output2"></div>
	</div>
</div>
	</div>
	</div>
	</div>
	<!-- /container -->

	  


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
