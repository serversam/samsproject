<?php
	function connect() {
	    $servername = getenv('IP');
	    $username = getenv('C9_USER');
	    $password = "";
	    $database = "c9";
	    $dbport = 3306;
	
	    // Create connection
	    $db = new mysqli($servername, $username, $password, $database, $dbport);
	
	    return $db->connect_error ? null : $db;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<!--Internal backup-->
		<link rel="stylesheet" href="res/font-awesome-4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="res/myStyle/mainBody.css">
		<link rel="shortcut icon" href="res/img/s.ico" />
		<script src="res/jquerySrc.js"></script>
		<!--External dependancies-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<title>Sam's Projects</title>
	</head>
	
	<body>
		<div  id="mainBody">
			<!--Include content here-->
			
			<div id="loadNavbar"><?php require 'navbar.php'; ?></div>
			
			<div id="loadCore"><?php require 'core.php'; ?></div>
			
			<div id="loadFooter"><?php require 'base.php'; ?></div>
			
			<!--End of all includes-->
		</div>
	</body>
</html>