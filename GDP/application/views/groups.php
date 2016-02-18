					<style>
						h3{
							font-family: Copperplate Gothic;
							text-indent: 10px;
							padding-top: 2.5%;
						}
						table{
							width:50%;
							margin:1%;
							padding:1%;
							font-family: Calibri;

						}
						td{
							text-indent: 12px;
							font-size: 1.2em;
							margin-bottom: 10px;
						}
						th{
							height:35px;
							text-align: left;
						}
						.big-button{
						float: right;
						margin-top:.3%;
						margin-right: 1%;
						font-family: Copperplate Gothic;
						font-weight: bold;
						text-align: center;
					}
							
					</style>
						
						<ul class="nav-stacked">
							<div>
								<a href='<?php echo "../Picks"?>' class='btn btn-primary btn-sm big-button' style="color:white;">Picks</a>
							</div>
								<a href='<?php echo "../GDP/teams_info"?>' class='btn btn-primary btn-sm big-button'style="color:white;">Teams</a>
							</div>
						</ul>
						
						
						<div class="container">
						<h3>My Groups</h3>
							<table>
								<?php
									echo "<th></th>";
									echo "<th>Group Name</th>";
									echo "<th>Members</th>";
									echo "<th>Rank</th>";
								foreach ($user_groups as $row) {
									//groups associated with user

									echo "<tr>";
									echo "<td>";
									$this->load->helper('form');
									echo form_open('GDP/groupstats');
									echo "<input type='hidden' name='group_name' value='";
									echo $row->group_name;
									echo "'>";
									echo "<button style='margin-top:15px;'class='btn btn-primary btn-md' type='submit' id='grpstats'>Group Stats</button>";
									echo form_close();
									echo "</td>";
									echo "<td>";
									
									echo $row->group_name;
									
									$group = $row->group_name;
									$sql = 'SELECT COUNT(group_members.member) as memberCount FROM group_members WHERE group_members.group_name = ?';
									$query = $this->db->query($sql, $group);
									$result = $query->result();
									echo "</td>";
								//#members associated with user groups
									echo "<td>";
			 						foreach ($result as $row) {
			 							echo $row->memberCount;
			 						}
			 						echo "</td>";
									echo "<td>";
									echo "0";
									echo "</td>";
									echo "</tr>";
								}
								?>
							</table>
							<!-- create and search for group -->
							<div class="col-lg-12" style="margin-top:25%;">
							<?php
							//form to create groups
							$this->load->helper('form');
								echo "<div class='col-lg-6 col-md-6 col-sm-12 col-sm12'>";
								echo form_open('GDP/group_create_valid');
								//user_id hidden
								foreach($user_lookup as $row){
								echo "<input type='hidden' name='group_leader' value='";
								echo $row->user_id;
								echo "'>";
								};
								echo form_label('Create Group: ', 'group_name');
								echo form_input('group_name', '');
								echo '<button id="group_submit" class="btn btn-primary btn-md" type="submit">Create</button>';
								echo form_close();
								echo "</div>";
							//search groups
								$this->load->helper('form');
								echo "<div class='col-lg-6 col-md-6 col-sm-12 col-sm12'>";
								echo form_open('GDP/groupSearch');
								echo form_label('Search for Group: ', 'group_name');
								$search = array('name'=>'search','id'=>'search','value'=>'');
								echo form_input($search);
								echo '<button id="group_search_submit" class="btn btn-primary btn-md" type="submit value="search">Search</button>';
								echo form_close();
								echo "</div>";
								?>
							</div>
						</div>
								
					

