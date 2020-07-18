<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BeIntern - Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/beintern_final_logo.png"> 
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
										<i class="fa fa-phone" aria-hidden="true"></i>
									<li>
										<div>+359 87 711 6695</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>beintern@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
								<div class="dropdown">
									  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Register or Login
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="login_student.php">Student</a>
										<a class="dropdown-item" href="login_employer.php">Employer</a>
										<a class="dropdown-item" href="login_educator.php">Educator</a>
									  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
							
									<div class="logo_text">Be<span>Intern</span></div>
									<img src="images/beintern_final_logo.png" alt="logo" width="90" height="85";
								</a>
									
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="our_mission.php">Our mission</a></li>
									<li><a href="internships.php">Internships</a></li>
									<li><a href="<?php
									if($_SESSION['profile_type'] == 1){
										echo "profile_panels/student_profile_panel/index_student.php";
										}else if ($_SESSION['profile_type'] == 2){
										echo "profile_panels/employer_profile_panel/index_employer.php";
									}else if ($_SESSION['profile_type'] == 3){
										echo "profile_panels/educator_profile_panel/index_educator.php";
									}else{
										echo "#";
									}
									?>">My Profile</a></li>
									<li class="active"><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contacts</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="our_mission.php">Our mission</a></li>
				<li class="menu_mm"><a href="internships.php">Internships</a></li>
				<li class="menu_mm"><a href="#">My Profile</a></li>
				<li class="menu_mm"><a href="blog.php">Blog</a></li>
				<li class="menu_mm"><a href="contact.php">Contacts</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_post_container">

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/blog_1.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="#">Here’s What You Need to Know About Online Testing</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="#">With Changing Students and Times</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_video_container">
								<video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_2.jpg"}'>
									<source src="images/mov_bbb.mp4" type="video/mp4">
									<source src="images/mov_bbb.ogg" type="video/ogg">
									Your browser does not support HTML5 video.
								</video>
							</div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="#">Building Skills Outside the Classroom With New Ways</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/blog_3.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="blog_single.php">Law Schools Debate a Contentious Testing Alternative</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_video_container">
								<video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_4.jpg"}'>
									<source src="images/mov_bbb.mp4" type="video/mp4">
									<source src="images/mov_bbb.ogg" type="video/ogg">
									Your browser does not support HTML5 video.
								</video>
							</div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="#">Building Skills Outside the Classroom With New Ways</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/banner_1.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="#">Here’s What You Need to Know About Online Testing</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="#">With Changing Students and Times</a></div>
								<div class="blog_post_meta">
									<ul>
										<li><a href="#">admin</a></li>
										<li><a href="#">november 11, 2017</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<div class="load_more trans_200"><a href="#">load more</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up for news and offers</div>
							<div class="newsletter_subtitle">Subcribe to lastest news & internship programs</div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Be<span>Intern</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>“The future belongs to those who believe in the beauty of their dreams.” —Eleanor Roosevelt</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: beintern@gmail.com</li>
											<li>Phone:  +(88) 111 555 666</li>
											<li>40 Baria Sreet 133/2 Varna City, Bulgaria</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">More</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li><a href="our_mission.php">Our Mission</a></li>
											<li><a href="contact.php">Contacts</a></li>
											<li><a href="#">Features</a></li>
											<li><a href="internships.php">Internships</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Gallery</a></li>
											<li><a href="#">FAQs</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
									</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Donika Ilieva</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog.js"></script>
</body>
</html>