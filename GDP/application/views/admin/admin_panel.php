<!DOCTYPE <!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<meta name="author" content=" Chad and Juanita Hales">
			<meta name="description" content="header">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- css links -->
			<link rel="stylesheet" href="..//css/custom.css" type="text/css" />
			<link rel="stylesheet" href="..//css/bootstrap.min.css" type="text/css" />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    	<script src="..//js/bootstrap.min.js"></script>
			<title>Game Day Picker</title>
		</head>
		<body>
	<!-- -////////// STYLING //////////- -->
		<style>
		.container{
			margin:10px auto;
			padding-left: 10px;
		}
		h4{
			color: Green;
			font-family: CopperPlate Gothic;
			text-transform: uppercase;
			text-decoration: underline;
			padding-bottom: 10px;
			text-indent: 5px;
		}
		.form-group, form{
			padding-top: 2.5%;
			padding-bottom: 5px;
			margin: 2px auto;
			float: left;	
		}
		.form-group{
			padding-right: 5%;
			padding-bottom: 15%;
		}
		form{
			min-width: 300px;
			border:1px solid;
			border-color: #ddd;
	    	box-shadow: 3px 3px 1px #888888;
			padding:5px;
		}	
		input, select{
			float: right;
			margin-left: 25px;
			height: auto;
		}
		label{
			font-family: Calibri;
			margin: 2px;
			
		}
		</style>
	<!-- -////////// END STYLING //////////- -->

	

<!-- admin page adding games to the database -->

			<div class="container">
			
				<a href='<?php echo "./Picks/clubhouse" ?>' class="btn btn-primary btn-md" style="float:right; margin-top:.3%; margin-right:1%; color:white; font-family:Copperplate Gothic; font-weight:bold;">Clubhouse</a>
			
				<div class="form-group">
					<h4> Add schedule </h4>
					<?php
					echo validation_errors();
					$attributes = array('id' => 'team_names');
					echo form_open('Administration/add_games', $attributes);
					echo '<p>'; //game_id
					echo form_label("Game ID: ", "game_id");
					echo '<input type="number" name="game_id">';
					echo '</p>'; //end game_id
					echo '<p>'; //team start
					echo form_label("Team: ", "team_name");
					// create data array for CI to generate dropdown teams
					echo "<select name='team_info'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo '<p>';//start play_date
					echo form_label("Date: ", "play_date");
					echo '<input type="date" name="play_date">';
					echo '</p>';//end play date
					echo '<p>';//start play time
					echo form_label("Time: ", "play_time");
					echo '<input type="time" name="play_time">';
					echo '</p>';//end play time
					echo '<p>';//submit
					echo form_submit("play_submit", "submit", "class='submit'");
					echo '</p>';//end submit
					echo form_close();//close form
					?>
				</div> <!-- close add schedule form-group -->

			<!-- End of Add Game Schedule --> 

			<!--  Beginning of Game Reconciliation -->
				<div class="form-group">
					<?php
					echo "<h4> Add Winners </h4>";
					echo validation_errors();
					$attributes = array('id' => 'team_names');
					echo form_open('Administration/add_winners', $attributes);
					$options = array(
						"1"=>"week 1",
						"2"=>"week 2",
						"3"=>"week 3",
						"4"=>"week 4",
						"5"=>"week 5",
						"6"=>"week 6",
						"7"=>"week 7",
						"8"=>"week 8",
						"9"=>"week 9",
						"10"=>"week 10",
						"11"=>"week 11",
						"12"=>"week 12",
						"13"=>"week 13",
						"14"=>"week 14",
						"15"=>"week 15",
						"16"=>"week 16",
						"17"=>"week 17",
						);
					echo "<p>";
					echo form_label("Week Number: ", "week_number");
					echo form_dropdown('week_number', $options);
					echo "</p>";
					echo form_label("Game 1: ", "game_1");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_1'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 2: ", "game_2");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_2'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 3: ", "game_3");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_3'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 4: ", "game_4");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_4'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 5: ", "game_5");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_5'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 6: ", "game_6");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_6'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 7: ", "game_7");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_7'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 8: ", "game_8");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_8'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 9: ", "game_9");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_9'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 10: ", "game_10");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_10'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 11: ", "game_11");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_11'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 12: ", "game_12");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_12'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 13: ", "game_13");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_13'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 14: ", "game_14");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_14'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 15: ", "game_15");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_15'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo form_label("Game 16: ", "game_16");
					// create data array for CI to generate dropdown teams
					echo "<select name='game_16'>";
					foreach ($teamInfo as $row) {
						echo '<option value="';
						echo $row->team_id;
						echo '">';
						echo $row->team_location, " ", $row->team_name;
						echo "</option>";
					};
					echo "</select>"; //end dropdown team name
					echo '</p>'; //end team name
					echo '<p>';//submit
					echo form_submit("play_submit", "submit", "class='submit'");
					echo '</p>';//end submit
					echo form_close();//close form
					?> <!-- close php -->
				</div> <!-- close Reconcile Games form-group -->
			</div> <!-- Closes container-->