<?php
			echo '<div style="padding-left:2.5%;"class="container">';
			echo '<h3>Reset your password</h3>';
			echo '<div class="error_msg"></div>';
			echo form_open('MGTracker/email_verification', 'autocomplete="on"');
			// create data array for CI to generate form_input username
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
			//create form input email
			echo form_input($data);
			echo '<button id="email_submit" class="btn btn-primary" type="submit">Reset</button>';
			echo form_close();
			echo '</div>';
?>