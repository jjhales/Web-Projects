<script type="text/javascript">
	function cg(){
		document.getElementById('pop_success').click();
		document.getElementById('pop_success').style.display='none';
}
</script>
<body onload="cg()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#cg_success" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_success" tabindex="-1", role="dialog" aria-labelledby="equipmentSuccess" aria-hidden="true">
				<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
        					<h4 class="modal-title" id="equipmentSucess">Review Equipment</h4>
      					</div>
	     					<div class="modal-body" id="equipment_success_msg">
	     					<?php
	     						echo form_open('FarmMaterials/validateEquipment');
								echo '<div>'; 
								echo '<div class="form-row"><div class="col">';
								echo form_label("Equipment Name ", "equipmentName");
								echo '</div><div class="col">';
								echo '<input type="text" class="form-control form-control-plaintext" name="equipmentName" value="';
								echo $equipmentName;
								echo '"readonly"></div></div>';
								echo '<div class="form-row"><div class="col">';
								echo form_label("Equipment Type ", "equipmentType");
								echo '</div><div class="col">';
								echo '<input type="text" class="form-control form-control-plaintext" name="equipmentType" value="';
								echo $equipmentType;
								echo '"readonly"></div></div>';
	     						echo '<div class="form-row"><div class="col">';
								echo form_label("Equipment Vendor ", "equipmentVendor");
								echo '</div><div class="col">';
								echo '<input type="text" class="form-control form-control-plaintext" name="equipmentVendor" value="';
								echo $equipmentVendor;
								echo '"readonly"></div></div>';
	     						echo '<div class="form-row"><div class="col">';
								echo form_label("Equipment Manufacturer ", "equipmentManufacturer");
								echo '</div><div class="col">';
								echo '<input type="text" class="form-control form-control-plaintext" name="equipmentManufacturer" value="';
								echo $equipmentManufacturer;
								echo '"readonly"></div></div>';
								echo '<div class="form-row"><div class="col">';
								echo form_label("Equipment Price ", "equipmentPrice");
								echo '</div><div class="col">';
								echo '<input type="decimal" class="form-control form-control-plaintext" name="equipmentPrice" value="';
								echo $equipmentPrice;
								echo '"readonly"></div></div>';
								echo '<div class="form-row"><div class="col">';
								echo form_label("Equipment Amount ", "equipmentAmount");
								echo '</div><div class="col">';
								echo '<input type="decimal" class="form-control form-control-plaintext" name="equipmentAmount" value="';
								echo $equipmentAmount;
								echo '"readonly"></div></div>';
	     						echo '<div class="form-row"><div class="col">';
								echo form_label("Equipment Purchase Date ", "equipmentPurchaseDate");
								echo '</div><div class="col">';
								echo '<input type="date" class="form-control form-control-plaintext" name="equipmentPurchaseDate" value="';
								echo $equipmentPurchaseDate;
								echo '"readonly"></div></div>';
								echo '<div style="margin-left:35%; margin-bottom:2%;">';
								echo form_submit("updateEquipment", "Add Equipment" , "class='submit btn btn-primary'");
	     					?>
	     					<a href='<?php echo "../FarmMaterials"?>' class="btn btn-primary">Back to Materials</a>
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