<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BeIntern</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/beintern_final_logo.png"> 
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
									<li class="active"><a href="#">Home</a></li>
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
	
		
		<div class="home_slider_container carousel" data-interval="10000">
			<div>
			dasdsa dasd as das dasdas
		</div>
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider carousel" id="homeCarousel" data-interval="10000">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider_background/slider_3.jpg)"></div>
					<div class="home_slider_content">
						
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="home_slider_title">Become part of BeIntern.com</div>
										<div class="home_slider_subtitle">YOU are:</div>
										<div class="home_slider_form_container">
										
											<div class="container">
											  <div class="row">
												<div class="col-sm">
												  <a href="login_student.php"><img class="img-fluid" src="images/register_icons/student.png" alt="1" /></a>
												</div>
												<div class="col-sm">
												  <a href="login_employer.php"><img class="img-fluid" src="images/register_icons/employer.png" alt="1" /></a>
												</div>
												<div class="col-sm">
												    <a href="login_educator.php"><img class="img-fluid" src="images/register_icons/educator.png" alt="1" /></a>
												</div>
											  </div>
											</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider_background/slider_next.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Take the first step to your DREAM career</div>
									<div class="home_slider_subtitle">Build your future</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Find Your Internship" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Whats your Major</option>
													<option>Computer Science</option>
													<option>Biology</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Region</option>
													<option>Sofia</option>
													<option>Varna</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider_background/slider_next.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
								<div class="home_slider_title">Build a successful INTERNSHIP program</div>
									<div class="home_slider_subtitle">Choose your future interns</div>
										<div class="home_slider_form_container">
										<form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Find your future Interns" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Whats your field of work</option>
													<option>Accounting</option>
													<option>Art and Design</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Where is your location</option>
													<option>Sofia</option>
													<option>Varna</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To BeIntern.com</h2>
						<div class="section_subtitle"><p>Internships are the best way for students to gain the work experience necessary to find a job after graduation. In fact, nearly 7 out of 10 internships culminate with a full time job offer after successful completion of the program. Luckily, students can use Internships.com to search internship opportunities from thousands of employers across the country.</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
						<h3 class="feature_title">Search for Internship</h3>
						<div class="feature_text"><p>You can get started by searching for internships in your hometown within your college major or at a particular company such as Google or Disney.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Modern Educators</h3>
						<div class="feature_text"><p>Educators can receive exclusive internship resources or integrate internship inventory into learning management systems such as Blackboard and Moodlerooms.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
						<h3 class="feature_title">Best Employers</h3>
						<div class="feature_text"><p> Employers want candidates with real-world experience, and internships are the best way for students to gain the experience necessary to find the right job after graduation.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Award & Reward</h3>
						<div class="feature_text"><p> One of the best ways to support graduates is by giving them the opportunity to work as interns in your company, organization, or business. Afterward, award them with internship certificates.</p></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Popular Internships</h2>
						<div class="section_subtitle"><p>Your pathway to employment starts with landing the right internship. Start your search today!</p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/mobile_apps.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
							<div class="course_teacher">IntellectSoft</div>
							<div class="course_text">
								<p>Custom software development company with a headquarters in Palo Alto, US. 
								Went a long way of serving many brands that speak for themselves: Harley Davidson, Nestlé, the London Stock Exchange, among others.</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>20 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto">Open</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/software_training.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">Software Training</a></h3>
							<div class="course_teacher">IBM</div>
							<div class="course_text">
								<p>At IBM, we strive to lead in the invention, development and manufacture of the industry's most advanced information technologies, including computer systems, 
								software, storage systems and microelectronics.</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>20 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto">Open</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/graphic_design.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">Graphic Designer</a></h3>
							<div class="course_teacher">Pentagram New York </div>
							<div class="course_text">
								<p>Pentagram is the world’s largest independently-owned design studio.Our work encompasses graphics and identity, architecture
								and interiors, products and packaging, exhibitions and installations, websites and digital experiences</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>20 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto">Open</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="#">view all internships</a></div>
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

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Upcoming events</h2>
						<div class="section_subtitle"><p>You can meet employers, get top quality careers advice and maybe even find yourself a job or internship.</p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="images/event_2.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">27</div>
									<div class="event_month trans_200">Aug</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Science and Technology Job Fair</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 - 17.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Plovdiv City</span></div>
									<div class="event_text">
										<p>This fair hosts both small and large employers offering jobs and internships of students in the natural and applied sciences....</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="images/event4.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">21</div>
									<div class="event_month trans_200">Aug</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Fall HireTigers Career Fair</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span> Varna City</span></div>
									<div class="event_text">
										<p>This is event brings together students, alumni, for networking, recruiting and industry education....</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/event2.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">01</div>
									<div class="event_month trans_200">Sep</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Alternative data and financial inclusion</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 - 18.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Sofia City</span></div>
									<div class="event_text">
										<p>The format for this new event is less formal than a traditional career fair and will include industry-specific chat areas and "hubs"...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
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

	<!-- Latest News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Latest News</h2>
						<div class="section_subtitle"><p></p></div>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col">
					
					<!-- News Post Large -->
					<div class="news_post_large_container">
						<div class="news_post_large">
							<div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
							<div class="news_post_large_title"><a href="blog_single.html">Seven of the best graduate schemes</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2019</a></li>
								</ul>
							</div>
							<div class="news_post_text">
								<p>It's Easier Than Ever to Not Compensate Interns, But There's a Catch....</p>
							</div>
							<div class="news_post_link"><a href="blog_single.html">read more</a></div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 news_col">
					<div class="news_posts_small">

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">How unpaid interns across Europe are fighting for fair pay</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2019</a></li>
								</ul>
							</div>
						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">Paying Interns Is a Good Investment In the Future of Your Business</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2019</a></li>
								</ul>
							</div>
						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">Here Are Some of the Coolest, Craziest Internships Out Therel</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 20179</a></li>
								</ul>
							</div>
						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">Why Hire Summer Interns? Because They Know More About Mobile Than You...</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2019</a></li>
								</ul>
							</div>
						</div>

					</div>
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>