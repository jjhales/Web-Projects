<!DOCTYPE <!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content=" Juanita Hales">
		<meta name="description" content="Home Healthcare Hours Tracker">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/custom.css" type="text/css" />
		<script type="text/javascript" src="../js/dashboard.js"></script>
		<title>HHHT</title>
	</head>
	<style>
		body{
			background-color:#f8f7f9;
			font-family:"Roboto";
			margin: 2%;
		}
		.container{
			margin-left: 3%;
			margin-right: 3%;
			margin-bottom: 5%;
		}

		h1, h2, h3{
			font-family: "Arial";
			color:#662d91;
		}
		form{
			margin-right: 2%;
			padding: 2.5%;
			background-color: #9a86b7;
			border-radius: 6px;
		}
		input{
			float:right;
			border-radius: 6px;
		}
		/*labels on forms font color white*/
		label{
			color:white;
		}
		table{
			padding: 0.5%;
			border: 1px solid #f8f7f9;
			border-radius: 6px;
			background-color: #9a86b7;
		}
		th{
			color: #f8f7f9;
		}
		td{
	
			border: 1px solid #FCF7FD;
			background-color: white;
			color:#0D010E;
		}
		
		.footer_logo{
			float: left;
			padding: 1%;
		}
		#submit_hours{
			padding: 3.5%;
			float: left;
		}
		.btn-large{
			margin-bottom: 1%;
			background-color:#c07cdd;
			height:50px;
			width: 250px;
			border-radius: 6px;
			color:white;
			font-size: 1em;
			font-style: bold;
		}
		/*input class subit style*/
		.submit{
			background-color:#c07cdd;
			padding-top: 3.5%;
			padding-bottom: 3.5%;
			color:white;
			font-size: 1em;
			font-style: bold;
		}
		/*smaller buttons*/
		#logout_button{
			background-color:#c07cdd;
			padding-top: 0.8%;
			padding-bottom: 0.8%;
			border-radius: 6px;
			float: right;
		}
		#logout_button a{
			text-decoration: none;
			color:white;
			font-size: 1.25em;
			font-style: bold;

		}
		#site_title{
			float:left;
		}
		#close_hours{
			border: none;
			background-color: #f8f7f9;
		}
		input:focus{
			background-color: #cab4ff;
		}
		button:focus{
			background-color:#662d91; 
		}
	</style>
	<body>
		<header>
				<h1 id="site_title">Home Healthcare Hours Tracker</h1>
				<?php 
					$this->load->helper('html'); 
					echo img('images/logo_top.png');
				?>
		</header></br>
		<div class="container">
