<!-- picks week 13 -->
	<style>
		body{
		max-width: 100%;
		background-color:white;
		font-family: Calibri;
		font-size: 1.0em;
		color: black;
	}
		/*P styling*/
		p{
			font-size:1.2em;
			text-align: center;
			margin-top:5px;
		}
		
		/*Hide radio button (the round disc)
	  	we will use just the label to create push button effect*/
		input[type=radio] {
	    	display:none; 
	    	margin:10px;
		}
		/*
		  Change the look'n'feel of labels (which are adjacent to radio buttons).
		  Add some margin, padding to label
		*/
		input[type=radio] + label {
	    	display:inline-block;
	    	margin:-4px;
	    	padding: 4px 32.5px;
	    	background-color: #e7e7e7;
	    	border-color: #ddd;
	    	box-shadow: 3px 3px 1px #888888;
		}
		/*
	 	Change background color for label next to checked radio button
	 	to make it look like highlighted button
		*/
		input[type=radio]:checked + label { 
	   		background-image: none;
	    	background-color:blue;
		}
		/*Game Day titles (Thursday, Sunday, Monday)*/
		h4{
			font-family: ;	
		}
		#atsign{

			font-size: 1.2em;
			font-weight: bolder;
		}
		#playtime{
			font-size: 1.3em;
			padding-left: 7px;
			padding-right: 7px;
			margin:0 0 -5px;
		}
		.teammatchups{
			float:left;
		}
		.match{
			padding-right: 1.5%;
		}
	</style>
	<script>
		$(function(){
			$d = new Date();
			$game1 = new Date(2015, 11, 03, 20, 25, 00, 00);
			$game2 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game3 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game4 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game5 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game6 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game7 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game8 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game9 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game10 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game11 = new Date(2015, 11, 06, 13, 00, 00, 00);
			$game12 = new Date(2015, 11, 06, 16, 05, 00, 00);
			$game13 = new Date(2015, 11, 06, 16, 05, 00, 00);
			$game14 = new Date(2015, 11, 06, 16, 25, 00, 00);
			$game15 = new Date(2015, 11, 06, 20, 30, 00, 00);
			$game16 = new Date(2015, 11, 07, 20, 30, 00, 00);

			if($d > $game1){
				$('input[name=game_1]').attr('disabled', true)
			}else{};
			if($d > $game2){
				$('input[name=game_2]').attr('disabled', true)
			}else{};
			if($d > $game3){
				$('input[name=game_3]').attr('disabled', true)
			}else{};
			if($d > $game4){
				$('input[name=game_4]').attr('disabled', true)
			}else{};
			if($d > $game5){
				$('input[name=game_5]').attr('disabled', true)
			}else{};
			if($d > $game6){
				$('input[name=game_6]').attr('disabled', true)
			}else{};
			if($d > $game7){
				$('input[name=game_7]').attr('disabled', true)
			}else{};
			if($d > $game8){
				$('input[name=game_8]').attr('disabled', true)
			}else{};
			if($d > $game9){
				$('input[name=game_9]').attr('disabled', true)
			}else{};
			if($d > $game10){
				$('input[name=game_10]').attr('disabled', true)
			}else{};
			if($d > $game11){
				$('input[name=game_11]').attr('disabled', true)
			}else{};
			if($d > $game12){
				$('input[name=game_12]').attr('disabled', true)
			}else{};
			if($d > $game13){
				$('input[name=game_13]').attr('disabled', true)
			}else{};
			if($d > $game14){
				$('input[name=game_14]').attr('disabled', true)
			}else{};
			if($d > $game15){
				$('input[name=game_15]').attr('disabled', true)
			}else{};
			if($d > $game16){
				$('input[name=game_16]').attr('disabled', true)
			}else{};
			});
			
<?php							

// shows db  user picks sets attribute checked
			foreach ($dbpickvalues as $row) 
			{
				$g1 = $row->game_1;
				$g2 = $row->game_2;
				$g3 = $row->game_3;
				$g4 = $row->game_4;
				$g5 = $row->game_5;
				$g6 = $row->game_6;
				$g7 = $row->game_7;
				$g8 = $row->game_8;
				$g9 = $row->game_9;
				$g10 = $row->game_10;
				$g11 = $row->game_11;
				$g12 = $row->game_12;
				$g13 = $row->game_13;
				$g14 = $row->game_14;
				$g15 = $row->game_15;
				$g16 = $row->game_16;
				$user = $row->username;
				$week = $row->week_number;

				echo "$(function(){
						if($('input[name=game_1][value=' + $g1 + ']').attr('disabled',true)){
							$('input[name=game_1][value=' + $g1 + ']').removeAttr('disabled',true)
    						$('input[name=game_1][value=' + $g1 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_2][value=' + $g2 + ']').attr('disabled',true)){
							$('input[name=game_2][value=' + $g2 + ']').removeAttr('disabled',true)
    						$('input[name=game_2][value=' + $g2 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_3][value=' + $g3 + ']').attr('disabled',true)){
							$('input[name=game_3][value=' + $g3 + ']').removeAttr('disabled',true)
    						$('input[name=game_3][value=' + $g3 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_4][value=' + $g4 + ']').attr('disabled',true)){
							$('input[name=game_4][value=' + $g4 + ']').removeAttr('disabled',true)
    						$('input[name=game_4][value=' + $g4 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_5][value=' + $g5 + ']').attr('disabled',true)){
							$('input[name=game_5][value=' + $g5 + ']').removeAttr('disabled',true)
    						$('input[name=game_5][value=' + $g5 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_6][value=' + $g6 + ']').attr('disabled',true)){
							$('input[name=game_6][value=' + $g6 + ']').removeAttr('disabled',true)
    						$('input[name=game_6][value=' + $g6 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_7][value=' + $g7 + ']').attr('disabled',true)){
							$('input[name=game_7][value=' + $g7 + ']').removeAttr('disabled',true)
    						$('input[name=game_7][value=' + $g7 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_8][value=' + $g8 + ']').attr('disabled',true)){
							$('input[name=game_8][value=' + $g8 + ']').removeAttr('disabled',true)
    						$('input[name=game_8][value=' + $g8 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_9][value=' + $g9 + ']').attr('disabled',true)){
							$('input[name=game_9][value=' + $g9 + ']').removeAttr('disabled',true)
    						$('input[name=game_9][value=' + $g9 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_10][value=' + $g10 + ']').attr('disabled',true)){
							$('input[name=game_10][value=' + $g10 + ']').removeAttr('disabled',true)
    						$('input[name=game_10][value=' + $g10 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_11][value=' + $g11 + ']').attr('disabled',true)){
							$('input[name=game_11][value=' + $g11 + ']').removeAttr('disabled',true)
    						$('input[name=game_11][value=' + $g11 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_12][value=' + $g12 + ']').attr('disabled',true)){
							$('input[name=game_12][value=' + $g12 + ']').removeAttr('disabled',true)
    						$('input[name=game_12][value=' + $g12 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_13][value=' + $g13 + ']').attr('disabled',true)){
							$('input[name=game_13][value=' + $g13 + ']').removeAttr('disabled',true)
    						$('input[name=game_13][value=' + $g13 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_14][value=' + $g14 + ']').attr('disabled',true)){
							$('input[name=game_14][value=' + $g14 + ']').removeAttr('disabled',true)
    						$('input[name=game_14][value=' + $g14 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_15][value=' + $g15 + ']').attr('disabled',true)){
							$('input[name=game_15][value=' + $g15 + ']').removeAttr('disabled',true)
    						$('input[name=game_15][value=' + $g15 + ']').attr('checked',true)
    					}else{};
    					if($('input[name=game_16][value=' + $g16 + ']').attr('disabled',true)){
							$('input[name=game_16][value=' + $g16 + ']').removeAttr('disabled',true)
    						$('input[name=game_16][value=' + $g16 + ']').attr('checked',true)
    					}else{};

					});";

//show winner reconcile
				foreach($week13_winners as $row)
				{
				$winner_game_1 = $row->game_1;
				$winner_game_2 = $row->game_2;
				$winner_game_3 = $row->game_3;
				$winner_game_4 = $row->game_4;
				$winner_game_5 = $row->game_5;
				$winner_game_6 = $row->game_6;
				$winner_game_7 = $row->game_7;
				$winner_game_8 = $row->game_8;
				$winner_game_9 = $row->game_9;
				$winner_game_10 = $row->game_10;
				$winner_game_11 = $row->game_11;
				$winner_game_12 = $row->game_12;
				$winner_game_13 = $row->game_13;
				$winner_game_14 = $row->game_14;
				$winner_game_15 = $row->game_15;
				$winner_game_16 = $row->game_16;


				
				echo "$(function(){
							if ($g1 == $winner_game_1){
								$('label[id= '+ $g1 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g1 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g2 == $winner_game_2){
								$('label[id= '+ $g2 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g2 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g3 == $winner_game_3){
								$('label[id= '+ $g3 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g3 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g4 == $winner_game_4){
								$('label[id= '+ $g4 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g4 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g5 == $winner_game_5){
								$('label[id= '+ $g5 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g5 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g6 == $winner_game_6){
								$('label[id= '+ $g6 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g6 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g7 == $winner_game_7){
								$('label[id= '+ $g7 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g7 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g8 == $winner_game_8){
								$('label[id= '+ $g8 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g8 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g9 == $winner_game_9){
								$('label[id= '+ $g9 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g9 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g10 == $winner_game_10){
								$('label[id= '+ $g10 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g10 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g11 == $winner_game_11){
								$('label[id= '+ $g11 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g11 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g12 == $winner_game_12){
								$('label[id= '+ $g12 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g12 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g13 == $winner_game_13){
								$('label[id= '+ $g13 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g13 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
								if ($g14 == $winner_game_14){
								$('label[id= '+ $g14 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g14 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g15 == $winner_game_15){
								$('label[id= '+ $g15 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g15 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							if ($g16 == $winner_game_16){
								$('label[id= '+ $g16 +' ]').css('background','green url(../../images/win.png)no-repeat left center')
							}else{
								$('label[id= '+ $g16 +' ]').css('background', 'red url(../../images/loss.png)no-repeat left center')}
							});";
							
							
							if ($g1 == $winner_game_1){
								$win1 = 1;
								$loss1 = 0;
							}else{
								$loss1 = 1;
								$win1 = 0;
							};
							if ($g2 == $winner_game_2){
								$win2 = 1;
								$loss2 = 0;
							}else{
								$loss2 = 1;
								$win2 = 0;
							};
							if ($g3 == $winner_game_3){
								$win3 = 1;
								$loss3 = 0;
							}else{
								$loss3 = 1;
								$win3 = 0;
							};
							if ($g4 == $winner_game_4){
								$win4 = 1;
								$loss4 = 0;
							}else{
								$loss4 = 1;
								$win4 = 0;
							};
							if ($g5 == $winner_game_5){
								$win5 = 1;
								$loss5 = 0;
							}else{
								$loss5 = 1;
								$win5 = 0;
							};
							if ($g6 == $winner_game_6){
								$win6 = 1;
								$loss6 = 0;
							}else{
								$loss6 = 1;
								$win6 = 0;
							};
							if ($g7 == $winner_game_7){
								$win7 = 1;
								$loss7 = 0;
							}else{
								$loss7 = 1;
								$win7 = 0;
							};
							if ($g8 == $winner_game_8){
								$win8 = 1;
								$loss8 = 0;
							}else{
								$loss8 = 1;
								$win8 = 0;
							};
							if ($g9 == $winner_game_9){
								$win9 = 1;
								$loss9 = 0;
							}else{
								$loss9 = 1;
								$win9 = 0;
							};
							if ($g10 == $winner_game_10){
								$win10 = 1;
								$loss10 = 0;
							}else{
								$loss10 = 1;
								$win10 = 0;
							};
							if ($g11 == $winner_game_11){
								$win11 = 1;
								$loss11 = 0;
							}else{
								$loss11 = 1;
								$win11 = 0;
							};
							if ($g12 == $winner_game_12){
								$win12 = 1;
								$loss12 = 0;
							}else{
								$loss12 = 1;
								$win12 = 0;
							};
							if ($g13 == $winner_game_13){
								$win13 = 1;
								$loss13 = 0;
							}else{
								$loss13 = 1;
								$win13 = 0;
							};
							if ($g14 == $winner_game_14){
								$win14 = 1;
								$loss14 = 0;
							}else{
								$loss14 = 1;
								$win14 = 0;
							};
							if ($g15 == $winner_game_15){
								$win15 = 1;
								$loss15 = 0;
							}else{
								$loss15 = 1;
								$win15 = 0;
							};
							if ($g16 == $winner_game_16){
								$win16 = 1;
								$loss16 = 0;
							}else{
								$loss16 = 1;
								$win16 = 0;
							};
							
							$week_wins = ($win1 + $win2 + $win3 + $win4 + $win5 + $win6 + $win7 + $win8 + $win9 + $win10 + $win11 + $win12 + $win13 + $win14 + $win15 + $win16);
							$week_loss = ($loss1 + $loss2 + $loss3 + $loss4 + $loss5 + $loss6 + $loss7 + $loss8 + $loss9 + $loss10 + $loss11 + $loss12 + $loss13 + $loss14 + $loss15 + $loss16);
							//if statement to insert or pass
							$query = $this->db->get_where('personal_stats', array('username'=>$user, 'week_number'=>$week, 'wins'=>$week_wins, 'losses'=>$week_loss));
								if($query->result()){
									$this->db->set("username", $user);
									$this->db->set("week_number", $week);
									$this->db->set("wins", $week_wins);
									$this->db->set("losses" ,$week_loss);
									$this->db->where("username", $user);
									$this->db->where("week_number", $week);
									$this->db->update('personal_stats');
									echo "$(function(){
											$('input').prop('disabled', true)});";
									}else{
											$this->db->set("username", $user);
											$this->db->set("week_number", $week);
											$this->db->set("wins", $week_wins);
											$this->db->set("losses" ,$week_loss);
											$this->db->insert('personal_stats');
											echo "$(function(){
													$('input').prop('disabled', true)});";
								}
						}}

			
		?>
		</script>
		   <div class="container-fluid" id="week13_Picks">
		  	<div>
				<h3 style="font-family:Copperplate Gothic;margin-left:10px;float:left;">Week 13 Matchups</h3>
			</div>

			<?php
				$this->load->helper('form');
				echo "<div id='games'class='container-fluid'>";
				echo validation_errors();
				// $hidden = array('pick_time' => date("Y-m-d H:i:s"));
				echo form_open('Picks/picks_validation');
				//username hidden
				echo "<input type='hidden' name='username' value='";
				echo $this->session->userdata('username');
				echo "'>"; //validates
				echo "<input type='hidden' name='week_number' value='13'>";
			//Thursday matchups
				echo "<div id='thurs_games' style='clear:both;'>";
				echo "<h4><u>Thursday December 03, 2015</u></h4>";
				//game1
				echo '<div class="match" style="float:left;">';
				foreach($team1 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_1',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team1 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team2 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_1',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				echo "</div>";//close thursday matchups
		//Sunday matchups
				echo "<div id='sun_games' style='clear:both;'>";
				echo "<h4><u>Sunday December 6, 2015</u></h4>";
				//game2
				echo '<div class="match" style="float:left">';
				foreach($team3 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_2',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team3 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team4 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_2',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game3
				echo '<div class="match" style="float:left">';
				foreach($team5 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_3',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team5 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team6 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_3',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game4
				echo '<div class="match" style="float:left;">';
				foreach($team7 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_4',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team7 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team8 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_4',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game5
				echo '<div class="match" style="float:left">';
				foreach($team9 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_5',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team9 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team10 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_5',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game6
				echo '<div class="match" style="float:left">';
				foreach($team11 as $row){
					echo '<div class="teammatchups" style="float:left">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_6',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team11 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team12 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_6',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game7
				echo '<div class="match" style="float:left">';
				foreach($team13 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_7',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team13 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team14 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_7',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game8
				echo '<div class="match" style="float:left">';
				foreach($team15 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_8',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team15 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team16 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_8',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game9
				echo '<div class="match" style="float:left">';
				foreach($team17 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_9',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team17 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team18 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_9',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game10
				echo '<div class="match" style="float:left">';
				foreach($team19 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_10',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team19 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team20 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_10',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game11
				echo '<div class="match" style="float:left">';
				foreach($team21 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_11',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team21 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team22 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_11',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game12
				echo '<div class="match" style="float:left">';
				foreach($team23 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_12',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team23 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team24 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_12',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game13
				echo '<div class="match" style="float:left">';
				foreach($team25 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_13',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team25 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team26 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_13',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game14
				echo '<div class="match" style="float:left">';
				foreach($team27 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_14',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team27 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team28 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_14',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				//game15
				echo '<div class="match" style="float:left">';
				foreach($team29 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_15',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team29 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team30 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_15',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				echo '</div>';//close sunday matchups
			
			//Monday Matchups	
				echo "<div id='mon_games' style='clear:both;'>";
				echo "<h4><u>Monday December 7, 2015</u></h4>";
				//game16
				echo '<div class="match" style="float:left">';
				foreach($team31 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_16',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "<div style='float:left;'>";
				echo "<p id='atsign'>@</p>";
				echo "<p id='playtime'>";
				foreach ($team31 as $row) {
					echo $row->play_time;
				}
				echo "</p>";
				echo "</div>";
				foreach($team32 as $row){
					echo '<div class="teammatchups">';
					$data = array(
						'id' => $row->team_name,
						'name' => 'game_16',
						'value' => $row->team_info,
						);
					echo form_radio($data);
					echo "<label";
					echo " id = '" ;
					echo $row->team_info;
					echo "'for='";
					echo $row->team_name;
					echo "'>";
					echo "<img id=' ";
					echo $row->team_name;
					echo "'src='../..";
					echo $row->team_logo;
					echo "' style='width:50;height:50;'";
					echo ">";
					echo "</label>";
					echo "<p>";
					echo $row->team_location, " ", $row->team_name;
					echo "</p>";
					echo "</div>";
				}
				echo "</div>";
				
				echo "</div>"; //close monday matchups
			    
			    echo '</div>';//close games
				
				echo '<button id="picks_submit" class="btn btn-primary btn-lg" type="submit">Save</button>';
				
				echo form_close();

			?>
		</div> <!-- closes container -->
				
				
				
				
				
				

