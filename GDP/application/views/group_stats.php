<style>
h3{
	font-family: Copperplate Gothic;
	text-indent: 10px;
	padding-top: 2.5%;
}

table{
	width:50%;
	margin:1%;
	padding:1%;
	font-family: Calibri;
	font-size: 1.0em;
}

td{
	text-indent: 12px;
	font-size: 1.0em;
	margin-bottom: 10px;
	text-align: left;
}

th{
	height:35px;
	padding: 5px;
}


</style>

	

	<a href='<?php echo "../GDP/groups_display"?>'  class="btn btn-primary btn-sm" style="float:right; margin-top:.3%; margin-right:1%; font-family:Copperplate Gothic; color:white; font-weight:bold;">Groups</a>



<?php
//pops manage button if user logged in matches group leader
	foreach ($group_lead as $row) {
		$data1 = $row->group_leader;
	
	foreach ($user_lookup as $row) {
		$data2 = $row->user_id;
	
	if ($data1 == $data2){
		echo "<body onload='manage_button()'>";

		}else{
			echo "<body>";
		} 
	}}
	
	//displays group stats
	foreach ($group_name as $row) {
		echo '<h3>';
		echo $row->group_name;
		echo '</h3>';
	}
		echo '<h4 style="margin-left:1%;text-decoration:underline;">';
		echo "Overall Stats";
		echo '</h4>';
	
		echo '<table>';
		echo "<th>Name</th>";
		echo "<th>Wins</th>";
		echo "<th>Losses</th>";
		echo "<th>Percentage</th>";
	//additional stats added after first reconcile
	foreach ($members as $row){
			$username = $row->username;
			$sql = ("SELECT username, SUM(wins) as wins, SUM(losses) as losses  FROM personal_stats WHERE username = ?");
			$query = $this->db->query($sql, $username);
			$results = $query->result();
	
	foreach ($results as $row){
		$memwins = $row->wins;
		$memloss = $row->losses;
		// if statement to display users if they do not have stats and else display overall stats
		if($memwins == 0 && $memloss == 0){
			echo '<tr>';
			echo '<td>';
			echo $username;
			echo '</td>';
			echo '<td>';
			echo "0";
			echo '</td>';
			echo '<td>';
			echo "0";
			echo '</td>';
			echo '<td>';
			echo '0%'; 
			echo '</td>';
			echo '</tr>';
		}else{ 
			echo '<tr>';
			echo '<td>';
			echo $row->username;
			echo '</td>';
			echo '<td>';
			echo $row->wins;
			echo '</td>';
			echo '<td>';
			echo $row->losses;
			echo '</td>';
			echo '<td>';
			$percentage = ($row->wins/($row->wins + $row->losses))*100; 
			echo (round($percentage, 2)); 
			echo '%';
			echo '</td>';
			echo '</tr>';
		}
			
			
	}} 
	// close both for each

	
		echo '</table>';

	foreach ($group_lead as $row) {
		$data1 = $row->group_leader;
	
	foreach ($user_lookup as $row) {
		$data2 = $row->user_id;
	
	if ($data1 == $data2){
		echo "<body onload='manage_button()'>";

		}else{
			echo "<body>";
		} 
	}}
	//displays group stats weekly
		echo '<h4 style="margin-left:1%;text-decoration:underline;">';
		echo "Weekly Stats";
		echo '</h4>';
		echo '<table>';
		echo "<th>Name</th>";
		echo "<th>Week#</th>";
		echo "<th>Wins</th>";
		echo "<th>Losses</th>";
		echo "<th>Percentage</th>";
	//additional stats added after first reconcile
	foreach ($members as $row){
			$username = $row->username;
			$sql = ("SELECT username, week_number, wins, losses  FROM personal_stats WHERE username = ? ORDER BY week_number ASC");
			$query = $this->db->query($sql, $username);
			$results = $query->result();
	
	foreach ($results as $row){
		$memwins = $row->wins;
		$memloss = $row->losses;
		// if statement to display users if they do not have stats and else display overall stats
		if($memwins == 0 && $memloss == 0){
			echo '<tr>';
			echo '<td>';
			echo $username;
			echo '</td>';
			echo '<td>';
			echo "0";
			echo '</td>';
			echo '<td>';
			echo "0";
			echo '</td>';
			echo '<td>';
			echo '0%'; 
			echo '</td>';
			echo '</tr>';
		}else{ 
			echo '<tr>';
			echo '<td>';
			echo $row->username;
			echo '</td>';
			echo '<td>';
			echo $row->week_number;
			echo '</td>';
			echo '<td>';
			echo $row->wins;
			echo '</td>';
			echo '<td>';
			echo $row->losses;
			echo '</td>';
			echo '<td>';
			$percentage = ($row->wins/($row->wins + $row->losses))*100; 
			echo (round($percentage, 2)); 
			echo '%';
			echo '</td>';
			echo '</tr>';
		}
			
			
	}} 
	// close both for each

	
		echo '</table>';

?>