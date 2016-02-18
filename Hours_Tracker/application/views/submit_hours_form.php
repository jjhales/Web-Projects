<!-- logout button calls logout controller closes session and redirects home -->
<button id="logout_button"><a href='<?php echo "logout" ?>'>Logout</a></button>
<div id="submit_hours" style="float:right;">
	<?php 
		// call function and open form
		
		echo validation_errors();
		
		$attributes = array('id' => 'submit_hours');
		echo form_open('dashboard/submit_hours_valid', $attributes);
		// add form label client
		//hidden input for logged in user will convert to employee_id
		foreach ($employee_id as $row)
		{
			echo form_hidden('employee_id', $row->employee_id);
		};
		echo '<p>';
		echo form_label("Client Name: ", "client_name");
		//dropdown list client name
		echo "<select name='client_id' style='float:right; border-radius:6px;'>";
		foreach ($client_name as $row) {
			echo '<option value="';
			echo $row->client_id;
			echo '">';
			echo $row->client_fname, " ", $row->client_lname;
			echo "</option>";
		};
		echo "</select>"; //end dropdown client name
		echo '</p>';
		echo '<p>';
		//date input
		echo form_label("Date: ", "date");
		echo '<input type="date" name="date" style="float:right;"/>';
		echo "</p>";
		echo '<p>';
		//dropdown for services
		echo form_label("Service: ", "service");
		echo "<select name='service_id' style='float:right; border-radius:6px;'>";
		foreach ($services as $row) {
			echo '<option value="';
			echo $row->service_id;
			echo '">';
			echo $row->service_name;
			echo "</option>";
		};
		echo "</select>";
		echo '</p>';
		//input for hours worked 1 hour to 24 hours
		echo '<p>';
		echo form_label("Hours: ", "hours_worked");
		echo '</br>';
		echo '<input type="number" name="hours_worked" min="1" max="24"/>';
		echo '</p>';
		echo '</br>';
		echo form_submit("hours_submit", "Submit", "class='submit'");
		echo form_close();
	?>
</div>