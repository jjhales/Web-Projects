<script type="text/javascript">
	function cg(){
		document.getElementById('pop_success').click();
		document.getElementById('pop_success').style.display='none';
}
</script>
<body onload="cg()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#cg_success" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_success" tabindex="-1", role="dialog" aria-labelledby="mediumSuccess" aria-hidden="true">
				<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
        					<h4 class="modal-title" id="mediumSucess">Review Medium</h4>
      					</div>
	     					<div class="modal-body" id="medium_success_msg">
	     					<?php
	     					echo form_open('FarmMaterials/validateMedium');
							echo '<div>'; 
							echo '<div class="form-row"><div class="col">';
							echo form_label("Medium Name ", "mediumName");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="mediumName" value="';
							echo $mediumName;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Medium Vendor ", "mediumVendor");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="mediumVendor" value="';
							echo $mediumVendor;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Medium Manufacturer ", "mediumManufacturer");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="mediumManufacturer" value="';
							echo $mediumManufacturer;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Medium Material ", "mediumMaterial");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="mediumMaterial" value="';
							echo $mediumMaterial;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Medium Amount ", "mediumAmount");
							echo '</div><div class="col">';
							echo '<input type="decimal" class="form-control form-control-plaintext" name="mediumAmount" value="';
							echo $mediumAmount;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Medium Size ", "mediumSize");
							echo '</div><div class="col">';
							echo '<input type="decimal" class="form-control form-control-plaintext" name="mediumSize" value="';
							echo $mediumSize;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Medium Cost ", "mediumCost");
							echo '</div><div class="col">';
							echo '<input type="decimal" class="form-control form-control-plaintext" name="mediumCost" value="';
							echo $mediumCost;
							echo '"readonly"></div></div>';
							echo '<div style="margin-left:35%; margin-bottom:2%;">';
	     					echo form_submit("updateMedium", "Add Medium" , "class='submit btn btn-sm btn-primary' style='margin-bottom:2%;'");
	     					?>
	     					<a href='<?php echo "../FarmMaterials"?>' class="btn btn-sm btn-primary">Back to Materials</a>
							<?php
							echo '</div>';
							echo form_close();
							echo '<div class="modal-footer>"';	
							?>
	     					</div> <!--modal-body close-->
							</div> <!-- close modal footer -->
						</div><!-- /.modal-body -->
				</div><!-- /.modal-content -->
			</div>