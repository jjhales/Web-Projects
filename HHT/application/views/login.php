
		<div id="login">
			<?php 
			echo validation_errors();
			echo '<h3>Login</h3>';
			// call function and open form
			echo form_open('home/login_validation', "style='float:left;'");
			// add form label username
			echo '<p>';
			echo form_label("Username: ", "username:");
			// create data array for CI to generate form_input username
			$data = array(
				"name" => "username",
				"id" => "username",
				"value" => ""
			);
			//create form input username
			echo form_input($data);
			echo '</p>';
			echo '<p>';
			echo form_label("Password: ", "password:");
			//create form input password
			echo form_password('password');
			echo '</p>';
			//form submit
			echo form_submit("login_submit", "Login", "class='submit'");
			// close form
			echo form_close();
			?>
		</div>