<?php
session_start();
include 'dbconnection.php';
if(empty($_SESSION['adminuser']))
header("Location:index.php");
?> 
<!DOCTYPE html>
<html>
  <head>
		<meta charset="UTF-8">
		<title>Admin |Tuition</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.4 -->
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<!-- Ionicons -->
		<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="./dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link href="./dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

	</head>
	<body class="skin-blue sidebar-mini">
		<div class="wrapper">

			<header class="main-header">
				<!-- Logo -->
				<a href="#" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels --> <span class="logo-mini"><b>Admin</b></span> <!-- logo for regular state and mobile devices --> <span class="logo-lg"><b>STEM</b></span> </a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="./dist/img/user2-160x160.jpg" class="user-image" alt="User Image" /> <span class="hidden-xs">Admin</span> </a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="./dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
										<p>
											<small> Nov. 2015</small>
										</p>
									</li>
									<!-- Menu Body -->

									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="#" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
											<a href="logout.php" class="btn btn-default btn-flat">Log out</a>
										</div>
									</li>
								</ul>
							</li>
							<!-- Control Sidebar Toggle Button -->

						</ul>
					</div>
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">
							<img src="./dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p>
								Admin
							</p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
<li class="header">MENU NAVIGATION</li>
<li class="treeview active">
  <a href="#">

<span>Subjects</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
<ul class="treeview-menu">
<li><a href="view_subject.php"></i>View Subjects</a></li>
<li><a href="add_subjects_form.php"></i>Add Subjects</a></li>
</ul>
</li>
<li class="treeview">
  <a href="#">

<span>Tutor Request</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
<li class="active"><a href="tutor_request.php"></i>Accept/Reject Request</a></li>
 <!--<li><a href="#"><i class="fa  fa-plus-square"></i>Reject Request</a></li>-->
  </ul>
</li>
<li class="treeview">
  <a href="#">

<span>Student Request</span>

  </a>
  <ul class="treeview-menu">
<li><a href="student_request.php"></i>Accept/Reject Request</a></li>
<!--<li><a href="#"><i class="fa fa-plus-square"></i>dagg</a></li>-->
  </ul>
</li>


<li class="treeview">
<a href="student_course_request.php">
<span>Student Course Request</span>
</a>
</li>

<li class="treeview">
<a href="schedule_classes.php">
<span>View Scheduled classes</span>
</a>
</li>


<li class="treeview">
  <a href="#">

<span>Tutor</span>

  </a>
  <ul class="treeview-menu">
  <li><a href="view_all_tutor.php"></i>View All Tutors</a></li>
<!--<li><a href="products.php"><i class="fa fa-table"></i>View Available Tutors</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>view Assigned Tutors</a></li>-->
  </ul>
<!--</li>
<li class="treeview">
<a href="#">
<i class="fa fa-suitcase"></i>
<span>Student Course Request</span>
<i class="fa fa-angle-left pull-right"></i>
</a>
</li>-->
<li class="treeview">
<a href="#">

<span>Students</span>

</a>
<ul class="treeview-menu">
<li><a href="view_all_student.php"></i>View All Students</a></li>
<!--<li><a href="#"><i class="fa fa-plus-square "></i>View Available Students</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>view Assigned Students</a></li>-->
</ul>
</li>
<li class="treeview">
<a href="view_complaint.php">

<span>complaints</span>

</a>
</li>
<!--<li class="treeview">
<a href="#">
<i class="fa fa-edit"></i>
<span>Reviews</span>
<i class="fa fa-angle-left pull-right"></i>
</a>
</li>-->
<li class="treeview">
<a href="changepass.php?action=admin">

<span>change Password</span>

</a>
<!--<ul class="treeview-menu">
<li><a href="#"><i class="fa fa-table"></i>View Discounts</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>Add Discounts</a></li>
</ul>-->
</li>
<li class="treeview">
<a href="logout.php">

<span>Logout</span>

</a>
</li>
</ul>
</section>
<!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1></i>
Complaint
<small>Detailes tables</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"></i>Complaint</a></li>
</ol>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-header">
<h1 class="box-title">
<a></i><b>All Complaints List</b></a>
</h1>
</div>	
<div class="box-body">
<table id="example1"  class="table table-bordered table-striped">
<thead>

<tr>
<th>Complaint ID</th>
<th>Email ID</th>
<th>Subject Name</th>
<th>Tutor Name</th>
<th>Description</th>
<th>operation</th>
</tr>
</thead>
<tbody>
<script>
function displayField(ctrl,ctrl1,ctrl2){
	ctrl.style.display='block';
	ctrl1.style.display='block';
	ctrl2.style.display='none';
}
</script>
<?php
$sql = "select * from complaint where status='pending'";
$res=mysql_query($sql);
$i=1;
while($rs=mysql_fetch_array($res)) {
?>
	
<tr>
<form method="post" action="insert_data.php">
<td><?=$rs['complaint_id']?><input type="hidden" name="complaint_id" value="<?=$rs['complaint_id']?>"></td>
<td><?=$rs['emailid']?><input type="hidden" name="emailid" value="<?=$rs['complaint_id']?>"></td>
<td><?=$rs['subject_name']?><input type="hidden" name="subject_name" value="<?=$rs['complaint_id']?>"></td>
<td><?=$rs['tutor_name']?><input type="hidden" name="tutor_name" value="<?=$rs['complaint_id']?>"></td>
<td><?=$rs['description']?><input type="hidden" name="description" value="<?=$rs['complaint_id']?>"></td>
<td>
<textarea rows="4" name="reply" style='display:none' cols="30" id="<?='d'.$i?>"></textarea><br>
<button type="submit" style='display:none' name="action"  id="<?='b'.$i?>" value="reply">Reply</button>
<button  type="button" value="reply"  onclick="displayField(<?='d'.$i?>,<?='b'.$i?>,this)">Reply</button>
</td>
</form>
</tr>
<?php
$i++;
}
?>

</tbody>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Create the tabs -->
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
<!-- Home tab content -->
<div class="tab-pane" id="control-sidebar-home-tab">
<h3 class="control-sidebar-heading">Recent Activity</h3>
<ul class="control-sidebar-menu">
<li>
<a href="javascript::;">
<i class="menu-icon fa fa-birthday-cake bg-red"></i>
<div class="menu-info">
<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
<p>Will be 23 on April 24th</p>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<i class="menu-icon fa fa-user bg-yellow"></i>
<div class="menu-info">
<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
<p>New phone +1(800)555-1234</p>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
<div class="menu-info">
<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
<p>nora@example.com</p>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<i class="menu-icon fa fa-file-code-o bg-green"></i>
<div class="menu-info">
<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
<p>Execution time 5 seconds</p>
</div>
</a>
</li>
</ul><!-- /.control-sidebar-menu -->

<h3 class="control-sidebar-heading">Tasks Progress</h3>
<ul class="control-sidebar-menu">
<li>
<a href="javascript::;">
<h4 class="control-sidebar-subheading">
Custom Template Design
<span class="label label-danger pull-right">70%</span>
</h4>
<div class="progress progress-xxs">
<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<h4 class="control-sidebar-subheading">
Update Resume
<span class="label label-success pull-right">95%</span>
</h4>
<div class="progress progress-xxs">
<div class="progress-bar progress-bar-success" style="width: 95%"></div>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<h4 class="control-sidebar-subheading">
Laravel Integration
<span class="label label-warning pull-right">50%</span>
</h4>
<div class="progress progress-xxs">
<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
</div>
</a>
</li>
<li>
<a href="javascript::;">
<h4 class="control-sidebar-subheading">
Back End Framework
<span class="label label-primary pull-right">68%</span>
</h4>
<div class="progress progress-xxs">
<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
</div>
</a>
</li>
</ul><!-- /.control-sidebar-menu -->
</div><!-- /.tab-pane -->
<!-- Stats tab content -->
<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
<!-- Settings tab content -->
<div class="tab-pane" id="control-sidebar-settings-tab">
<form method="post">
<h3 class="control-sidebar-heading">General Settings</h3>
<div class="form-group">
<label class="control-sidebar-subheading">
Report panel usage
<input type="checkbox" class="pull-right" checked />
</label>
<p>
Some information about this general settings option
</p>
</div><!-- /.form-group -->
<div class="form-group">
<label class="control-sidebar-subheading">
Allow mail redirect
<input type="checkbox" class="pull-right" checked />
</label>
<p>
Other sets of options are available
</p>
</div><!-- /.form-group -->
<div class="form-group">
<label class="control-sidebar-subheading">
Expose author name in posts
<input type="checkbox" class="pull-right" checked />
</label>
<p>
Allow the user to show his name in blog posts
</p>
</div><!-- /.form-group -->
<h3 class="control-sidebar-heading">Chat Settings</h3>
<div class="form-group">
<label class="control-sidebar-subheading">
Show me as online
<input type="checkbox" class="pull-right" checked />
</label>
</div><!-- /.form-group -->
<div class="form-group">
<label class="control-sidebar-subheading">
Turn off notifications
<input type="checkbox" class="pull-right" />
</label>
</div><!-- /.form-group -->
<div class="form-group">
<label class="control-sidebar-subheading">
Delete chat history
<a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
</label>
</div><!-- /.form-group -->
</form>
</div><!-- /.tab-pane -->
</div>
</aside><!-- /.control-sidebar --><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<footer class="main-footer">
<div class="pull-right hidden-xs">

</div>

</footer>
<script src="./plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="./plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="./plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="./plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="./dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
$("#example1").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false
});
});
</script>
</body>
</html>
