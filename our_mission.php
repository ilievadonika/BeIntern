<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BeIntern - Our Mission</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/beintern_final_logo.png"> 
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
									<li class="active"><a href="our_mission.php">Our mission</a></li>
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
									<li><a href="blog.php">Blog</a></li>
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
								<li>Our Mission</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To BeIntern.com </h2>
						<div class="section_subtitle"><p>The BeIntern Project is carried out in partnership with all 51 higher education institutions in Bulgaria 
						established under the Higher Education Act. The project envisages practical training opportunities for over 60,000 students. Participation is open to all full-time, part-time and 
						distance learning students on the Registry of Current and Dormant Undergraduate and Graduate Students </p></div>
					</div>
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image"><img src="images/about_1.jpg" alt=""></div>
						<div class="about_item_title"><a href="#">Our Stories</a></div>
						<div class="about_item_text">
							<p>Students have a number of unique internship opportunities.  You can read below to learn about the types of hands-on internship experiences available to undergraduate and graduate students.</p>
						</div>
					</div>
				</div>

				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_middle">
					<div class="about_item">
						<div class="about_item_image"><img src="images/about_2.jpg" alt=""></div>
						<div class="about_item_title"><a href="#">Our Mission</a></div>
						<div class="about_item_text">
							<p>The internship is designed not only for you to do great work with the opportunity to learn and grow, but to experience our culture full of diverse community connection, executive engagement, and memorable events.</p>
						</div>
					</div>
				</div>

				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_right">
					<div class="about_item">
						<div class="about_item_image"><img src="images/about_3.jpg" alt=""></div>
						<div class="about_item_title"><a href="#">Our Vision</a></div>
						<div class="about_item_text">
							<p>“You are not here merely to make a living. You are here in order to enable the world to live more amply, with greater vision, with a finer spirit of hope and achievement. You are here to enrich the world, and you impoverish yourself if you forget the errand.” – Woodrow Wilson</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Feature -->

	<div class="feature">
		<div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Why Choose Us</h2>
						<div class="section_subtitle"><p>We are the BEST!</p></div>
					</div>
				</div>
			</div>
			<div class="row feature_row">

				<!-- Feature Content -->
				<div class="col-lg-6 feature_col">
					<div class="feature_content">
						<!-- Accordions -->
						<div class="accordions">
							
							<div class="elements_accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Award for Best Internship Project</div></div>
									<div class="accordion_panel">
										<p>If you are looking for a sales and trading job on Wall Street, it’s a good idea to keep a blog and write about the trades you find interesting. If you want to go into venture capital, you will  
										immediately be asked what companies you are excited about and what upcoming trends you see over the next few years. .</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>You’re learning from the best.</div></div>
									<div class="accordion_panel">
										<p>There are a few pieces to know when identifying the right people to speak with in each industry. It’s not always the people in the news who can make the most difference for you. First you need to decide on a specific field, and start doing research.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>We are worldwide.</div></div>
									<div class="accordion_panel">
										<p>Look at the leading companies and the individuals there who can help you. Once you have your list, get in touch with them. You need to find out where they hang out (i.e. industry events) or write them a 
										concise and powerful email about who you are and why they should give you the time of day.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>We encourage students to go global.</div></div>
									<div class="accordion_panel">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>

							</div>

						</div>
						<!-- Accordions End -->
					</div>
				</div>

				<!-- Feature Video -->
				<div class="col-lg-6 feature_col">
					<div class="feature_video d-flex flex-column align-items-center justify-content-center">
						<div class="feature_video_background" style="background-image:url(images/video.jpg)"></div>
						<a class="vimeo feature_video_button" href="https://player.vimeo.com/video/99340873?title=0" title="OH, PORTUGAL - IN 4K - Basti Hansen - Stock Footage">
							<img src="images/play.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
												<h2 class="section_title">The Best Employers</h2>
						<div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/google_icon.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Google</a></div>
							<div class="team_subtitle">Engineering</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/microsoft_icon.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Microsoft</a></div>
							<div class="team_subtitle">IT</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/apple_icon.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Apple</a></div>
							<div class="team_subtitle">Business & E-commerce</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/facebook_icon.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Facebook</a></div>
							<div class="team_subtitle"> Business</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Counter -->

		<div class="counter">
		<div class="counter_background" style="background-image:url(images/counter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">Discover Jobs And Internships</h2>
						<div class="counter_text"><p>Students can filter search results to display paid internships, summer jobs or entry level jobs. Your pathway to employment starts with landing the right internship. Start your search today!</p></div>

						<!-- Milestones -->

						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
							
							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="320"data-sign-after="k">0</div>
								<div class="milestone_text">Internship possitions&nbsp</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="120" data-sign-after="k">0</div>
								<div class="milestone_text">Jobs</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="250" data-sign-after="k" >0</div>
								<div class="milestone_text">Companies</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="320" data-sign-after="+">0</div>
								<div class="milestone_text">Cities</div>
							</div>

						</div>
					</div>

				</div>
			</div>

			<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">
							<div class="counter_form_title">Receive information</div>
							<input type="text" class="counter_input" placeholder="Your Name:" required="required">
							<input type="tel" class="counter_input" placeholder="Phone:" required="required">
							<input type="tel" class="counter_input" placeholder="E-mail:" required="required">
							<select name="counter_select" id="counter_select" class="counter_input counter_options">
								<option>Your Major</option>
								<option>Computer Science</option>
								<option>Art and Design</option>
								<option>Finance</option>
							</select>
							<button type="submit" class="counter_form_button">submit now</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Partners -->

	<div class="partners">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="partners_slider_container">
						<div class="owl-carousel owl-theme partners_slider">

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_1.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_2.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_3.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_4.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_5.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="images/partner_6.png" alt=""></div>

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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/about.js"></script>
</body>
</html>