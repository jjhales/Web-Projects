<style>
	form{
		margin-left: 2.5%;
		width: 90%;
		text-align: center;

	}
	#group_apply{
		margin-right: 1%;
		margin-left: 1%;
	}
	h3{
		margin-left: 15px;
		font-family: Copperplate Gothic;
		padding-bottom: 2.5%;
	}
	form, #gname{
		float:left;
		margin:1%;
	}
	

</style>


	<a href='<?php echo "../GDP/groups_display"?>' class="btn btn-primary btn-sm" style="float:right; margin-top:.3%; margin-right:1%; font-family:Copperplate Gothic; color:white; font-weight:bold;">Groups</a>
<br>
	<h3>Search Results</h3>


		<?php
		//form to apply to group also displays results
		$this->load->helper('form');
		echo "<div class='col-lg-4 col-md-8 col-sm-6 col-xs-4'>";
		
		echo form_open('GDP/apply_to_groups');
		foreach ($user_id as $row) {
			echo "<input type='hidden' name='member' value='";
			echo $row->user_id;
			echo "'>";
			}
			foreach ($query as $row){
				echo "<p style='text-align:right; margin-right:40%;'>";
				echo "<label for='group_name'>";
				echo $row->group_name;
				echo "</label>";
				echo "<input type='radio' name='group_name' value='";
				echo $row->group_name;
				echo "' style='margin:1.5%;'>";
				echo "</p>";
			}
			echo '<button id="group_apply" class="btn btn-primary btn-sm" type="submit value="apply">Apply</button>';
		echo form_close();
			
		
		echo "</div>";
		
?>
