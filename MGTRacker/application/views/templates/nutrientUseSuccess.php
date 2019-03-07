<script type="text/javascript">
	function cg(){
		document.getElementById('pop_success').click();
		document.getElementById('pop_success').style.display='none';
}
</script>
<body onload="cg()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#cg_success" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_success" tabindex="-1", role="dialog" aria-labelledby="nutrientUseSuccess" aria-hidden="true">
				<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
        					<h4 class="modal-title" id="nutrientUseSucess">Review Nutrients</h4>
      					</div>
	     					<div class="modal-body" id="nutrient_success_msg">
	     					<?php
	     					echo form_open('Nutrients/validateNutrientUse');
							echo '<div>'; 
							echo '<div class="form-row"><div class="col">';
							echo form_label("Nutrient Name ", "nutrientName");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="nutrientName" value="';
							echo $nutrientName;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Nutrient Manufacturer ", "nutrientManufacturer");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="nutrientManufacturer" value="';
							echo $nutrientManufacturer;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Nutrient Amount ", "nutrientAmount");
							echo '</div><div class="col">';
							echo '<input type="decimal" class="form-control form-control-plaintext" name="nutrientAmount" value="';
							echo $nutrientAmount;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Location ", "Location");
							echo '</div><div class="col">';
							echo '<input type="text" class="form-control form-control-plaintext" name="location" value="';
							echo $location;
							echo '"readonly"></div></div>';
							echo '<div class="form-row"><div class="col">';
							echo form_label("Date ", "nutrientUseDate");
							echo '</div><div class="col">';
							echo '<input type="date" class="form-control form-control-plaintext" name="nutrientUseDate" value="';
							echo $nutrientUseDate;
							echo '"readonly"></div></div>';
							echo '<div style="margin-left:35%; margin-bottom:2%;">';
	     					echo form_submit("useNutrients", "Confirm" , "class='submit btn btn-primary'");
	     					?>
	     					<a href='<?php echo "../Nutrients"?>' class="btn btn-primary">Back to Nutrients</a>
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