<!-- login modal -->
			<div class="modal fade" id="modal_signin">
				<div class="modal-dialog">
    				<div class="modal-content">
    				<!-- login header -->
      					<div class="modal-header">
        					<h4 class="modal-title">Sign In</h4>
      					</div>
      					<!-- login body -->
	     					<div class="modal-body" id="login">
	     					<!-- login form -->
		     					<?php 
									//call function and open form
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
									echo '<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>';
							    	echo '<button id="login_submit" class="btn btn-primary btn-sm" type="submit">Login</button>';
									echo '<a href="index.php/MGTracker/forgot_password" class="btn btn-primary btn-sm">Reset Password</a>';

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
      					<div class="modal-header">
        					<h4 class="modal-title">Sign Up</h4>
      					</div>
      					<!-- sign up body -->
	     					<div class="modal-body" id="new_user">
	     					<!-- sign up form -->
	     						<?php
	     						echo '<h4>Thank you for signing up for MGTracker</h4>';
	     						//call function and open form
	     						echo validation_errors();
	     						echo form_open('MGTracker/new_user_valid', 'autocomplete="on"');
									// create data array for CI to generate form_input firstname
									$data = array(
										"name" => "fname",
										"id" => "fname",
										"class" => "form-control",
										"style" => "margin-bottom:1%;",
										"placeholder" => " First Name",
										"data-toggle" => "tooltip",
										"data-placement" => "right",
										"title" => "First Name",
										"value" => ""
									);
									//create form input first name
									echo form_input($data);
									//create data array for CI to generate form_input lastname
									$data = array(
										"name" => "lname",
										"id" => "lname",
										"class" => "form-control",
										"style" => "margin-bottom:1%;",
										"placeholder" => " Last Name",
										"data-toggle" => "tooltip",
										"data-placement" => "right",
										"title" => "Last Name",
										"value" => ""
									);
									//create form input last name
									echo form_input($data);
									//create data array for CI to generate form_input company
									$data = array(
										"name" => "company",
										"id" => "company",
										"class" => "form-control",
										"style" => "margin-bottom:1%;",
										"placeholder" => " Company",
										"data-toggle" => "tooltip",
										"data-placement" => "right",
										"title" => "Company Name",
										"value" => ""
									);
									//create form input company
									echo form_input($data);
									//create data array for CI to generate form_input phone
									$data = array(
										"name" => "phone",
										"id" => "phone",
										"class" => "form-control",
										"style" => "margin-bottom:1%;",
										"placeholder" => " Phone",
										"type" => "phone",
										"data-toggle" => "tooltip",
										"data-placement" => "right",
										"title" => "Phone",
										"value" => ""
									);
									//create form input phone
									echo form_input($data);
									//create data array for CI to generate form_input username
									$data = array(
										"name" => "email",
										"id" => "email",
										"class" => "form-control",
										"style" => "margin-bottom:1%;",
										"placeholder" => " Email Address",
										"data-toggle" => "tooltip",
										"data-placement" => "right",
										"title" => "Email Address",
										"value" => ""
									);
									//create form input username
									echo form_input($data);
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
									//create data array for CI to generate form_input password
									$data = array(
										"name" => "passwordConf",
										"id" => "passwordConf",
										"class" => "form-control",
										"style" => "margin-bottom:1%;",
										"type" => "password",
										"placeholder" => " Verify Password",
										"data-toggle" => "tooltip",
										"data-placement" => "right",
										"title" => "Retype your password",
										"value" => ""
									);
									//create form input password
									echo form_input($data);
									echo '<p>';
									//checkbox for newsletter signup
									echo form_checkbox('news', 'news');
									echo "I would like the MGTracker Newsletter";
									echo '</p>';
									//checkbox for agree to make account
									echo '<p>';
									echo form_checkbox('agree', 'agree');
									echo "I agree to share information with MGTracker";
									echo '</p>';
								//close modal body
								echo '</div>'; 
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
			