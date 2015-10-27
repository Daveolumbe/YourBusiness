<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ADMIN</title>

		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<!-- Bootstrap CSS -->
			<link rel="shortcut icon" href="../imgs/icons/favicon.ico"/>
		<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">

	</head>
	<body ng-app="validationApp" ng-controller="mainController">

		
		
			<div class="container">
				<a href="index.php"><img src="../imgs/logo.png" class="img-responsive logo"></a>
			</div>

			
		<div class="container-fluid" id="bar-color">
			<p class="container text-center">DASHBOARD </p>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<h1 class="text-center" style="padding: 20px;" >Admin Login</h1>
							<form class="form-group" method="post" action="<?=$_SERVER['PHP_SELF']?>" name="userReg" ng-submit="submitForm(userReg.$valid)" novalidate>

							<div class="form-group" g-class="{ 'has-error' : userReg.email.$invalid && !userReg.email.$pristine }">

		    				<input type="email" class="form-control" name="myemail" id="myemail"  ng-model="user.email" placeholder="Email address*" required>
		    				<p ng-show="userReg.email.$invalid && !userReg.email.$pristine" class="help-block alert alert-warning">enter a valid email address* </p>
		    			</div>

						<div class="form-group">
		    				<input type="password"  class="form-control"  name="mypassword" placeholder="Your password">
		    			</div>

		    			<input type="submit" value="LOGIN" name="submit" class="btn form-control btn-danger" onclick="Validate()">
		    	</form>

		    	<?php  // Connects to your Database   
		     	
		     	$dbcon = mysql_connect("localhost", "lovee124_adyb", "NSSwxuQ))*5M");
$db = mysql_select_db("lovee124_ybDb145", $dbcon);

		     	if (isset($_POST['submit'])) {
		     		
		     		if(!$_POST['myemail'] | !$_POST['mypassword']) {  
		     			die('You did not fill in a required field.');  
		     		}
		     		// checks it against the database    
		     		if (!get_magic_quotes_gpc()) {  
		     			$_POST['myemail'] = addslashes($_POST['myemail']);  
		     		}

		     		$check = mysql_query("SELECT * FROM admin WHERE username = '".$_POST['myemail']."'")or die(mysql_error());

		     		//Gives error if user dosen't exist
		     		$check2 = mysql_num_rows($check);

		     		if ($check2 == 0) {
		     			die('That user does not exist in our database.'); 
		     		}

		     		while($info = mysql_fetch_array( $check )) {
		     			$_POST['mypassword'] = stripslashes($_POST['mypassword']); 
		     			$info['password'] = stripslashes($info['password']);
		     			

		     			//gives error if the password is wrong

		     			if ($_POST['mypassword'] != $info['password']) {
		     				die('Incorrect password, please try again.');
		     		}
		     		else{
		     			$_POST['myemail'] = stripslashes($_POST['myemail']); 
		     			$hour = time() + 3600;
		     			echo "<script> window.location.assign('view.php'); </script>";
		     			exit();
		     		}

		     	}
		     }
		    ?>
		    					
				</div>
				<div class="col-md-4"></div>
			</div>


		</div>
		
		<footer style="position: fixed;">
			<div class="container text-center">
				<div>
					<img src="../imgs/icons/fb.png" height="35px" width="35px"> 
					<img src="../imgs/icons/tw.png" height="35px" width="35px">
					<img src="../imgs/icons/ln.png" height="35px" width="35px">
				</div>
				© 2015 EMP Media. All Rights Reserved. | <a href="#">Our Terms and Conditions</a>
			</div>
			

		</footer>
		
        <script src="../js/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
			
		<script src="../js/custom.js"></script>
	</body>
</html>