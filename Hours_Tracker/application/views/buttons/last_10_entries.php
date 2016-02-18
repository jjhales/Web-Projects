</br>
<!-- button on click display last 10 entries -->
<button id="last_10_entries" class="btn-large" onclick="view_last_10()">Last 10 Entries</button>
<!-- div to hold last 10 entries -->
</br>
<div id='last_10' style="display:none;">
	<!-- button to close last 10 hours -->
	<button id='close_hours' onclick="hide_last_10()" style="float:left;">
		<?php
		$this->load->helper('html'); 
		echo img('images/close.png');
		?>
	</button>

	<?php
	//Last 10 entries organized by date table
		echo "<table>";
		echo "<tr>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Date</th>";
		echo "<th>Service Name</th>";
		echo "<th>Hours Worked</th>";
		echo "</tr>";
		foreach ($employee_entries as $row) 
		{
			echo "<tr>";
			echo "<td>";
			echo $row->client_fname;
			echo "</td>";
			echo "<td>";
			echo $row->client_lname;
			echo "</td>";
			echo "<td>";
			echo $row->date;
			echo "</td>";
			echo "<td>";
			echo $row->service_name;
			echo "</td>";
			echo "<td>";
			echo $row->hours_worked;
			echo "</td>";
			echo "</tr>";

		}
		echo "</table>";
	?>
</div>

