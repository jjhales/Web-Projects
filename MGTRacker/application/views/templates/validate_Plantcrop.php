
<script type="text/javascript">
	function cg(){
		document.getElementById('pop_success').click();
		document.getElementById('pop_success').style.display='none';
}
</script>
<body onload="cg()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#cg_success" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_success" tabindex="-1", role="dialog" aria-labelledby="cropSuccess" aria-hidden="true">
				<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
        					<h4 class="modal-title" id="cropSucess">Review New Crop</h4>
      					</div>
	     					<div class="modal-body" id="crops_success_msg">
	     					<?php
	     					$this->load->helper('form');
	     						echo form_open('Crops/validatePlantCrop');
	     						
	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Plant Name: ', 'plantname');
	     						echo '</div><div class="col">';
	     						echo '<input type ="text" class="form-control form-control-plaintext" name = "plantName" value ="';
	     						echo $plantName;
	     						echo '"readonly"></div></div>';
	     						
	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('plant Manufacturer: ', 'plantManufacturer');
	     						echo '</div><div class="col">';
	     						echo '<input type ="text" class="form-control form-control-plaintext" name = "plantManufacturer" value ="';
	     						echo $plantManufacturer;
	     						echo '"readonly"></div></div>';

	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Plant Amount: ', 'plantAmount');
	     						echo '</div><div class="col">';
	     						echo '<input type ="decimal" class="form-control form-control-plaintext" name = "plantAmount" value ="';
	     						echo $plantAmount;
	     						echo '"readonly"></div></div>';

	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Date Start: ', 'dateStart');
	     						echo '</div><div class="col">';
	     						echo '<input type ="date" class="form-control form-control-plaintext" name = "dateStart" value ="';
	     						echo $dateStart;
	     						echo '"readonly"></div></div>';

	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Crop Type: ', 'testing');
	     						echo '</div><div class="col">';
	     						echo '<input type ="text" class="form-control form-control-plaintext" name = "testing" value ="';
	     						echo $testing;
	     						echo '"readonly"></div></div>';

	     						echo '<div class="form-row"><div class="col">';
								echo form_label("Location", "location");
								echo '</div><div class="col">';
								echo '<input type="text" class="form-control form-control-plaintext " name="location" value="';
								echo $location;
								echo '"readonly"></div></div>';
								
	     						echo '</div>';
	     						echo '<div style="margin-left:50%; margin-bottom:2%;">';     					
	     						echo form_submit("cropSubmit", "Add Crop" , "class='submit btn btn-primary'");
	     						?>
	     						<a href='<?php echo "../Crops"?>' class="btn btn-primary">Back to Crops</a>
								<?php
								echo '</div>';
								echo form_close();
								echo '<div class="modal-footer>"';	
								?>
		
							
							</div>
						</div><!-- /.modal-body -->
				</div><!-- /.modal-content -->
			</div>