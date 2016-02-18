<!DOCTYPE <!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<meta name="author" content=" Chad and Juanita Hales">
			<meta name="description" content="Game Day Picker">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- css links -->
			<link rel="stylesheet" href="../css/custom.css" type="text/css" />
			<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    	<script src="../js/bootstrap.min.js"></script>
	    	<script src="../js/teams.js"></script>
	    	<script src="../../js/IE_fix.js"></script>
	    	
	    	
			<title>Game Day Picker</title>
		</head>
		<body>
		<div id='top'></div>				
			<!-- Header 3 Logo -->
			<img id='logout_logo' src="../images/Game_Day_Picker_logo_03.png" style="width:110; margin:5px;"></img>
		<!-- Logout Link -->
			<a class="btn btn-link" style="margin:1.5%;float:right;font-family:CopperPlate Gothic; color:#337ab7;" href='<?php echo "GDP/logout"; ?>'>Logout</a>
			<?php
			echo "<h6 style='float:right;font-family:CopperPlate Gothic;margin-right:5px;padding-top:1.5%;'>";
			echo "Welcome ";
			echo $this->session->userdata('username');
			echo "</h6>";
			?>

