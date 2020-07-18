<?php
	session_start();
	include_once 'config.php';

	$userid =  $_SESSION['logged_user_id'];
	
	$sql = "SELECT * FROM users WHERE userId = '$userid'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$email_incorrect = 0;

	if(isset($_POST['btnInsertStudent'])){
	
	$user_first_name = $_POST['first_name'];
	$user_middle_name =$_POST['middle_name'];
	$user_last_name= $_POST['last_name'];
	$phone_number= $_POST['phone_number'];
	$country= $_POST['country'];
	$address= $_POST['address'];
	
	$sqlInsert = "INSERT INTO stud_personal_data(user_id, first_name, middle_name, last_name, phone_number, country, address)
	VALUES('$userid', '$user_first_name', '$user_middle_name', '$user_last_name', '$phone_number', '$country', '$address')";

		if(mysqli_query($db, $sqlInsert)) {
			
			header("location: index_student.php");
			mysqli_close($db);
		} else {
			
		mysqli_error($db); 
}

		$user_new_email= $_POST['new_email'];
		if (filter_var($user_new_email, FILTER_VALIDATE_EMAIL)) {
			  	$sqlUpdate = "UPDATE users SET email='$user_new_email' WHERE userId = '$userid'";
		
		
		if(mysqli_query($db, $sqlUpdate)) {
			
			header("location: index_student.php");
			mysqli_close($db);
		} else {
			
		mysqli_error($db); 
}

			} else {
			  $email_incorrect = 1;
			}
				
				}
	

	
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeIntern.com - Student profile</title>
    <!-- Core CSS - Include with every page -->
	<link href="assets/img/beintern_final_logo.png"  rel="shortcut icon"> 
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
	
	
	
   </head>

<body>

    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index_student.php">
				<div class="logo_text">Student <span>   Profile</span>
				<img src="assets/img/beintern_final_logo.png" alt="" />	
				</div>				
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
					</li>
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                           <div class="user-section-inner">
						   <?php
								if($row['picture'] != ""){
									?>
									<img src="../../uploads/<?php echo $row['picture']; ?> " alt="">
									<?php
									
								}else{
									?>
									<img src="assets/img/girl_graduated.jpg" alt="">
									<?php		
								}						   
						   ?>
                            </div>
                            <div class="user-info">
                                <div><strong>  <?php echo $row['username']; ?> </strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                 
					<li class="active">
                        <a href="portfolio.php"><i class="fa fa-dashboard fa-fw"></i>My Portfolio</a>
                    </li>
                    <li class="selected">
                        <a href="personal_data.php"><i class="fa fa-files-o fa-fw"></i>Personal Data</a>
                    </li>
					<li class= "active">
                        <a href="#"><i class="fa fa-flask fa-fw"></i>High School Education</a>   
                    </li>
					<li class= "active">
                        <a href="#"><i class="fa fa-building-o fa-fw"></i>Student Data</a>  						
                    </li>
					<li class= "active">
                        <a href="#"><i class="fa fa-suitcase fa-fw"></i>Any Professional Experience</a>   
                    </li>
                    <li class= "active">
                        <a href="#"><i class="fa fa-clipboard fa-fw"></i>Other Degrees and Courses</a>   
                    </li>
                
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"> Personal Data</h1>
					<?php
					if($email_incorrect ==1){ ?>
						<div class="form-group has-error">
                         <label class="control-label" for="inputError">Trouble with the e-mail..</label>
                     </div>
					<?php
					}
					?> 
               </div>
                <!--End Page Header -->
				<body>
				<div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Let's start by getting a few details from you.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<div class="form-group">
								<?php
								if($row['picture'] != ""){
									?>
									<img src="../../uploads/<?php echo $row['picture']; ?> " alt style="width: 100px" >
									<?php
									
								}else{
									?>
									<img src="assets/img/girl_graduated.jpg" alt style="width: 100px"><br>
									<?php		
								}						   
						   ?>
										
										</div>
									<form action="../../upload.php" method="post" enctype="multipart/form-data">
											<label>Upload your Profile Picture:</label>
											<input type="file" name="myfile" id="fileToUpload"><br>
											<input type="submit" name="submit" value="Upload File Now" >
										</form><br> 
                                    <form role="form" method="post">                          
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input class="form-control" placeholder="Enter your First Name"  name="first_name" id="first_name">
                                        </div>
										<div class="form-group">
                                            <label>Middle Name(s):</label>
                                            <input class="form-control" placeholder="Enter your Middle Name(s)" id="middle_name" name="middle_name">
                                        </div>
										<div class="form-group">
                                            <label>Last Name:</label>
                                            <input class="form-control" placeholder="Enter your Last Name" id="last_name" name="last_name">
                                        </div>
										<div class="form-group">
                                            <label>Your e-mail is:</label>
													<p class="form-control-static"><?php echo $row['email'] ?></p><br>
											<label>If you have new e-mail..</label>
											<input class="form-control" placeholder="Put the new one here" id="new_email" name="new_email">
                                        </div>
										<div class="form-group">
                                            <label>Phone number:</label>
                                            <input class="form-control" placeholder="+359 XXX / XXX XXX" id="phone_number" name="phone_number">
                                        </div>
                                        <button type="submit" name="btnInsertStudent" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-success">Reset Button</button>                                   
                                </div>
                                <div class="col-lg-6">	
										<div class="form-group">
                                            <label>Country:</label>
                                            <input class="form-control" placeholder="Enter your country" id="country" name="country">
                                        </div>
										<div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" placeholder="City, Region, Post Code, Street , № " id="address" name="address">
                                        </div>
									</form>
										<img src="assets/img/stud_data.jpg" alt style="width: 450px">
                                </div>
                            </div>
                        </div>
                    </div>
				
				</body>
				
            </div>

            

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
