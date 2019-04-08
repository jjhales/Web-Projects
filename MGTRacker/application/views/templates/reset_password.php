<?php
								echo '<div style="padding-left:2.5%;"class="container">';
								echo '<h3>Reset your password</h3>';
								echo '<div class="error_msg"></div>';
								echo form_open('MGTracker/reset_password', 'autocomplete="on"');
								// add form label email
								print_r($email);
									echo "<p>";
									echo "<input type='hidden' name='email' value='";
									echo $email;
									echo "'>";
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
								echo '<button id="email_submit" class="btn btn-primary btn-sm" type="submit">Submit</button>';
								echo form_close();
								echo '</div>';
?>