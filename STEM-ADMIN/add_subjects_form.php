<?php
session_start();
if (empty($_SESSION['adminuser']))
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
          <h1>
            Add New Subjects
          </h1>
          <!--<ol class="breadcrumb">
            <li><a href="brands.php"><i class="fa fa-dashboard"></i>Brands</a></li>
            <li><a href="add_Brands.php">Add New Brands</a></li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
<h3 class="box-title"> 
<a></i><b>Add Subject</b></a>
</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               <form role="form" action="insert_data1.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                     	<div class="form-group">
                     	<label>Subject Name</label>
                    	 <input type="text" class="form-control" name="subject" placeholder="subject Name" />
                     	</div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" name="action" value="new_subject" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

             
            
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    </div><!-- ./wrapper -->
<footer class="main-footer">
<div class="pull-right hidden-xs">
<b></b> 
</div>

</footer>
    <!-- jQuery 2.1.4 -->
    <script src="./plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="./plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
