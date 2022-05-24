<?php
error_reporting(0);
//add student....
include 'connection.php';
if (isset($_POST['submit_student'])){
  $first_name=$_POST['first_name'];
  $last_name=$_POST["last_name"];
  $date_of_birth=$_POST["date_of_birth"];
  $age=$_POST["age"];
  $contract=$_POST["contract"];
  $email=$_POST["email"];
  $address=$_POST["address"];
  $city=$_POST["city"];
  $country=$_POST["country"];
  $register_date=$_POST["register_date"];
  $class=$_POST["class"];
  $section=$_POST["section"];
    //hash tag for image name change..
    date_default_timezone_set('Asia/Dhaka');
  date_default_timezone_set('Asia/Dhaka');
  $date=date('l,jS F,Y,g:i a');
  date_default_timezone_set("America/New_York");
    $string = "The time is " . date("h:i:sa");
    $imageFileName =  hash('md5', $string);


    $_FILES['file']['name'] = $imageFileName.'.jpg';
    $name=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    $type=$_FILES['file']['type'];
    if ($type === "image/jpeg" || $type === "image/jpg" || $type === "image/png" || $type === "image/ANI" || $type === "image/BMP" || $type === "image/CAL" || $type === "image/FAX" || $type === "image/GIF" || $type === "image/IMG" || $type === "image/JBG" || $type === "image/JPE" || $type === "image/MAC" || $type === "image/PBM" || $type === "image/PCD" || $type === "image/PCX" || $type === "image/PCT" || $type === "image/PGM" || $type === "image/PPM"
      || $type === "image/PSD" || $type === "image/RAS" || $type === "image/TGA" || $type === "image/TIFF" || $type === "image/WMF") { //check image extantion..
      move_uploaded_file($temp, "../../uploads/".$name);
    }
    else
    {
      echo "only .jpeg or .jpg or .png image upload";
    }
      $sql="INSERT INTO admin_student VALUES ('','$first_name','$last_name','$date_of_birth','$age','$contract','$email','$address','$city','$country','$register_date','$class','$section','$name','$date')";
          $result=$con->query($sql);
          if($result){
        echo "insert";
            
        }else{
          echo "Failed";
           }

}

?>
<!--admin student end here.............-->

<?php
include 'connection.php';
if (isset($_POST['update_student'])) {
	$islogin=1;
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $date_of_birth=$_POST['date_of_birth'];
  $age=$_POST['age'];
  $contract=$_POST['contract'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $country=$_POST['country'];
  $register_date=$_POST['register_date'];
  $class=$_POST['class'];
  $section=$_POST['section'];
  $student_id=$_POST['student_id'];
}
?>
<?php
include 'connection.php';
if (isset($_POST['update_student_info'])) {
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $date_of_birth=$_POST['date_of_birth'];
  $age=$_POST['age'];
  $contract=$_POST['contract'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $country=$_POST['country'];
  $register_date=$_POST['register_date'];
  $class=$_POST['class'];
  $section=$_POST['section'];
  $stuent_id=$_POST['stuent_id'];
  $editQuery = "UPDATE admin_student SET first_name='$first_name', last_name='$last_name', date_of_birth='$date_of_birth', age='$age', contract='$contract', email='$email', address='$address', city='$city', country='$country', register_date='$register_date', class='$class', section='$section' WHERE id=$stuent_id";
    $result = $con->query($editQuery);
    if($result){
      echo "successful update";
    }else{
      echo "not successful update";
    }
}
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
							<h3 class="widget-title">manage student</h3>
							<!-- add class-->
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">add student</button>

								  <!-- Modal -->
								  <div class="modal fade" id="myModal" role="dialog">
								    <div class="modal-dialog">
								    
								      <!-- Modal content-->
								      <div class="modal-content">
								        <div class="modal-header">
								         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
								          <h4 class="modal-title">add student</h4>
								        </div>
								        <form method="post" action="" enctype="multipart/form-data">
								        <div class="modal-body">
								          <input type="text" name="first_name" placeholder="first name">
								          <input type="text" name="last_name" placeholder="last name">
								           <input type="date" name="date_of_birth" placeholder="date of birth">
								            <input type="text" name="age" placeholder="Age">
								             <input type="number" name="contract" placeholder="contract">
								              <input type="email" name="email" placeholder="email">
								               <input type="text" name="address" placeholder="address">
								                <input type="text" name="city" placeholder="city">
								                 <input type="text" name="country" placeholder="country">
								                  <input type="date" name="register_date" placeholder="register_date">
								                   <label>class:</label>
											          <select name="class">
											          	<?php
											          	include 'connection.php';
											        	//show class name in database

														$sql_for_show_class="SELECT * FROM admin_manage_class";
                                                        $result_for_show_class=$con->query($sql_for_show_class);
			                                              while ($row_for_show_class= $result_for_show_class->fetch_assoc()) {

											        	?>
											        	
											          	<option><?php echo $row_for_show_class['class_name'];?></option></br>
											          	<?php
											        //end show class name in database...
											         }
			                                        $i++;
											        ?>
											          </select>
											          <label>section:</label>	
		                                          <select name="section">
		                                          	<?php
										        	//show section name in database

													$sql_for_show_section="SELECT * FROM admin_manage_section";
													$result_for_show_section=$con->query($sql_for_show_section);
													
		                                              while ($row_for_show_section= $result_for_show_section->fetch_assoc()) {

										        	?>
										        	
										          	<option><?php echo $row_for_show_section['section_name'];?></option></br>
										          	 <?php
										        //end show section name in database...
										         }
		                                        $i++;
		                                        ?>
										          </select>
								                     <input type="file" name="file" placeholder="image">
								          <input type="submit" name="submit_student">
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
											<th>image</th>
											<th>first name</th>
											<th>last name</th>
											<th>date of birth</th>
											<th>age</th>
											<th>contract</th>
											<th>email</th>
											<th>address</th>
											<th>city</th>
											<th>country</th>
											<th>register date</th>
											<th>class</th>
											<th>section</th>

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
											    <label class="btn btn-primary" for="my-file-selector">
												    <input id="my-file-selector" name="file" type="file">
												    image
												</label>
											</td>
											<td>
												 <input type="text" name="first_name" class="form-control" style="width: 100px;" value="<?php echo $first_name;?>">
											</td>
											
											<td>
												 <input type="text" name="last_name" class="form-control" style="width: 200px;" value="<?php echo $last_name ?>">
											</td>

                                           <td>
												 <input type="text" name="date_of_birth" class="form-control" style="width: 200px;" value="<?php echo $date_of_birth ?>">
											</td>
											<td>
												 <input type="text" name="age" class="form-control" style="width: 200px;" value="<?php echo $age ?>">
											</td>

											<td>
												 <input type="text" name="contract" class="form-control" style="width: 200px;" value="<?php echo $contract ?>">
											</td>
											<td>
												 <input type="text" name="email" class="form-control" style="width: 200px;" value="<?php echo $email ?>">
											</td>
											<td>
												 <input type="text" name="address" class="form-control" style="width: 200px;" value="<?php echo $address ?>">
											</td>
											<td>
												 <input type="text" name="city" class="form-control" style="width: 200px;" value="<?php echo $city ?>">
											</td>
											<td>
												 <input type="text" name="country" class="form-control" style="width: 200px;" value="<?php echo $country ?>">
											</td>
											<td>
												 <input type="text" name="register_date" class="form-control" style="width: 200px;" value="<?php echo $register_date ?>">
											</td>
											<td>
												 <select name="class">
											          	<?php
											          	include 'connection.php';
											        	//show class name in database

														$sql_for_show_class="SELECT * FROM admin_manage_class";
                                                        $result_for_show_class=$con->query($sql_for_show_class);
			                                              while ($row_for_show_class= $result_for_show_class->fetch_assoc()) {

											        	?>
											        	
											          	<option><?php echo $row_for_show_class['class_name'];?></option></br>
											          	<?php
											        //end show class name in database...
											         }
			                                        $i++;
											        ?>
											          </select>
											          
											</td>
											<td>
											
		                                          <select name="section">
		                                          	<?php
										        	//show section name in database

													$sql_for_show_section="SELECT * FROM admin_manage_section";
													$result_for_show_section=$con->query($sql_for_show_section);
													
		                                              while ($row_for_show_section= $result_for_show_section->fetch_assoc()) {

										        	?>
										        	
										          	<option><?php echo $row_for_show_section['section_name'];?></option></br>
										          	 <?php
										        //end show section name in database...
										         }
		                                        $i++;
		                                        ?>
										          </select>
											</td>
											<td>
												<input type="hidden" name="student_id" value="<?php echo $student_id ?>">
											</td>
											<td>
												<button type="submit" name="update_student_info" class="btn btn-success">update</button>
											</td>
										</tr>
									</form>	
									</tbody>
								<?php 
								//update button check...
								} 
								?>
									<tbody>
										
										<?php  
							              //admin student show here 
							              include 'connection.php';
											$sql_for_show_student="SELECT * FROM admin_student";
											$result_for_show_student=$con->query($sql_for_show_student); 
							              while ($row_for_show_student= $result_for_show_student->fetch_assoc())
							              	//show teacher quiery....
							               {
							            ?>
							        <form method="post" action="">   
                                    <tbody>
										<tr>
											<td>
												<img src="../../uploads/<?php echo $row_for_show_student['image']?>" class="img-responsive" alt="Cinque Terre" width="100" height="50">
											</td>
											<td>
												<?php echo $row_for_show_student['first_name']?>
												<input type="hidden" name="first_name" value="<?php echo $row_for_show_student['first_name']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['last_name']?>
												<input type="hidden" name="last_name" value="<?php echo $row_for_show_student['last_name']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['date_of_birth']?>
												<input type="hidden" name="date_of_birth" value="<?php echo $row_for_show_student['date_of_birth']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['age']?>
												<input type="hidden" name="age" value="<?php echo $row_for_show_student['age']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['contract']?>
												<input type="hidden" name="contract" value="<?php echo $row_for_show_student['contract']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['email']?>
												<input type="hidden" name="email" value="<?php echo $row_for_show_student['email']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['address']?>
												<input type="hidden" name="address" value="<?php echo $row_for_show_student['address']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['city']?>
												<input type="hidden" name="city" value="<?php echo $row_for_show_student['city']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['country']?>
												<input type="hidden" name="country" value="<?php echo $row_for_show_student['country']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['register_date']?>
												<input type="hidden" name="register_date" value="<?php echo $row_for_show_student['register_date']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['class']?>
												<input type="hidden" name="class" value="<?php echo $row_for_show_student['class']?>">
											</td>
											<td>
												<?php echo $row_for_show_student['section']?>
												<input type="hidden" name="section" value="<?php echo $row_for_show_student['section']?>">
											</td>
											<td>
												 <input type="hidden" name="student_id" value="<?php echo $row_for_show_student['id']?>">
											</td>
											<td>
												<button type="submit" class="btn btn-danger" name="delete_student">delete</button>
												<button type="submit" class="btn btn-warning" name="update_student">update</button>

											</td>
										</tr>
										
										<!-- <tr>
											<td>Codecanyon</td>
											<td>Yokahona</td>
											<td>150</td>
											<td>$1400</td>
											<td>
												<span class="badge badge-danger">Angular Js</span>
											</td>
										</tr>
										<tr>
											<td>Videohive</td>
											<td>Yokahona</td>
											<td>150</td>
											<td>$1400</td>
											<td>
												<span class="badge badge-success">Python</span>
											</td>
										</tr>
										<tr>
											<td>Themeforest</td>
											<td>Yokahona</td>
											<td>150</td>
											<td>$1400</td>
											<td>
												<span class="badge badge-warning">Dot Net</span>
											</td>
										</tr>
										<tr>
											<td>Envato</td>
											<td>Yokahona</td>
											<td>150</td>
											<td>$1400</td>
											<td>
												<span class="badge badge-danger">Angular Js</span>
											</td>
										</tr> -->
									</tbody>
									</form> 
								<?php
						                //end teacher show here....
						               
						                  }
						                ?>
									</tbody>
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