
<script type="text/javascript">
	function cg(){
		document.getElementById('pop_success').click();
		document.getElementById('pop_success').style.display='none';
}
</script>
<body onload="cg()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#cg_success" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_success" tabindex="-1", role="dialog" aria-labelledby="plantSuccess" aria-hidden="true">
				<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
        					<h4 class="modal-title" id="plantSucess">Plants Added!</h4>
      					</div>
	     					<div class="modal-body" id="plant_success_msg">
	     					<?php 
	     					echo form_open('FarmMaterials/validatePlant');
							echo '<div>'; 
							//plant name
							echo '<div class="form-row"><div class="col">';
							echo form_label("plant Name ", "plantName");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="plantName" value="';
							echo $plantName;
							echo '"readonly"></div></div>';
							//plant vendor
							echo '<div class="form-row"><div class="col">';
							echo form_label("plant Vendor ", "plantVendor");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="plantVendor" value="';
							echo $plantVendor;
							echo '"readonly"></div></div>';
							//plant manufacturer
							echo '<div class="form-row"><div class="col">';
							echo form_label("plant Manufacturer " , "plantManufacturer");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="plantManufacturer" value="';
							echo $plantManufacturer;
							echo '"readonly"></div></div>';
							//plant amount
							echo '<div class="form-row"><div class="col">';
							echo form_label("plant Amount ", "fplantAmount");
							echo '</div><div class="col">'; 
							echo '<input type="decimal" class="form-control form-control-plaintext" name="plantAmount" value="';
							echo $plantAmount;
							echo '"readonly"></div></div>';
							//plant price
							echo '<div class="form-row"><div class="col">';
							echo form_label("plant Price ", "fplantPrice");
							echo '</div><div class="col">'; 
							echo '<input type="decimal" class="form-control form-control-plaintext" name="plantPrice" value="';
							echo $plantPrice;
							echo '"readonly"></div></div>';
							echo '<div style="margin-bottom:2%;">';
	     					echo form_submit("updateplant", "Add plant" , "class='submit btn btn-sm btn-primary' style='margin-bottom:2%;'");
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