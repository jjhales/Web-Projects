				<style>
					.big-button{
						float: right;
						margin-top:.3%;
						margin-bottom:1.5%;
						margin-right: .5%;
						font-family: Copperplate Gothic;
						font-weight: bold;
						text-align: center;
					}
					
					th{
						padding-right: 10px;
						text-align: left;
						text-decoration: underline;
					}
					td{
						padding-right: 10px;
						font-size: 1.0em;
					}
					
					
				</style>
				<script>
					<?php
					$username = $this->session->userdata('username');
					$sql = 'SELECT gdp_users.team_allegience, teams.team_theme FROM gdp_users JOIN teams on teams.team_id = gdp_users.team_allegience WHERE username = ?';
					$query = $this->db->query($sql, $username);
					$result = $query->result();
					foreach ($result as $row) {
						echo "$(function(){
							$('body').css('background', 'url(../..$row->team_theme)');
							$('body').css('background-repeat', 'repeat-y');
							$('body').css('background-position','98% 35.25%');
							$('body').css('background-size', '15%');
						});";
						# code...
					}
					?>
			 	</script>
					<div style='background-color:white;'>			
					<!-- <div class="container"> -->
						<ul style='padding-top:1%;padding-bottom:1%;padding-right:1%;'class="nav nav-pills;">
							<h3 style="font-family:CopperPlate Gothic;margin-left:10px;text-align:left; margin-top:0%;">Welcome to the Clubhouse</h3>
							<div>
								<a href='<?php echo "../Picks"?>' class='btn btn-primary btn-sm big-button' style="color:white;">Picks</a>
							</div>
							<div>
								<input type="button" value="Standings" class='btn btn-danger btn-sm big-button' onclick="window.open('http://espn.go.com/nfl/standings', 'popUpWindow','height=400,width=600,left=10,top=10,,scrollbars=yes,menubar=no'); return false;"/>
							</div>
							<div>
								<a href='<?php echo "../GDP/groups_display"?>' class='btn btn-primary btn-sm big-button' style="color:white;">Groups</a>
							</div>
							<div>
								<a href='<?php echo "../GDP/teams_info"?>' class='btn btn-primary btn-sm big-button' style="color:white;">Teams</a>
							</div>
							<div>
								<button class='btn btn-primary btn-sm big-button' onclick="view_profile()">Profile</button>
							</div>
							<div>
								<a href = "../Administration" id="manageGroups" class='btn btn-success btn-sm big-button' style='display:none; color:white;'>Manage</a></button>
								<?php
									foreach ($profile_display as $row) {
										$data = $row->admin;
										if ($data == 'yes'){
											echo "<body onload='manage_button()'>";
										}else{
											echo "<body>";
										} 
									}
								?>
							</div>
						</ul>
						
					<div id="storeme" style="margin-left:2%;">

						<?php
						echo '<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" id="profile_view" style="display:none; font-family:Times New Roman; font-size:18px;">';
						echo '<h3 style="text-decoration:underline;">My Profile</h3>';
						foreach ($profile_display as $row) {
							echo "<p style='margin-bottom:.5%; text-align:left;'><strong>Username:</strong> ";
							echo $row->username;
							echo "</p>";
							echo "<p style='margin-bottom:1%;'><strong>Email:</strong> ";
							echo $row->email;
							echo "</p>";
							echo "<p style='text-align:left;'><strong>Team Allegience:</strong></p>";
							echo "<p>";
							echo "<img id='";
							echo $row->team_allegience;
							echo "'";
							echo "src='../..";
							echo $row->team_logo;
							echo "'style='width:65;height:65; margin-left:15%; margin-right:.75%; border:7px solid black;'>";
							
							echo "</p>";
							echo "<p>";
							echo $row->team_location, " ", $row->team_name;
							echo "</p>";
							
						}
						echo "<p text-align:left;'><strong>2015 Season Record:</strong></p>";
						echo '<p style="text-align:left;">';
						echo "<strong>Overall Record:</strong>";
						echo "<table>";
						echo "<th>%</th>";
						echo "<th>Wins</th>";
						echo "<th>Losses</th>";
						echo "<tr>";
						foreach($total as $row){
							if($row->wins > 0){
							echo "<td>";
							$percentage = ($row->wins/($row->wins + $row->losses))*100; 
							echo (round($percentage, 2));
							echo "%";
							echo "</td>";
							echo "<td>";
							echo $row->wins;
							echo "</td>";
							echo "<td>";
							echo $row->losses;
							echo "</td>";
							echo "<td>";
							}
						}
						echo "</tr>";
						echo "</table>";
						echo "</p>";
						echo '<p style="text-align:left;">';
						echo "<strong>Individual Weeks Record:</strong>";
						echo "<table>";
						echo "<th>%</th>";
						echo "<th>Wins</th>";
						echo "<th>Losses</th>";
						echo "<th>Week</th>";
						foreach ($personal as $row) {
						echo '<p style="text-align:left;">';
						echo "<tr>";
						if($row->wins > 0){
						echo "<td>";
						$percentage = ($row->wins/($row->wins + $row->losses))*100; 
						echo (round($percentage, 2));
						echo "%";
						echo "</td>";
						echo "<td>";
						echo $row->wins;
						echo "</td>";
						echo "<td>";
						echo $row->losses;
						echo "</td>";
						echo "<td>";
						echo $row->week_number;
						echo "</td>";
						echo "</tr>";
						echo "</p>";
					}}
						echo "</table>";
						echo "</p>";
						echo '<button style="font-family:Copperplate Gothic;margin-bottom:1%;" type="button" class="btn btn-primary btn-sm"  onclick="show_previous()">Previous Seasons</button>';
						echo "<div id='previous_seasons' style='display:none;'><p><strong>Previous Season Records:</strong></p><p>";
						echo "<table>";
						echo "<th>year</th>";
						echo "<th>%</th>";
						echo "<th>Wins</th>";
						echo "<th>Losses</th>";
						echo "<tr>";
						echo "<td>";
						echo "2015";
						echo "</td>";
						foreach($total as $row){
							if($row->wins > 0){
							echo "<td>";
							$percentage = ($row->wins/($row->wins + $row->losses))*100; 
							echo (round($percentage, 2));
							echo "%";
							echo "</td>";
							echo "<td>";
							echo $row->wins;
							echo "</td>";
							echo "<td>";
							echo $row->losses;
							echo "</td>";
							echo "<td>";
						}}
						echo "</tr>";
						echo "</table>";
						echo "</p>";
						echo '<button style="margin-top:0.5%; margin-bottom:0.5%; font-family:Copperplate Gothic;" type="button" class="btn btn-primary btn-sm" value="close" onclick="hide_previous()">Close</button>'; 
						echo "</div>";
						echo '</br>';
						echo '<button style=" margin-top:0.5%; margin-bottom:1%;margin-right:.5%; font-family:Copperplate Gothic;" type="button" id="pop_edit_profile" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit_profile">Edit Profile</button>';
						echo '<button style=" margin-top:0.5%; margin-bottom:1%;margin-right:.5%; font-family:Copperplate Gothic;" type="button" id="pop_change_password" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#changepass">Change Password</button>';
						echo '<button style="margin-left:.5%; margin-top:0.5%; margin-bottom:1%; font-family:Copperplate Gothic;" type="button" class="btn btn-primary btn-sm" value="close" onclick="hide_profile()">Close</button>';
						echo '</div>';
					?>
					
					
						
		
					<!-- NFL twitter feed -->
					<div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">			
						<h3 style="text-decoration:underline;">@NFL Twitter Feed</h3>
						<p style='width:90%;padding-bottom:15%;'><a class="twitter-timeline" href="https://twitter.com/NFL" data-widget-id="633865166271057920">Tweets by @NFL</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</p>
					</div>
					<!-- ESPN NFL Twitter feed -->
					<div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">			
						<h3 style="text-decoration:underline;">@ESPNNFL Twitter Feed</h3>
						<p style='width:90%;padding-bottom:15%;'><a class="twitter-timeline" href="https://twitter.com/ESPNNFL" data-widget-id="634390166933630976">Tweets by @ESPNNFL</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</p>
					</div>

					
					<!-- modal to edit profile -->
					<div class="modal fade" id="edit_profile">
						<div class="modal-dialog">
		    				<div class="modal-content">
		    				<!-- header -->
		      					<div class="modal-header" "style=opacity:1;">
		        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        						<span aria-hidden="true">&times;</span>
		        					</button>
		        					<h1 class="modal-title">Edit Profile</h1>
		      					</div>
		      					<!-- edit profile body -->
			     					<div class="modal-body" id="e_profile">
										<?php
										echo form_open('Picks/edit_profile', 'autocomplete="on"');
										foreach ($profile_display as $row) {
											echo "<p>";
											echo "<input type='hidden' name='user_id' value='";
											echo $row->user_id;
											echo "'>";
											echo '</p>';
											echo '<p style="margin-bottom:15px;">';
											$data = array(
												"name" => "username",
												"value" => $row->username,
												);
											echo form_label("Username &#160;");
											echo form_input($data);
											echo '</p>';

											echo '<p style="margin-bottom:15px;">';
											$data = array(
												"name" => "email",
												"value" => $row->email,
												);
											echo form_label("&#160 Email &#160;");
											echo form_input($data);
											echo '</p>';
											
										}
										echo "<div class='col-md-12'>";
										echo "<h3 style='margin-bottom:2%;'>Team Allegience:</h3>";
										echo "</div>";
										echo '<br>';
										echo '<div style="margin-right:2.5%; margin-left:2.5%;">';
										foreach ($teams_display as $row) {
											$data = array(
												"name" => "team_allegience",
												"value" => $row->team_id,
											);
											echo form_radio($data);
											echo "<label for='team_allegience' style='margin-right:2%;'>";
											echo "<img id=' ";
											echo $row->team_name;
											echo "'src='../..";
											echo $row->team_logo;
											echo "' style='width:40;height:40;'";
											echo ">";
											echo "</label>";
											
											
										}
										echo '</div>'; 
										echo '<div class="modal-footer">';
										echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
							    		echo '<button id="login_submit" class="btn btn-primary" type="submit">Submit</button>';
							    		echo '</div>';
										echo form_close();
										?>
									</div> <!-- /.modal-body -->
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						
						<div class="modal fade" id="changepass">
							<div class="modal-dialog">
			    				<div class="modal-content">
			    				<!-- login header -->
			      					<div class="modal-header">
			        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        						<span aria-hidden="true">&times;</span>
			        					</button>
			        					<h4 class="modal-title">Change Password</h4>
			      					</div>
			      					<!-- login body -->
				     					<div class="modal-body" id="login">
				     					<!-- login form -->
					     					<?php 
												// call function and open form
					     						echo '<div class="error_msg"></div>';
												echo form_open('Picks/change_password', 'autocomplete="on"');
												foreach ($profile_display as $row) {
												echo "<p>";
												echo "<input type='hidden' name='user_id' value='";
												echo $row->user_id;
												}
												echo "'>";
												echo '</p>';
												echo '<p>';
												// create data array for CI to generate form_input password
												$data = array(
													"name" => "password",
													"id" => "password",
													"type" => "password",
													"placeholder" => " New Password",
													"value" => ""
												);
												//create form input password
												echo form_input($data);
												echo '</p>';
												echo '<p>';
												// create data array for CI to generate form_input password
												$data = array(
													"name" => "passwordConf",
													"id" => "passwordConf",
													"type" => "password",
													"placeholder" => " Verify Password",
													"value" => ""
												);
												//create form input password
												echo form_input($data);
												echo '</div>'; //close modal body
												//footer
												echo '<div class="modal-footer">';
												echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
										    	echo '<button id="login_submit" class="btn btn-primary" type="submit">Submit</button>';
												echo form_close();
										   	?> 
										</div> <!-- close modal footer -->
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
									
							
					</div><!-- End Container -->
				</div>




	