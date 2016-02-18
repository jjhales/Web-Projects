<!-- login modal -->
			<div class="modal fade" id="modal_signin">
				<div class="modal-dialog">
    				<div class="modal-content">
    				<!-- login header -->
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        						<span aria-hidden="true">&times;</span>
        					</button>
        					<h4 class="modal-title">Sign In</h4>
      					</div>
      					<!-- login body -->
	     					<div class="modal-body" id="login">
	     					<!-- login form -->
		     					<?php 
									// call function and open form
		     						echo '<div class="error_msg"></div>';
									echo form_open('GDP/login_validation', 'autocomplete="on"');
									// add form label username
									echo '<p>';
									// create data array for CI to generate form_input username
									$data = array(
										"name" => "username",
										"id" => "username",
										"placeholder" => " Username",
										"value" => ""

									);
									//create form input username
									echo form_input($data);
									echo '</p>';
									echo '<p>';
									// create data array for CI to generate form_input password
									$data = array(
										"name" => "password",
										"id" => "password",
										"type" => "password",
										"placeholder" => " Password",
										"value" => ""
									);
									//create form input password
									echo form_input($data);
									echo '</p>';
									echo '</div>'; //close modal body
									//footer
									echo '<div class="modal-footer" style="padding-right:18%;">';
									echo '<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>';
							    	echo '<button id="login_submit" class="btn btn-primary btn-sm" type="submit">Submit</button>';
									echo "<a href='http://www.juanitahales.com/GDP/index.php/GDP/forgot_password' class='btn btn-sm btn-link' style='color:white;'>Forgot Password</a>";
									echo form_close();

							   	?> 
							   	
							   	
							</div> <!-- close modal footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		
		<!-- signup modal -->
			<div class="modal fade" id="modal_signup">
				<div class="modal-dialog">
    				<div class="modal-content">
    				<!-- header -->
      					<div class="modal-header" "style=opacity:1;">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        						<span aria-hidden="true">&times;</span>
        					</button>
        					<h4 class="modal-title">Sign Up</h4>
      					</div>
      					<!-- sign up body -->
	     					<div class="modal-body" id="new_user">
	     					<!-- sign up form -->
	     						<?php
	     						
	     						echo '<h4>Thank you for signing up for Game Day Picker</h4>';
	     						echo '<div class="error_msg"></div>';
	     						echo form_open('GDP/new_user_valid', 'autocomplete="on"');
	     						echo '<p>';
									// create data array for CI to generate form_input username
									$data = array(
										"name" => "username",
										"id" => "username",
										"placeholder" => " Username",
										"value" => ""
									);
									//create form input username
								echo form_input($data);
								echo '</p>';
								// add form label email
								echo '<p>';
									// create data array for CI to generate form_input username
									$data = array(
										"name" => "email",
										"id" => "email",
										"placeholder" => " Email Address",
										"value" => ""
									);
									//create form input username
								echo form_input($data);
								echo '</p>';
								// add form label password
								echo '<p>';
									// create data array for CI to generate form_input password
									$data = array(
										"name" => "password",
										"id" => "password",
										"type" => "password",
										"placeholder" => " Password",
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
								echo '</p>';
								echo '<p>';
								echo form_checkbox('agree', 'agree');
								echo "I agree to create an account with Game Day Picker";
								echo "</p>";
								echo '</div>'; //close modal body
								//footer
								echo '<div class="modal-footer">';
								echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
							    echo '<button id="new_user_submit" class="btn btn-primary" type="submit">Submit</button>';
								echo form_close();
							   ?> 
							</div> <!-- close modal footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			