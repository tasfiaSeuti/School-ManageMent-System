
<?php
//show all teaacher 
error_reporting(0);
include 'connection.php';
$sql_for_show_teacher="SELECT * FROM admin_teacher";
$result_for_show_teacher=$con->query($sql_for_show_teacher);
?>
<?php
include 'connection.php';
if (isset($_POST['update_teacher'])) {
	$islogin=1;
  $name=$_POST['name'];
  $profession=$_POST['profession'];
  $details=$_POST['details'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $birth_date=$_POST['birth_date'];
  $joining_date=$_POST['joining_date'];
  $salary=$_POST['salary'];
  $status=$_POST['status'];

  $teacher_id=$_POST['teacher_id'];
  //echo $teacher_id;
  // $editQuery = "UPDATE admin_teacher SET name='$name', profession='$profession', details='$details' WHERE id=$teacher_id";
  //   $result = $con->query($editQuery);
  //   if($result){
  //     echo "successful update";
  //   }else{
  //     echo "not successful update";
  //   }
}
?>
<?php
include 'connection.php';
if (isset($_POST['update_teacher_info'])) {
  $name=$_POST['teacher_name'];
  $profession=$_POST['profession'];
  $details=$_POST['details'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $birth_date=$_POST['birth_date'];
  $joining_date=$_POST['joining_date'];
  $salary=$_POST['salary'];
  $status=$_POST['status'];

  $teacher_id=$_POST['teacher_id'];
  $editQuery = "UPDATE admin_teacher SET name='$name', profession='$profession', details='$details', phone='$phone', email='$email', birth_date='$birth_date', joining_date='$joining_date', salary='$salary', salary='$salary' WHERE id=$teacher_id";
    $result = $con->query($editQuery);
    if($result){
      echo "successful update";
    }else{
      echo "not successful update";
    }
}
?>
<?php
//add teacher....
include 'connection.php';
if (isset($_POST['submit_teacher'])){
  //$name=$_POST["name"];
  $teacher_name=$_POST['teacher_name'];
  $profession=$_POST["profession"];
  $details=$_POST["datails"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
  $birth_date=$_POST["birth_date"];
  $joining_date=$_POST["joining_date"];
  $salary=$_POST["salary"];
  $status=$_POST["status"];
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
      $sql="INSERT INTO admin_teacher VALUES ('','$name','$teacher_name','$profession','$details','$phone','$email','$birth_date','$joining_date','$salary','$status','$date')";
          $result=$con->query($sql);
          if($result){
        echo "insert";
            
        }else{
          echo "Failed";
           }

}

?>
<!--admin teacher end here.............-->
<?php
if (isset($_POST['delete_teacher']))
{
  $teacher_id=$_POST['teacher_id'];
  $sql = "DELETE FROM admin_teacher WHERE id=$teacher_id";
  $result = $con->query($sql);
  if($result){
    echo "Successfully deleted";
  }else{
    echo "Delete operation failed";
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

	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
							<a href="admin_teacher.php">add teacher</a>
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
						<span class="ti-home"></span>
					</a>
				</li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid home">
				<!-- Page Title -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="block-title">Quick Statistics</h3>
					</div>
				</div>
				<!-- /Page Title -->

				
					<!-- /Widget Item -->
					<!-- Widget Item -->
					
					<!-- /Widget Item -->
					<!-- Widget Item -->
					
					<!-- /Widget Item -->
					<!-- Widget Item -->
					
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					
					<!-- /Widget Item -->
					<!-- Widget Item -->
					
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12" >
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">add teacher</h3>
							<div class="table-responsive">
								<table class="table" id="myScrollspy">
									<thead>
										<tr>
											<th>image</th>
											<th>name</th>
											<th>profession</th>
											<th>details</th>
											<th>phone</th>
											<th>email</th>
											<th>Birth Date</th>
											<th>joining date</th>
											<th>salary</th>
											<th>status</th>
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
											    <label class="btn btn-primary" for="my-file-selector">
												    <input id="my-file-selector" name="file" type="file">
												    image
												</label>
											</td>
											<td>
												 <input type="text" name="teacher_name" class="form-control" style="width: 100px;" value="<?php echo $name;?>">
											</td>
											<td>
												 <!-- <input type="text" name="profession" class="form-control" style="width: 100px;" value="<?php echo $profession ?>"> -->
												 <select name="profession">
												 	<?php
                                                     //show subject in database..
												 	$sql_for_show_subject="SELECT * FROM subject";
                                                    $result_for_show_subject=$con->query($sql_for_show_subject);
                                                    while ($row_for_show_subject= $result_for_show_subject->fetch_assoc()) {
												 	?>
												 	<option>
												 		<?php echo $row_for_show_subject['subject_name'];?>
												 	</option>
												 	<?php
												        //end show subject name in database...
												         }
				                                        $i++;
												        ?>
												 </select>
											</td>
											<td>
												 <input type="text" name="details" class="form-control" style="width: 200px;" value="<?php echo $details ?>">
											</td>

                                           <td>
												 <input type="text" name="phone" class="form-control" style="width: 200px;" value="<?php echo $phone ?>">
											</td>
											<td>
												 <input type="email" name="email" class="form-control" style="width: 200px;" value="<?php echo $email ?>">
											</td>

											<td>
												<input id="date" type="date" name="birth_date" value="2017-06-01">
											</td>
											<td>
												<input id="date" type="date" name="joining_date" value="2017-06-01">
											</td>
											<td>
												 <input type="text" name="salary" class="form-control" style="width: 200px;" value="<?php echo $salary ?>">
											</td>
											<td>
												  <select name="status">
												 	<option >available</option>
												 	<option >unavilable</option>
												 </select>	
												 
											</td>



											<td>
												<input type="hidden" name="teacher_id" value="<?php echo $teacher_id ?>">
											</td>
											<td>
												<button type="submit" name="update_teacher_info" class="btn btn-success">update</button>
											</td>
										</tr>
									</form>	
									</tbody>
								<?php 
								//update button check...
								} 
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
												 <input type="text" name="teacher_name" class="form-control" style="width: 100px;">
											</td>
											<td>
												 <!-- <input type="text" name="profession" class="form-control" style="width: 100px;"> -->
												 <select name="profession">
												 	<?php
                                                     //show subject in database..
												 	$sql_for_show_subject="SELECT * FROM subject";
                                                    $result_for_show_subject=$con->query($sql_for_show_subject);
                                                    while ($row_for_show_subject= $result_for_show_subject->fetch_assoc()) {
												 	?>
												 	<option>
												 		<?php echo $row_for_show_subject['subject_name'];?>
												 	</option>
												 	<?php
												        //end show subject name in database...
												         }
				                                        $i++;
												        ?>
												 </select>
											</td>
											<td>
												 <input type="text" name="datails" class="form-control" style="width: 200px;">
											</td>
											<td>
												 <input type="text" name="phone" class="form-control" style="width: 200px;">
											</td>
											<td>
												 <input type="email" name="email" class="form-control" style="width: 200px;">
											</td>

											<td>
												<input id="date" type="date" name="birth_date" value="2017-06-01">
											</td>
											<td>
												<input id="date" type="date" name="joining_date" value="2017-06-01">
											</td>
											<td>
												 <input type="text" name="salary" class="form-control" style="width: 200px;">
											</td>
											<td>
												  <select name="status">
												 	<option >available</option>
												 	<option >unavilable</option>
												 </select>	
												 
											</td>
											<td>
												<button type="submit" name="submit_teacher" class="btn btn-success">submit</button>
											</td>
										</tr>
									</tbody>
									</form> 	
										<?php  
							              //admin teacher add start here  
							              while ($row_for_show_teacher= $result_for_show_teacher->fetch_assoc())
							              	//show teacher quiery....
							               {
							            ?>
							        <form method="post" action="">   
                                    <tbody>
										<tr>
											<td>
												<img src="../../uploads/<?php echo $row_for_show_teacher['image']?>" class="img-responsive" alt="Cinque Terre" width="100" height="50">
											</td>
											<td>
												<?php echo $row_for_show_teacher['name']?>
												<input type="hidden" name="name" value="<?php echo $row_for_show_teacher['name']?>">
											</td>
											<td>
												<?php echo $row_for_show_teacher['profession']?>
												<input type="hidden" name="profession" value="<?php echo $row_for_show_teacher['profession']?>">
											</td>
											<td>
												<?php echo $row_for_show_teacher['details']?>
												<input type="hidden" name="details" value="<?php echo $row_for_show_teacher['details']?>">
											</td>
											<td>
												<?php echo $row_for_show_teacher['phone']?>
												<input type="hidden" name="phone" value="<?php echo $row_for_show_teacher['phone']?>">
											</td>
											<td>
												<?php echo $row_for_show_teacher['email']?>
												<input type="hidden" name="email" value="<?php echo $row_for_show_teacher['email']?>">
											</td>
											<td>
												<?php echo $row_for_show_teacher['birth_date']?>
												<input type="hidden" name="birth_date" value="<?php echo $row_for_show_teacher['birth_date']?>">
											</td>
											<td>
												<?php echo $row_for_show_teacher['joining_date']?>
												<input type="hidden" name="joining_date" value="<?php echo $row_for_show_teacher['joining_date']?>">
											</td>
											<td>
												<?php echo $row_for_show_teacher['salary']?>
												<input type="hidden" name="salary" value="<?php echo $row_for_show_teacher['salary']?>">
											</td>
											<td>
												<?php echo $row_for_show_teacher['status']?>
												<input type="hidden" name="status" value="<?php echo $row_for_show_teacher['status']?>">
											</td>
											<td>
												 <input type="hidden" name="teacher_id" value="<?php echo $row_for_show_teacher['id']?>">
											</td>
											<td>
												<button type="submit" class="btn btn-danger" name="delete_teacher">delete</button>
												<button type="submit" class="btn btn-warning" name="update_teacher">update</button>

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
								</table>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					<div class="col-sm-6">
						<!-- <div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Donut Chart</h3>
							<div id="donutMorris" class="chart-home"></div>
						</div> -->
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-6">
							<!-- <div class="widget-area-2 progress-status lorvens-box-shadow">
								<h3 class="widget-title">Project Status</h3>
								<span>Project one</span>
								<div class="progress">
									<div class="progress-bar width-pb10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Two</span>
								<div class="progress">
									<div class="progress-bar bg-success width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Three</span>
								<div class="progress">
									<div class="progress-bar bg-info width-pb50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Four</span>
								<div class="progress">
									<div class="progress-bar bg-warning width-pb75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								
							</div> -->
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