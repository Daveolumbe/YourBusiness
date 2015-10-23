<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>YOUR BUSINESS</title>
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
		

	</head>
	<body ng-app="validationApp" ng-controller="mainController">

		
		
			<div class="container">
				<a href="index.php"><img src="imgs/logo.png" width="100%" class="img-responsive logo"></a>
			</div>
	<section class="module parallax parallax-1 hide">
        <div class="container">
          <div class="row">
          	<div class="col-md-6"></div>
          	<div class="col-md-6" style="padding-top:20px"><img src="imgs/texton2.png" width="500px" class="pull-right"></div>
          </div>
        </div>
      </section>

			
		<div class="container-fluid" id="bar-color">
			<p class="container text-center">YOUR BUSINESS MAGAZINE <a href="#formme" class="btn btn-success">Download</a> </p>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p>
<h1 style="color:#1e5869">Welcome</h1>Guest edited by former Dragons’ Den investor and business guru, James Caan CBE, Your Business magazine gives you all the advice you need if you are starting and running your own business. From finance, to e-commerce and accountancy to marketing, Your Business is an expert-led publication that gives you the inside track on how to build and run a successful business.</p>	</div>
<div class="col-md-4 hide"><img src="imgs/yourbusiness.png" width="" class="img-responsive pull-right"></div>
				<div class="col-md-4" id="hide" >
					<h1 class="text-center" style="color:#1e5869" id="formme">Get your free copy</h1>

							<!-- SIGNUP FORM  -->	
				<form class="form-group" method="post" action="<?=$_SERVER['PHP_SELF']?>" name="userReg" ng-submit="submitForm(userReg.$valid)" novalidate>

							<div class="form-group" g-class="{ 'has-error' : userReg.email.$invalid && !userReg.email.$pristine }">

		    				<input type="email" class="form-control" name="email" id="email"  ng-model="user.email" placeholder="Email address*" required>
		    				<p ng-show="userReg.email.$invalid && !userReg.email.$pristine" class="help-block alert alert-warning">enter a valid email address* </p>
		    			</div>

						<div class="form-group">
		    				<input type="text"  class="form-control"  name="name" placeholder="Your name">
		    			</div>

						<div class="form-group" >
		    				<input type="text" class="form-control" name="company"  placeholder="Your company name" />
		    			</div>
		    			<input type="submit" value="REGISTER" name="submit" ng-disabled="!userReg.$valid" class="btn form-control btn-success" style="border-color:#1e5869; background-color:#1e5869; color:#fff" onclick="Validate()">
		    	</form>
		    	<?php

        include_once('conn.php');
         
//Initialise connection and set error message 
        if (isset($_POST['submit'])) {
	
	if (!$dbcon) {
		die('unable to connect to the ' . mysql_error());
	}

	//Query to insert
	$emailtxt = mysql_real_escape_string($_POST['email']);
	$nametxt = mysql_real_escape_string($_POST['name']);
	$companytxt = mysql_real_escape_string($_POST['company']);

	mysql_select_db("$lovee124_ybDb145", $dbcon);

	$sql = "INSERT INTO `yb_registration`(`email`, `name`, `companyname`) VALUES ('$emailtxt', '$nametxt', '$companytxt')";


 	mysql_query($sql);
if (!$sql) {
  die('Invalid query: ' . mysql_error());
}
else{
echo '<div class="alert alert-info text-center"><strong>Thanks You! </strong> please download YOUR BUSINESS MAGAZINE now.</div>
					<a href="http://europe.nxtbook.com/emp/AtHome/YourBusinessWithJamesCaanAutumn2015/index.php" target="_new" class="btn text-center btn-danger-outline form-control">READ YOUR BUSINESS MAGAZINE</a></div>';

}
  mysql_close($dbcon);
}
?>


				</div>
				<div class="col-md-4 text-center" id="show" style="margin-top:50px">
					<div class="alert alert-info"><strong>Thanks You!</strong> please download YOUR BUSINESS MAGAZINE now.</div>
					<a href="http://europe.nxtbook.com/emp/AtHome/YourBusinessWithJamesCaanAutumn2015/index.php" target="_new" class="btn btn-danger-outline">READ YOUR BUSINESS MAGAZINE</a></div>
			</div>
		</div>
		
		<footer>
			<div class="container text-center">
				<div>
					<img src="imgs/icons/fb.png" height="35px" width="35px"> 
					<img src="imgs/icons/tw.png" height="35px" width="35px">
					<img src="imgs/icons/ln.png" height="35px" width="35px">
				</div>
				© 2005-2015 EMP Media. All Rights Reserved.
			</div>
			

		</footer>
		
        <script src="js/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
			
		<script src="js/custom.js"></script>
		
		
	</body>
</html>