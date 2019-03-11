<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<meta name="author" content=" Chad and Juanita Hales">
			<meta name="description" content="MGTrackerTest">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- css links -->
			<link rel="stylesheet" href="../css/custom.css" type="text/css" />
			<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
		<!-- Tether for popovers -->
			<script src="../js/tether.min.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    	<script src="../js/bootstrap.bundle.min.js"></script>
	    	<script src="../js/additional.js"></script>
	    	<script>
				$(document).ready(function(){$('[data-toggle="popover"]').popover();});
				$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});
			</script>
			<title>MGTrackerTest</title>
		</head>
		<div id='top'></div>
		<a href='<?php echo "./MGTracker/logout"?>' class="btn btn-primary btn-sm" style="float:right;">Log Out</a>
		<div class="container">

		