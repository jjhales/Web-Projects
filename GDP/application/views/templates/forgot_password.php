<?php
			echo '<div style="padding-left:2.5%;"class="container">';
			echo '<h3>Reset your password</h3>';
			echo '<div class="error_msg"></div>';
			echo form_open('GDP/email_verification', 'autocomplete="on"');
			// add form label email	
			echo '<p>';
			// create data array for CI to generate form_input username
			$data = array(
							"name" => "email",
							"id" => "email",
							"placeholder" => " Email",
							"value" => ""
						);
			//create form input email
			echo form_input($data);
			echo '</p>';
			echo '<button id="email_submit" class="btn btn-primary" type="submit">Submit</button>';
			echo form_close();
			echo '</div>';
?>