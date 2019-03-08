<script type="text/javascript">
	function sus(){document.getElementById('pop_signup_success').click();}
</script>
			<body onload="sus()">

					<button type="button" id="pop_signup_success" class="btn btn-link" data-toggle="modal" data-target="#signup_success" style="color:white"></button>
					
					<div class="modal fade" id="signup_success">
						<div class="modal-dialog">
		    				<div class="modal-content">
		    				<!-- header -->
		      					<div class="modal-header" "style=opacity:1;">
		        					<h4 class="modal-title"></h4>
		      					</div>
		      					<!-- sigup success body and login form -->
			     					<div class="modal-body" id="sign_up_success_msg">

									<?php
									echo "<h3>Thank you for Signing up for MGTracker</h3>";
									echo "<h3>";
									echo "Please sign in with your new username and password";
									echo "</h3>";
										
									echo validation_errors();
									echo form_open('MGTracker/login_validation', 'autocomplete="on"');
									//create data array for CI to generate form_input username
									$data = array(
										"name" => "username",
										"id" => "username",
										"class" => "form-control",
										"style" => "margin-bottom:1%;",
										"placeholder" => " Username",
										"data-toggle" => "tooltip",
										"data-placement" => "right",
										"title" => "Username",
										"value" => ""
									);
									//create form input username
									echo form_input($data);
									//create data array for CI to generate form_input password
									$data = array(
										"name" => "password",
										"id" => "password",
										"class" => "form-control",
										"style" => "margin-bottom:1%;",
										"type" => "password",
										"placeholder" => " Password",
										"data-toggle" => "tooltip",
										"data-placement" => "right",
										"title" => "Password",
										"value" => ""
									);
									//create form input password
									echo form_input($data);
									//close modal body
									echo '</div>'; 
									//modal footer
									echo '<div class="modal-footer" style="padding-right:18%;">';
									echo '<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>';
							    	echo '<button id="login_submit" class="btn btn-primary btn-sm" type="submit">Login</button>';
									echo '<button type="button" class="btn btn-sm btn-link">Forgot Password</button>';
									echo form_close();

									?>
							
									</div> <!-- close modal footer -->
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div>