							

							<button id="manageGroups" class="btn btn-success btn-md" data-toggle="modal" data-target="#manage_groups" style="display:none;margin:1%;">Manage</button>
								<div class="modal fade" id="manage_groups">
									<div class="modal-dialog">
					    				<div class="modal-content">
					    				<!-- header -->
					      					<div class="modal-header" "style=opacity:1;">
					        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					        						<span aria-hidden="true">&times;</span>
					        					</button>
					        					<h4 class="modal-title">Manage Group</h4>
					      					</div>
					      					<!-- sign up body -->
						     					<div class="modal-body">
						     			<!-- script to disable button remove button if group leader make it to where you cannot delete yourself -->
						     					<script type="text/javascript">
												<?php 
													foreach ($members as $row){
														$uid = $row->user_id;
														$gl = $row->group_leader;
														if ($uid == $gl){
															echo "$(function(){
																$('#remove').prop('disabled', true)});";
														}else{}
													}
												?>

												</script>
						     					<?php
						     					echo '<p>Applicants</p>';
						     					foreach ($app_members as $row){
						     						echo '<div>';
						     						$this->load->helper('form');
													echo form_open('GDP/group_choice');
													echo "<input type='hidden' name='group_name' value='";
													echo $row->group_name;
													echo "'>";
													echo "<input type='hidden' name='member' value='";
													echo $row->user_id;
													echo "'>";
													echo $row->username;
													echo "<input type='radio' name='memberchoice' value='accept' id='accept'>accept";
						     						echo "<input type='radio' name='memberchoice' value='deny' id='deny'>deny";
						     						echo '</div>';
						     						echo "<button class='btn btn-primary btn-sm' type='submit'>Submit</button>";
						     						echo form_close();
						     					}

						     					
						     					
						     					echo '<p>Members</p>';
						     					foreach ($members as $row) {
						     						echo '<div>';
						     						echo form_open('GDP/remove_members');
						     						echo "<input type='hidden' name='group_name' value='";
													echo $row->group_name;
													echo "'>";
													echo "<input type='hidden' name='member' value='";
													echo $row->user_id;
													echo "'>";
						     						echo $row->username;
						     						echo "<button id='remove' style='margin-left:10px;'class='btn btn-danger btn-sm' type='submit'><span class='glyphicon glyphicon-remove-sign'></span></button>";
						     						echo form_close();
						     						echo '</div>'; 
						     					}
						     					?>
						     					</div>
						     					<div class="modal-footer">
												<button type="button" class="btn btn-primary btn-md" class="close" data-dismiss="modal">Close</button>
												<a href='<?php echo "../Picks/clubhouse"?>' class="btn btn-primary btn-md" style="float:right; margin-right:2%; margin-bottom:2%; color:white;">Clubhouse</a>
												
												</div> <!-- close modal footer -->
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
