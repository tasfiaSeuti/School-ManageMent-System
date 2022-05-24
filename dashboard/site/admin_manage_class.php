
<?php
error_reporting(0);
include 'connection.php';
if (isset($_POST['update_class'])) {
	$islogin=1;
  $class_name=$_POST['class_name'];
  $numeric_name=$_POST['numeric_name'];
  $class_id=$_POST['class_id'];
}
?>
<?php
if (isset($_POST['delete_class']))
{
  $class_id=$_POST['class_id'];
  $sql = "DELETE FROM admin_manage_class WHERE id=$class_id";
  $result = $con->query($sql);
  if($result){
    echo "Successfully deleted";
  }else{
    echo "Delete operation failed";
  }
}
?>
<?php
//update class
include 'connection.php';
if (isset($_POST['update_class_info'])) {
  $class_name=$_POST['class_name'];
  $numeric_name=$_POST['numeric_name'];
  $class_id=$_POST['class_id'];
  $editQuery = "UPDATE admin_manage_class SET class_name='$class_name', numeric_name='$numeric_name' WHERE id=$class_id";
    $result = $con->query($editQuery);
    if($result){
      echo "successful update";
    }else{
      echo "not successful update";
    }
}
?>
<?php
//insert class in database
include 'connection.php';
if (isset($_POST["submit_class"])) {
	$class_name=$_POST["class_name"];
	$numeric_name=$_POST["numeric_name"];
	$sql_for_admin_add_class="INSERT INTO admin_manage_class VALUES ('','$class_name','$numeric_name')";
          $result_for_admin_add_class=$con->query($sql_for_admin_add_class);
          if($result_for_admin_add_class){
        echo "insert";
            
        }else{
          echo "Failed";
           }
}
?>
<?php
$sql_for_show_class="SELECT * FROM admin_manage_class";
$result_for_show_class=$con->query($sql_for_show_class);

?>

<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/lorvens/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jun 2018 21:06:33 GMT -->
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lorvens-Bootstrap Admin Dashboard and UI kit</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/red.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="css/jquery-jvectormap.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- Color Changer -->
	<div class="theme-settings" id="switcher">
		<span class="theme-click">
			<img src="images/color-pallete.png" alt="color pallete">
		</span>
		<span class="theme-color theme-default theme-active" data-color="green"></span>
		<span class="theme-color theme-blue" data-color="blue"></span>
		<span class="theme-color theme-red" data-color="red"></span>
		<p>(Or) Your Color</p>
	</div>
	<!-- /Color Changer -->
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar" class="lorvens-bg">
			<div class="sidebar-header">
				<a href="index.html"><img src="images/logo.png" class="logo" alt="logo"></a>
				<a href="index.html"><img src="images/minimal-logo.png" class="minimal-logo" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
				<li class="active">
					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="true">
						<span class="ti-home"></span> Dashboard
					</a>
					<ul class="collapse list-unstyled show" id="nav-dashboard">
						<li>
							<a href="index.html">Default</a>
						</li>
						<li>
							<a href="admin_teacher.php">add Teacher</a>
						</li>
						<li>
							<a href="admin_course.php"> add course</a>
						</li>
						<li>
							<a href="admin_approve_student_profile.php"> approve student</a>
						</li>
						<li>
								<a href="online_exam.php">Online exam</a></li>
									
						</li>
					</ul>
				</li>
				<li class="nav-level-one">
					<a href="#nav-uiKit" data-toggle="collapse" aria-expanded="false">
						<span class="ti-layout-tab"></span> UI Kit
					</a>
					<ul class="list-unstyled collapse" aria-expanded="true" id="nav-uiKit">
						<li>
							<a href="typography.html">Typography</a>
						</li>
						<li>
							<a href="buttons.html">Buttons</a>
						</li>
						<li>
							<a href="cards.html">Cards</a>
						</li>
						<li>
							<a href="tabs.html">Tabs</a>
						</li>
						<li>
							<a href="accordions.html">Accordions</a>
						</li>
						<li>
							<a href="modals.html">Modals</a>
						</li>
						<li>
							<a href="lists.html">Lists &amp; Media Object</a>
						</li>
						<li>
							<a href="grid.html">Grid</a>
						</li>
						<li>
							<a href="progress-bars.html">Progress Bars</a>
						</li>
						<li>
							<a href="notifications-alerts.html">Notifications &amp; Alerts</a>
						</li>
						<li>
							<a href="pagination.html">Pagination</a>
						</li>
						<li>
							<a href="carousel.html">Carousel</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="tables.html">
						<span class="ti-layout-menu-v"></span> Tables
					</a>
				</li>
				<li>
					<a href="#nav-charts" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pie-chart"></span> Charts
					</a>
					<ul class="collapse list-unstyled" id="nav-charts">
						<li>
							<a href="charts-1.html">Morris</a>
						</li>
						<li>
							<a href="charts-2.html">Flot</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-maps" data-toggle="collapse" aria-expanded="false">
						<span class="ti-location-pin"></span> Maps
					</a>
					<ul class="collapse list-unstyled" id="nav-maps">
						<li>
							<a href="map-1.html">Google Maps</a>
						</li>
						<li>
							<a href="map-2.html">Vector Maps</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="forms.html">
						<span class="ti-layout-media-overlay-alt-2"></span> Forms
					</a>
				</li>
				<li>
					<a href="#nav-icons" data-toggle="collapse" aria-expanded="false">
						<span class="ti-themify-favicon"></span> icons
					</a>
					<ul class="collapse list-unstyled" id="nav-icons">
						<li>
							<a href="font-awesome.html">Font Awesome </a>
						</li>
						<li>
							<a href="themify.html">Themify</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-pages" data-toggle="collapse" aria-expanded="false">
						<span class="ti-file"></span> Other Pages
					</a>
					<ul class="collapse list-unstyled" id="nav-pages">
						<li>
							<a href="login.html">Login </a>
						</li>
						<li>
							<a href="sign-up.html">Sign Up</a>
						</li>
						<li>
							<a href="404.html">404</a>
						</li>
						<li>
							<a href="blank-page.html">Blank Page</a>
						</li>
						<li>
							<a href="pricing.html">Pricing</a>
						</li>
						<li>
							<a href="faq.html">FAQ</a>
						</li>
						<li>
							<a href="invoice.html">Invoice</a>
						</li>
						<li>
							<a href="blank-page.html">Coming Soon</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="nav-help animated fadeIn">
				<h5>Need Help</h5>
				<h6>
					<span class="ti-mobile"></span> +1 1234 567 890</h6>
				<h6>
					<span class="ti-email"></span> email@site.com</h6>
				<p class="copyright-text">Copy rights &copy; 2018</p>
			</div>
		</nav>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<span class="ti-menu" id="sidebarCollapse"></span>
					</div>
					<ul class="nav justify-content-end">
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target=".lorvens-modal-lg">
								<span class="ti-search"></span>
							</a>
							<div class="modal fade lorvens-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content lorvens-box-shadow">
										<div class="modal-header">
											<h5 class="modal-title">Serach Client/Project:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens lorvens-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu lorvens-box-shadow notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-comment-alt"></span> New User Registered</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Client asked to send Quotaion</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span> Have schedule meeting today</a>
								<a class="dropdown-item" href="#">
									<span class="ti-comment-alt"></span> New User Registered</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu lorvens-box-shadow profile animated flipInY">
								<h5>John Willing</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
								<a class="dropdown-item" href="#">
									<span class="ti-power-off"></span> Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">
						<!-- <span class="ti-home"></span> -->
					</a>
				</li>
				<!-- <li class="breadcrumb-item active">Dashboard</li> -->
			</ol>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid home">
				<!-- Page Title -->
				<div class="row">
					<!-- <div class="col-md-12">
						<h3 class="block-title">Quick Statistics</h3>
					</div> -->
				</div>
				<!-- /Page Title -->

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-red">
							<div class="widget-left">
								<!-- <span class="ti-money"></span> -->
							</div>
							<!-- <div class="widget-right">
								<h4 class="wiget-title">Open Payments</h4>
								<span class="numeric color-red">$8348</span>
							</div> -->
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-blue">
							<div class="widget-left">
								<!-- <span class="ti-user"></span> -->
							</div>
							<!-- <div class="widget-right">
								<h4 class="wiget-title">New Users</h4>
								<span class="numeric color-blue">258</span>
							</div> -->
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-green">
							<div class="widget-left">
								<!-- <span class="ti-bar-chart"></span> -->
							</div>
							<!-- <div class="widget-right">
								<h4 class="wiget-title">Avg Revenue</h4>
								<span class="numeric color-green">$6585</span>
							</div> -->
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-yellow">
							<div class="widget-left">
								<!-- <span class="ti-thumb-up"></span> -->
							</div>
							<!-- <div class="widget-right">
								<h4 class="wiget-title">Total Projects</h4>
								<span class="numeric color-yellow">73</span>
							</div> -->
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
<!-- 					<div class="col-md-6">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Projects Year by Year</h3>
							<div id="lineMorris" class="chart-home"></div>
						</div>
					</div> -->
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<!-- <div class="col-md-6">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Clients Year by Year</h3>
							<div id="barMorris" class="chart-home"></div>
						</div>
					</div> -->
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">manage class</h3>
							<!-- add class-->
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">add class</button>

								  <!-- Modal -->
								  <div class="modal fade" id="myModal" role="dialog">
								    <div class="modal-dialog">
								    
								      <!-- Modal content-->
								      <div class="modal-content">
								        <div class="modal-header">
								         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
								          <h4 class="modal-title">add class</h4>
								        </div>
								        <form method="post" action="">
								        <div class="modal-body">
								          <input type="text" name="class_name" placeholder="class name">
								          <input type="text" name="numeric_name" placeholder="numeric name">
								          <input type="submit" name="submit_class">
								        </div>
								        </form>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								        </div>
								      </div>
								      
								    </div>
								  </div>

                                <!--add class end here...-->
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>class name</th>
											<th>numeric name</th>
											<th>action</th>
										</tr>
									</thead>
									<?php
									//update check 
									 if ($islogin==1) 
									 	{ 
									 		?>
                                        <tbody>
									<form method="post" action="" enctype="multipart/form-data">
										<tr>
											
											<td>
												 <input type="text" name="class_name" class="form-control" style="width: 100px;" value="<?php echo $class_name;?>">
											</td>
											<td>
												 <input type="text" name="numeric_name" class="form-control" style="width: 100px;" value="<?php echo $numeric_name ?>">
											</td>
											
											
											<td>
												<button type="submit" name="update_class_info" class="btn btn-success">update</button>
											</td>
											<td>
												<input type="hidden" name="class_id" value="<?php echo $class_id ?>">
											</td>
										</tr>
									</form>	
									</tbody>
								<?php 
								//update button check...
								} 
								?>

									<?php  
							          //show class start here....................
							            while ($row_for_show_class= $result_for_show_class->fetch_assoc()) {
							          ?>
									<form method="post" action="">
									<tbody>
										
										<tr>
											<td>
												
												<?php echo $row_for_show_class['class_name']?>
												
											</td>
											<td>
												
												<?php echo $row_for_show_class['numeric_name']?>
													
											</td>
											
											<td>
												<button type="submit" class="btn btn-danger" name="delete_class">delete</button>
												<button type="submit" class="btn btn-warning" name="update_class">update</button>
											</td>
											<td>
												<input type="hidden" name="class_id" value="<?php echo $row_for_show_class['id']?>">
												<input type="hidden" name="class_name" value="<?php echo $row_for_show_class['class_name']?>">
												<input type="hidden" name="numeric_name" value="<?php echo $row_for_show_class['numeric_name']?>">
											</td>
											
										</tr>
									</tbody>
									</form>
									 <?php
							           //show class end here.........................    
							            }
							          ?>
								</table>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					<!-- <div class="col-sm-6">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Donut Chart</h3>
							<div id="donutMorris" class="chart-home"></div>
						</div> -->
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-6">
							<div class="widget-area-2 progress-status lorvens-box-shadow">
								<!-- <h3 class="widget-title">Project Status</h3>
								<span>Project one</span>
								<div class="progress">
									<div class="progress-bar width-pb10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
								</div> -->
								<!-- <span>Project Two</span>
								<div class="progress">
									<div class="progress-bar bg-success width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div> -->
								<!-- <span>Project Three</span>
								<div class="progress">
									<div class="progress-bar bg-info width-pb50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> -->
								</div>
								<!-- <span>Project Four</span>
								<div class="progress">
									<div class="progress-bar bg-warning width-pb75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div> -->
								
							</div>
						</div>
						<!-- /Widget Item -->
					
				</div>
		
				<div class="row">
					
					<!-- Widget Item -->
					<div class="col-sm-12">
							<!-- <div class="widget-area-2 lorvens-box-shadow">
								<h3 class="widget-title">Maps</h3>
								<div id="world-map-maker" class="big-world-mill"></div>
							</div> -->
						</div>
						<!-- /Widget Item -->
				</div>		
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
			<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="js/bootstrap.min.js"></script>
	<!-- morris charts -->
	<script src="charts/js/raphael-min.js"></script>
	<script src="charts/js/morris.min.js"></script>
	<script src="js/custom-morris.js"></script>
	<!-- jvectormap -->
	<script src="js/jquery-jvectormap.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill.js"></script>
	<script src="js/custom-vector.js"></script>
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>


<!-- Mirrored from www.konnectplugins.com/lorvens/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jun 2018 21:07:10 GMT -->
</html>