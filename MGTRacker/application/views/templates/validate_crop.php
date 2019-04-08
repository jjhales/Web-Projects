
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
	     						echo form_open('Crops/validateCrop');
	     						
	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Seed Name: ', 'seedname');
	     						echo '</div><div class="col">';
	     						echo '<input type ="text" class="form-control form-control-plaintext" name = "seedName" value ="';
	     						echo $seedName;
	     						echo '"readonly"></div></div>';
	     						

	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Seed Used: ', 'seedUsed');
	     						echo '</div><div class="col">';
	     						echo '<input type ="decimal" class="form-control form-control-plaintext" name = "seedUsed" value ="';
	     						echo $seedUsed;
	     						echo 'g';
	     						echo '"readonly"></div></div>';
	     						

	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Seed Manufacturer: ', 'seedManufacturer');
	     						echo '</div><div class="col">';
	     						echo '<input type ="text" class="form-control form-control-plaintext" name = "seedManufacturer" value ="';
	     						echo $seedManufacturer;
	     						echo '"readonly"></div></div>';

	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Medium Name: ', 'mediumName');
	     						echo '</div><div class="col">';
	     						echo '<input type ="text" class="form-control form-control-plaintext" name = "mediumName" value ="';
	     						echo $mediumName;
	     						echo '"readonly"></div></div>';

	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Medium Amount: ', 'mediumUsed');
	     						echo '</div><div class="col">';
	     						echo '<input type ="decimal" class="form-control form-control-plaintext" name = "mediumUsed" value ="';
	     						echo $mediumUsed;
	     						echo '"readonly"></div></div>';

	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Medium Manufacturer: ', 'mediumManufacturer');
	     						echo '</div><div class="col">';
	     						echo '<input type ="text" class="form-control form-control-plaintext" name = "mediumManufacturer" value ="';
	     						echo $mediumManufacturer;
	     						echo '"readonly"></div></div>';

	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label('Medium Material: ', 'mediumMaterial');
	     						echo '</div><div class="col">';
	     						echo '<input type ="text" class="form-control form-control-plaintext" name = "mediumMaterial" value ="';
	     						echo $mediumMaterial;
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
	     						echo form_submit("cropSubmit", "Add Crop" , "class='submit btn btn-primary btn-sm'");
	     						?>
	     						<a href='<?php echo "../Crops"?>' class="btn btn-primary btn-sm">Back to Crops</a>
								<?php
								echo '</div>';
								echo form_close();
								echo '<div class="modal-footer>"';	
								?>
		
							
							</div>
						</div><!-- /.modal-body -->
				</div><!-- /.modal-content -->
			</div>