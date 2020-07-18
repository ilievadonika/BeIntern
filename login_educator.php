<?php
session_start();
include 'config.php';

if(isset($_SESSION['logged_user'])){ 
header("Location: profile_panels/educator_profile_panel/index_educator.php");
}



if(isset($_POST['btnLogin'])){
	
    $acc = trim(addslashes($_POST['acc']));
    $pass = md5($_POST['pass']);
 
    $sql = "SELECT * FROM users WHERE username='$acc' AND password='$pass'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$count = mysqli_num_rows($result);
	
	if($acc == $row['username'] && $pass == $row['password'])
     { 
         $_SESSION['logged_user']=$row['username'];
		 $_SESSION['logged_user_id']=$row['userId'];
		 $_SESSION['profile_type']=3;
		 
		 header("Location: profile_panels/educator_profile_panel/index_educator.php");
         
		
         
     
    }else
    {
		$notice = '1';
    }	

}

if(isset($_POST['btnSignup'])){
	
	$new_user = $_POST['form-username1'];
	$new_pass =md5( $_POST['form-password1']);
	$new_email= $_POST['form-email1'];
	
	$check = mysqli_query($db, "SELECT * FROM `users` WHERE `username` = '$new_user'");

if(mysqli_num_rows($check) > 0){

//there is a user already registered

redirect_to("successful_login.php");

echo "<script type='text/javascript'>alert('That username is already taken!')</script>";

/*echo("That username is already taken!");*/

} else {
	
	$sql = "INSERT INTO users (username, password, email, role)
VALUES ('$new_user', '$new_pass', '$new_email', 3)";

if (mysqli_query($db, $sql)) {
	
	echo '<script type="text/javascript">

          window.onload = function () { alert("Your registration is successful!\\n Please log in!"); }

</script>';
	
	/*header("Location: successful_login.php");*/
	
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

}
	
	
	
	
}


?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BeIntern - Register / Log in </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="images/beintern_final_logo.png"> 
       
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <!--<h1><strong></strong> Login or Sign up</h1>-->
                            <div class="description">
                            	</p>
                            </div>
							<img src="assets/img/backgrounds/edu_pic1.png" class="img-fluid" alt="Responsive image">
							<div class="social-login">
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="index.php" >
		                        		<i class="fa fa-arrow-left"></i> BACK TO SITE
		                        	</a>
	                        	</div>
	                        </div>
	                        
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="login_educator.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="acc" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" name="btnLogin" class="btn">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
		                	
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username1" placeholder="Username..." class="form-username form-control" id="form-username1">
				                        </div>
										
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password1" placeholder="Password..." class="form-password form-control" id="form-password1">
				                        </div>
										
								  <!--<form role="form" data-toggle="validator">
									  <div class="form-group">
										<label for="inputEmail">Email</label>
										<input type="email" id="inputEmail">
										<div class="help-block with-errors"></div>
									  </div>
									</form>
									<form role="form" data-toggle="validator">-->
				                       <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email1" placeholder="Email..." class="form-email form-control" id="form-email1">
				                        </div>
										
				                        <!--<div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
				                        	<textarea name="form-about-yourself" placeholder="About yourself..." 
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
				                        </div>-->
				                        <button type="submit" name="btnSignup" class="btn">Sign me up!</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        			
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts_edu.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>