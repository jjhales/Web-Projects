
<script type="text/javascript">
	function cg(){
		document.getElementById('pop_success').click();
		document.getElementById('pop_success').style.display='none';
}
</script>
<body onload="cg()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#cg_success" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_success" tabindex="-1", role="dialog" aria-labelledby="seedSuccess" aria-hidden="true">
				<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
        					<h4 class="modal-title" id="seedSucess">Seed Added!</h4>
      					</div>
	     					<div class="modal-body" id="seed_success_msg">
	     					<?php 
	     					echo form_open('FarmMaterials/validateSeed');
							echo '<div>'; 
							//seed name
							echo '<div class="form-row"><div class="col">';
							echo form_label("Seed Name ", "seedName");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="seedName" value="';
							echo $seedName;
							echo '"readonly"></div></div>';
							//seed vendor
							echo '<div class="form-row"><div class="col">';
							echo form_label("Seed Vendor ", "seedVendor");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="seedVendor" value="';
							echo $seedVendor;
							echo '"readonly"></div></div>';
							//seed manufacturer
							echo '<div class="form-row"><div class="col">';
							echo form_label("Seed Manufacturer " , "seedManufacturer");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="seedManufacturer" value="';
							echo $seedManufacturer;
							echo '"readonly"></div></div>';
							//seed amount
							echo '<div class="form-row"><div class="col">';
							echo form_label("Seed Amount ", "fseedAmount");
							echo '</div><div class="col">'; 
							echo '<input type="decimal" class="form-control form-control-plaintext" name="seedAmount" value="';
							echo $seedAmount;
							echo '"readonly"></div></div>';
							//seed price
							echo '<div class="form-row"><div class="col">';
							echo form_label("Seed Price ", "fseedPrice");
							echo '</div><div class="col">'; 
							echo '<input type="decimal" class="form-control form-control-plaintext" name="seedPrice" value="';
							echo $seedPrice;
							echo '"readonly"></div></div>';
							echo '<div style="margin-bottom:2%;">';
	     					echo form_submit("updateSeed", "Add Seed" , "class='submit btn btn-sm btn-primary'  style='margin-bottom:2%;'");
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