
<?php
    //connection database
	include 'connection.php'; 
	//sql query select all data from admin course..    
	$sql_for_course = "SELECT * FROM admin_course";
	//sql result query..
	$result_for_course = $con->query($sql_for_course);

?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/uoe/our-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 08:03:45 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Education</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Full Calender CSS -->
	<link href="css/fullcalendar.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<!-- Bx-Slider StyleSheet CSS -->
	<link href="css/jquery.bxslider.css" rel="stylesheet"> 
	<!-- Font Awesome StyleSheet CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="js/dl-menu/component.css" rel="stylesheet">
	<link href="svg/style.css" rel="stylesheet">
	<!-- Widget CSS -->
	<link href="css/widget.css" rel="stylesheet">
	<!-- Typography CSS -->
	<link href="css/typography.css" rel="stylesheet">
	<!-- Shortcodes CSS -->
	<link href="css/shortcodes.css" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
	<link href="style.css" rel="stylesheet">
	<!-- Color CSS -->
	<link href="css/color.css" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- SELECT MENU -->
	<link href="css/selectric.css" rel="stylesheet">
	<!-- SIDE MENU -->
	<link rel="stylesheet" href="css/jquery.sidr.dark.css">

</head>

<body>
	<!--KF KODE WRAPPER WRAP START-->
    <div class="kode_wrapper">
	    <!-- register Modal -->
	    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
	        <div class="modal-dialog">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <div class="modal-content">
	            	<!--SIGNIN AS USER START-->
	                <div class="user-box">
	                	<h2>Sign up as a User</h2>
	                    <!--FORM FIELD START-->
	                    <div class="form">
	                        <div class="input-container">
	                            <input type="text" placeholder="Name">
	                            <i class="fa fa-user"></i>
	                        </div>
	                        <div class="input-container">
	                            <input type="text" placeholder="E-mail">
	                            <i class="fa fa-envelope-o"></i>
	                        </div>
	                        <div class="input-container">
	                            <input type="password" placeholder="Password">
	                            <i class="fa fa-unlock"></i>
	                        </div>
	                        <div class="input-container">
	                            <label>
	                                <span class="radio">
	                                    <input type="checkbox" name="foo" value="1" checked>
	                                    <span class="radio-value" aria-hidden="true"></span>
	                                </span>
	                                <span>Remember me</span>
	                            </label>
	                        </div>
	                        <div class="input-container">
	                            <button class="btn-style">Sign Up</button>
	                        </div>
	                    </div>
	                    <!--FORM FIELD END-->
	                    <!--OPTION START-->
	                    <div class="option">
	                        <h5>Or Using</h5>
	                    </div>
	                    <!--OPTION END-->
	                    <!--OPTION START-->
	                    <div class="social-login">
	                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
	                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
	                    </div>
	                    <!--OPTION END-->
	                </div>
	                <!--SIGNIN AS USER END-->
	                <div class="user-box-footer">
	                    Already have an account? <a href="#">Sign In</a>
	                </div>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	        </div>
	    </div>
	    <!-- register Modal end-->
    
    <!-- SIGNIN MODEL START -->
    <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
                <div class="user-box">
                    <h2>Sign In</h2>
                    <!--FORM FIELD START-->
                    <div class="form">
                        <div class="input-container">
                            <input type="text" placeholder="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" placeholder="Password">
                            <i class="fa fa-unlock"></i>
                        </div>
                        <div class="input-container">
                            <label>
                                <span class="radio">
                                    <input type="checkbox" name="foo" value="1" checked>
                                    <span class="radio-value" aria-hidden="true"></span>
                                </span>
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="input-container">
                            <button class="btn-style">Sign In</button>
                        </div>
                    </div>
                    <!--FORM FIELD END-->
                    <!--OPTION START-->
                    <div class="option">
                        <h5>Or Using</h5>
                    </div>
                    <!--OPTION END-->
                    <!--OPTION START-->
                    <div class="social-login">
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                    </div>
                    <!--OPTION END-->
                
                </div>
                <div class="user-box-footer">
                    <p>Don't have an account?<br><a href="#">Sign up as a User</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- SIGNIN MODEL END -->
    
    <div id="sidr">
		<div class="logo_wrap">
			<a href="#"><img src="extra-images/logo.png" alt=""></a>
		</div>
		<div class="clearfix clear"></div>
		<!-- Your content -->
		<div class="kf-sidebar">
			<!--KF_SIDEBAR_SEARCH_WRAP START-->
			<div class="widget widget-search">
				<h2>Search Course</h2>
				<form>
					<input type="search" placeholder="Keyword...">
				</form>
			</div>
			<!--KF_SIDEBAR_SEARCH_WRAP END-->

			<!--KF_SIDEBAR_ARCHIVE_WRAP START-->
			<div class="widget widget-archive ">
				<h2>Archives</h2>
				<ul class="sidebar_archive_des">
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>January 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>February 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>March 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>April 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>May 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>June 2016</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-angle-right"></i>August 2016</a>
					</li>
				</ul>
			</div>
			<!--KF_SIDEBAR_ARCHIVE_WRAP END-->

			<p class="copy-right-sidr">Design and Developed by KodeForest @ All Rights Reserved by KodeForest</p>
		</div>
	</div>
    	<!--HEADER START-->
    	<header id="header_2">
    		<!--kode top bar start-->
    		<div class="top_bar_2">
	    		<div class="container">
	    			<div class="row">
	    				<div class="col-md-5">
	    					<div class="pull-left">
	    						<em class="contct_2"><i class="fa fa-phone"></i> Call Us  on 0800 123 46 4747</em>
	    					</div>
	    				</div>
	    				<div class="col-md-7">
    						<div class="lng_wrap">
	    						<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<i class="fa fa-globe"></i>Language
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#"><i><img src="images/english.jpg" alt=""></i>English</a></li>
										<li><a href="#"><i><img src="images/german.jpg" alt=""></i>German</a></li> 
									</ul>
								</div>
	    					</div>
    						<ul class="login_wrap">
    							<li><a href="#" data-toggle="modal" data-target="#reg-box"><i class="fa fa-user"></i>Register</a></li>
    							<li><a href="#" data-toggle="modal" data-target="#signin-box"><i class="fa fa-sign-in"></i>Sign In</a></li>
    						</ul>
	    					<ul class="top_nav">
	    						<li><a href="blog-detail.html">News</a></li>
	    						<li><a href="event-detail.html">Event</a></li>
	    						<li><a href="our-courses.html">Giving</a></li>
	    						<li><a href="contactus.html">contact us</a></li>
	    					</ul>
	    					
	    				</div>
	    			</div>
	    		</div>
	    	</div>
    		<!--kode top bar end-->
        	
	    	<!--kode navigation start-->
    		<div class="kode_navigation">
    			<div id="mobile-header">
                	<a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
                </div>
    			<div class="container">
    				<div class="row">
    					<div class="col-md-2">
    						<div class="logo_wrap">
    							<a href="#"><img src="extra-images/logo_2.png" alt=""></a>
    						</div>
    					</div>
    					<div class="col-md-10">
    						<!--kode nav_2 start-->
    						<div class="nav_2" id="navigation">
    							<ul>
    								<li><a href="index-2.html">home</a></li>
									<li><a href="aboutus.html">About Us</a></li>
		                            <li><a href="#">Event</a>
		                            	<ul>
		                                    <li><a href="our-event.html">our Event</a></li>
		                                    <li><a href="event-list.html">Event List</a></li>
		                                    <li><a href="event-detail.html">Event Detail</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Blog</a>
		                            	<ul>
		                                    <li><a href="our-blog.html">our Blog</a></li>
		                                    <li><a href="blog-2-column.html">blog 2 column</a></li>
		                                    <li><a href="blog-3-column.html">blog 3 column</a></li>
		                                    <li><a href="blog-left-sidebar.html">blog with left sidebar</a></li>
		                                    <li><a href="blog-right-sidebar.html">blog with right sidebar</a></li>
		                                    <li><a href="blog-detail.html">blog-detail</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Course</a>
		                            	<ul>
		                                	<li><a href="our-courses.html">Our Course</a></li>
		                                    <li><a href="courses-list.html">Course List</a></li>
		                                	<li><a href="courses-detail.html">Course Detail</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Teacher</a>
		                            	<ul>
		                                	<li><a href="our-teacher.html">Our Teacher</a></li>
		                                    <li><a href="our-teacher-details.html">our teacher details</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Gallery</a>
		                            	<ul>
		                                	<li><a href="gallery-masonary-2col.html">Masonary 2 Col </a></li>
		                                	<li><a href="gallery-masonary.html">Masonary 3 Col </a></li>
		                                	<li><a href="gallery-masonary-4col.html">Masonary 4 Col </a></li>
		                                    <li><a href="filterable-gallery.html">Simple gallery</a></li>
		                                </ul>
		                            </li>
									<li><a href="#">Pages</a>
		                            	<ul>
		                                    <li><a href="404.html">404 Page</a></li>
		                                </ul>
		                            </li>
									<li><a href="#">Contact US</a>
		                            	<ul>
		                                    <li><a href="contactus.html">Contact Us 1</a></li>
		                                    <li><a href="contactus-2.html">Contact Us 2</a></li>
		                                </ul>
		                            </li>
		                            <li><a id="simple-menu" href="#sidr"><i class="fa fa-bars"></i></a></li>
    							</ul>
    							<!--DL Menu Start-->
					            <div id="kode-responsive-navigation" class="dl-menuwrapper">
					                <button class="dl-trigger">Open Menu</button>
					                <ul class="dl-menu">
										<li><a href="index-2.html">home</a></li>
										<li><a href="about-us.html">about us</a></li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Event</a>
					                        <ul class="dl-submenu">
					                           <li><a href="our-event.html">our Event</a></li>
			                                    <li><a href="event-list.html">Event List</a></li>
			                                    <li><a href="event-detail.html">Event Detail</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Blog</a>
					                        <ul class="dl-submenu">
					                            <li><a href="our-blog.html">our Blog</a></li>
			                                    <li><a href="blog-2-column.html">blog 2 column</a></li>
			                                    <li><a href="blog-3-column.html">blog 3 column</a></li>
			                                    <li><a href="blog-left-sidebar.html">blog with left sidebar</a></li>
			                                    <li><a href="blog-right-sidebar.html">blog with right sidebar</a></li>
			                                    <li><a href="blog-detail.html">blog-detail</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Course</a>
					                        <ul class="dl-submenu">
					                            <li><a href="our-courses.html">Our Course</a></li>
			                                    <li><a href="courses-list.html">Course List</a></li>
			                                	<li><a href="courses-detail.html">Course Detail</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Teacher</a>
					                        <ul class="dl-submenu">
					                            <li><a href="our-teacher.html">Our Teacher</a></li>
			                                    <li><a href="our-teacher-details.html">our teacher details</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Gallery</a>
					                        <ul class="dl-submenu">
					                            <li><a href="gallery-masonary-2col.html">Masonary 2 Col </a></li>
			                                	<li><a href="gallery-masonary.html">Masonary 3 Col </a></li>
			                                	<li><a href="gallery-masonary-4col.html">Masonary 4 Col </a></li>
			                                    <li><a href="filterable-gallery.html">Simple gallery</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">404 Page</a>
					                        <ul class="dl-submenu">
					                            <li><a href="404.html">404 Page</a></li>
					                        </ul>
					                    </li>
					                    <li class="menu-item kode-parent-menu"><a href="#">Contact US</a>
					                        <ul class="dl-submenu">
					                            <li><a href="contactus.html">Contact Us 1</a></li>
			                                    <li><a href="contactus-2.html">Contact Us 2</a></li>
					                        </ul>
					                    </li>
					                </ul>
					            </div>
					            <!--DL Menu END-->
    						</div>
    						<!--kode nav_2 end-->
    					</div>
    				</div>
    			</div>
    		</div>
    		<!--kode navigation end-->
		</header>
		<!--HEADER END-->

        <!--Banner Wrap Start-->
        <div class="kf_inr_banner padding_more">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    	<!--KF INR BANNER DES Wrap Start-->
                        <div class="kf_inr_ban_des">
                        	<div class="inr_banner_heading">
								<h3>Our Courses</h3>
                        	</div>
                           
                            <div class="kf_inr_breadcrumb">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Our Courses</a></li>
								</ul>
							</div>
                        </div>
                        <!--KF INR BANNER DES Wrap End-->
                    </div>
                    
 					</div>
                </div>
            </div>
        </div>

        <!--Banner Wrap End-->

    	<!--Content Wrap Start-->
    	<!--search bar start-->
    	<div class="kf_content_wrap overflow_visible">
    		<div class="search_bar_outer_wrap">
	    		<div class="container">
	    			<div class="inr_pg_search_wrap">
		    			<form>
		    				<div class="search_bar_des">
		    					<input type="search" placeholder="Search Courses"/>
		    					<select id="basic">
                                    <option value="1">Select 1</option>
                                    <option value="9">Select 2</option>
                                    <option value="2">Select 3</option>
                                    <option value="3">Select 4</option>
                                    <option value="6">Select 5</option>
                                    <option value="8">Select 6</option>
                                </select>
		    				</div>
		    				<button>Search Now</button>
		    			</form>
		    		</div>
			    </div>
		    </div>
		    <!--search bar end-->
	 		<section>
	 			 <!--show data from database all course show...-->

                    <?php  
			          $i = 1;
			            while ($row_for_course= $result_for_course->fetch_assoc()) {
			                    
			        ?>
	 			<div class="container">

	 				<div class="row">

	 					<div class="col-md-4 col-sm-6">

	 						<!--EDU2 COLUM 3 Wrap Start-->
	 						<div class="edu2_col_3_wrap">
	 							<figure>
	 								<img src="uploads/<?php echo $row_for_course['image'];?>" alt=""/>
	 								<figcaption><a href="#"><i class="fa fa-play"></i></a></figcaption>
	 							</figure>

	 							<!--EDU2 COLUM 3 Des Start-->
	 							<div class="edu2_col_3_des">
	 								<h6><?php echo $row_for_course['title'];?></h6>
	 								<p><?php echo $row_for_course['description'];?> </p>
	 								<div class="video_link_wrap">
	 									<!--<a href="#">Video Tutorials</a>-->
	 									<span><?php echo $row_for_course['date_time'];?></span>
	 								</div>

	 								<!--EDU2 COLUM 3 Ftr Start-->
		 							<div class="edu2_col_3_ftr">
		 								<figure><img src="extra-images/col_3_des1.jpg" alt=""/></figure>
		 								<a href="#">Thomas Van</a>
		 								<div class="rating">
											<span>☆</span>
											<span>☆</span>
											<span>☆</span>
											<span>☆</span>
											<span>☆</span>
										</div>
		 							</div>
		 							<!--EDU2 COLUM 3 Ftr End-->
	 							</div>
	 							<!--EDU2 COLUM 3 Des End-->
	 					    </div>
	 						<!--EDU2 COLUM 3 Wrap End-->

	 					</div>
                                 
	            <?php
	              $i++;
	               }
	            ?>
		 		
	 					
	 					<div class="col-md-12">
	 						<!--KF_PAGINATION_WRAP START-->
							<div class="kf_edu_pagination_wrap">
								<ul class="pagination">
									<li>
										<a href="#" aria-label="Previous">
										<span aria-hidden="true"><i class="fa fa-angle-left"></i>PREV</span>
										</a>
									</li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li>
										<a href="#" aria-label="Next">
										<span aria-hidden="true">Next<i class="fa fa-angle-right"></i></span>
										</a>
									</li>
								</ul>
							</div>
							<!--KF_PAGINATION_WRAP END-->
 						</div>

	 				</div>
	 			</div>
	 		</section>
        <!--Content Wrap End-->
<!--NEWS LETTERS START-->
		<div class="edu2_ft_topbar_wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="edu2_ft_topbar_des">
							<h5>Subcribe weekly newsletter</h5>
						</div>
					</div>
					<div class="col-md-6">
						<div class="edu2_ft_topbar_des">
							<form>
								<input type="email" placeholder="Enter Valid Email Address">
								<button><i class="fa fa-paper-plane"></i>Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--NEWS LETTERS END-->
		<!--FOOTER START-->
		<footer>
			<!--EDU2 FOOTER CONTANT WRAP START-->
				<div class="container">
					<div class="row">
						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget widget-links">
								<h5>Information</h5>
								<ul>
									<li><a href="#">About us</a></li>
									<li><a href="#">Our Stories</a></li>
									<li><a href="#">My Account</a></li>
									<li><a href="#">Our History</a></li>
									<li><a href="#">Sprcialist Info</a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->

						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget widget-links">
								<h5>Student Help</h5>
								<ul>
									<li><a href="#">My Info</a></li>
									<li><a href="#">My Questions</a></li>
									<li><a href="#">F.A.Q</a></li>
									<li><a href="#">Serch Courses</a></li>
									<li><a href="#">Latest Informations</a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->

						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget wiget-instagram">
								<h5>Instagram</h5>
								<ul>
									<li><a href="#"><img src="extra-images/instagram-1.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-2.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-3.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-4.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-5.jpg" alt=""/></a></li>
									<li><a href="#"><img src="extra-images/instagram-6.jpg" alt=""/></a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->

						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget widget-contact">
								<h5>Contact</h5>
								<ul>
									<li>PO Box UN152468, 1 Street North, New Towm, California, USA</li>
									<li>Phone : <a href="#"> 5 (012) 4565 789</a></li>
									<li>Fax : <a href="#"> 5 (012) 4565 789</a></li>
									<li>Email : <a href="#"> Info@info.com</a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->
					</div>
				</div>
		</footer>
		<!--FOOTER END-->
		<!--COPYRIGHTS START-->
		<div class="edu2_copyright_wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="edu2_ft_logo_wrap">
							<a href="#"><img src="extra-images/ft_logo.png" alt=""/></a>
						</div>
					</div>

					<div class="col-md-6">
						<div class="copyright_des">
							<span>&copy; All Rights reserved. Powered By <a href="#">KODEFOREST</a></span>
						</div>
					</div>

					<div class="col-md-3">
						<ul class="cards_wrap">
							<li><a href="#"><img src="extra-images/visacard.png" alt=""/></a></li>
							<li><a href="#"><img src="extra-images/mastercard.png" alt=""/></a></li>
							<li><a href="#"><img src="extra-images/americancard.png" alt=""/></a></li>
							<li><a href="#"><img src="extra-images/card.png" alt=""/></a></li>
							<li><a href="#"><img src="extra-images/descoverycard.png" alt=""/></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--COPYRIGHTS START-->
    </div>
    <!--KF KODE WRAPPER WRAP END-->

    

	<!--Bootstrap core JavaScript-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--Bx-Slider JavaScript-->
	<script src="js/jquery.bxslider.min.js"></script>
	<!--Owl Carousel JavaScript-->
	<script src="js/owl.carousel.min.js"></script>
	<!--Pretty Photo JavaScript-->
	<script src="js/jquery.prettyPhoto.js"></script>
	<!--Dl Menu Script-->
	<script src="js/dl-menu/modernizr.custom.js"></script>
	<!--Dl Menu Script-->
	<script src="js/dl-menu/jquery.dlmenu.js"></script>
	<!--Full Calender JavaScript-->
	<script src="js/moment.min.js"></script>
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/jquery.downCount.js"></script>
	<!--Image Filterable JavaScript-->
	<script src="js/jquery-filterable.js"></script>
	<!--Accordian JavaScript-->
	<script src="js/jquery.accordion.js"></script>
	<!--Number Count (Waypoints) JavaScript-->
	<script src="js/waypoints-min.js"></script>
	<!--v ticker-->
	<script src="js/jquery.vticker.min.js"></script>
	<!--select menu-->
	<script src="js/jquery.selectric.min.js"></script>
	<!--Side Menu-->
	<script src="js/jquery.sidr.min.js"></script>
	<!--Custom JavaScript-->
	<script src="js/custom.js"></script>

    
</body>

<!-- Mirrored from kodeforest.net/html/uoe/our-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 08:04:21 GMT -->
</html>
