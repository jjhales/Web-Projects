
		<div id="new_employee_form">
			<?php 
			// call function and open form
			echo validation_errors(); 
			echo '<h3>Register</h3>';
			echo form_open('home/new_employee_insert_valid' , "style='float:left; margin-right:10%;'");
			//employee_insert_valid tested working 
			// add form label fname
			echo '<p>';
			echo form_label("First Name: ", "employee_fname:");
			// create data array for CI to generate form_input fname
			$data = array(
				"name" => "employee_fname",
				"id" => "employee_fname",
				"value" => " "
			);
			//create form input fname post array
			echo form_input($data , $this->input->post('employee_fname'));
			echo '</p>';
			// add form label lname
			echo '<p>';
			echo form_label("Last Name: ", "employee_lname:");
			// create data array for CI to generate form_input fname
			$data = array(
				"name" => "employee_lname",
				"id" => "employee_lname",
				"value" => " "
			);
			//create form input lname post array
			echo form_input($data, $this->input->post('employee_lname'));
			echo '</p>';
			echo '<p>';
			// add form label username post array
			echo form_label("Username: ", "username:");
			// create data array for CI to generate form_input username
			$data = array(
				"name" => "username",
				"id" => "username",
				"value" => " "
			);
			//create form input username
			echo form_input($data, $this->input->post('username'));
			echo '</p>';
			// add form label password
			echo '<p>';
			echo form_label("Password: ", "password:");
			//create form input password
			echo form_password("password", $this->input->post('password'));
			echo '</p>';
			// add form label email
			echo '<p>';
			echo form_label("Email Address: ", "email:");
			// create data array for CI to generate form_input email
			$data = array(
				"name" => "email",
				"id" => "email",
				"value" => " "
			);
			//create form input email
			echo form_input($data, $this->input->post('email'));
			echo '</p>';
			//form submit
			echo form_submit("employee_submit", "Submit", "class='submit'");
			// close form
			echo form_close();
			?>
		</div>