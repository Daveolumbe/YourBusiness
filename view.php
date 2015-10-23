<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>YOUR BUSINESS</title>

		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>
	<body>

		
		
			<div class="container">
				<a href="index.php"><img src="imgs/logo.png" class="img-responsive logo"></a>
			</div>

			
		<div class="container-fluid" id="bar-color">
			<p class="container text-center">VIEW >> REGISTERED USERS </p>
		</div>

		<div class="container">
			<?php

			 include_once('conn.php');
	
mysql_select_db("lovee124_ybDb145", $dbcon);
$sql = "SELECT * FROM yb_registration";
$myquery = mysql_query($sql,$dbcon);
if($myquery === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
echo "<div class='table-responsive'><table class='table'>
<tr>
<th>EMAIL</th>
<th>NAME</th>
<th>COMPANY NAME</th>
<th>REGISTERED DATE & TIME</th>
</tr>";
while($records = mysql_fetch_array($myquery)){
	echo "<tr>";
	echo "<td>" . $records['email'] . "</td>";
	echo "<td class='text-capitalize'>" . $records['name'] . "</td>";
	echo "<td class='text-uppercase'>" . $records['companyname'] . "</td>";
	echo "<td>" . $records['Timestamp'] . "</td>";

	echo "</tr>";
	}
	
	echo "</table></div>";
mysql_close($dbcon);
?>

<a href="export.php" class="btn btn-danger btn-lg pull-right"> EXPORT DATA </a>

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
