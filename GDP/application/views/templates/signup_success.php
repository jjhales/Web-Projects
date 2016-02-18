
				<body onload="sus()">

					<button type="button" id="pop_signup_success" class="btn btn-link" data-toggle="modal" data-target="#signup_success" style="color:white">sus</button>
					
					<div class="modal fade" id="signup_success">
						<div class="modal-dialog">
		    				<div class="modal-content">
		    				<!-- header -->
		      					<div class="modal-header" "style=opacity:1;">
		        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        						<span aria-hidden="true">&times;</span>
		        					</button>
		        					<h4 class="modal-title"></h4>
		      					</div>
		      					<!-- sigup success body and login form -->
			     					<div class="modal-body" id="sign_up_success_msg">

									<?php
										echo "<h3>Thank you for Signing up for Game Day Picker</h3>";
										echo "<h3>";
										echo "Please sign in with your new username and password";
										echo "</h3>";
										
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
										echo '<div class="modal-footer">';
										echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
								    	echo '<button id="login_submit" class="btn btn-primary" type="submit">Submit</button>';
										echo form_close();
										?>
							
									</div> <!-- close modal footer -->
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div>