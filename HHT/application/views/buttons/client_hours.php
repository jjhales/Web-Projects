<!-- button for client hours when clicked runs js to change client hours remain style to display inline -->
<button id="client_hours" class="btn-large" onclick="view_client_hours()">Client Hours</button>

<div id='client_hours_remain' style="display:none">
	</br>
	<!-- button for closing the client hours remain table -->
	<button id='close_hours' onclick="hide_client_hours()" style="float:left;">
		<?php
		$this->load->helper('html'); 
		echo img('images/close.png');
		?>
	</button>
	<!-- creates table based on model_users/client_hours() sql query 
	$client_data['client_hr'] called in dashboard controller 
	$client_hr array output  -->
	<?php
		echo "<table>";
		echo "<tr>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Service Name</th>";
		echo "<th>Hours Remain</th>";
		echo "</tr>";
		foreach ($client_hr as $row) 
		{
			echo "<tr>";
			echo "<td>";
			echo $row->client_fname;
			echo "</td>";
			echo "<td>";
			echo $row->client_lname;
			echo "</td>";
			echo "<td>";
			echo $row->service_name;
			echo "</td>";
			echo "<td>";
			echo $row->hours_remain;
			echo "</td>";
			echo "</tr>";

		}
		echo "</table>";
	?>
</div> <!-- close client hours remain -->
