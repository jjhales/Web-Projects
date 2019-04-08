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
        					<h4 class="modal-title" id="cropSucess">Review Grow Update</h4>
      					</div>
	     					<div class="modal-body" id="crops_success_msg">
	     					<?php
	     					$this->load->helper('form');
								echo form_open('Crops/validateGrow');
								echo '<div class="form-row"><div class="col">';
								echo form_label("Crop Number", "flatNumber");
								echo '</div><div class="col">';
								echo '<input type ="text" class="form-control form-control-plaintext" name = "flatNumber" value ="';
								echo $flatNumber;
								echo '"readonly"></div></div>';
								echo '<div class="form-row"><div class="col">';
								echo form_label("Seed Name ","seedName");
								echo '</div><div class="col">';
								echo '<input type ="text" class="form-control form-control-plaintext" name = "seedName" value ="';
								echo $seedName;
								echo '"readonly"></div></div>';
								echo '<div class="form-row"><div class="col">';
								echo form_label("Harvest Date", "dateEnd");
								echo '</div><div class="col">';
								echo '<input type="date" class="form-control form-control-plaintext " name="dateEnd" value="';
								echo $dateEnd;
								echo '"readonly"></div></div>';
								echo '<div class="form-row"><div class="col">';
								echo form_label("Yield", "yieldWeight");
								echo '</div><div class="col">';
								echo '<input type="decimal" class="form-control form-control-plaintext" name="yieldWeight" value="';
								echo $yieldWeight;
								echo '"readonly"></div></div>';
								echo '<div class="form-row"><div class="col">';
								echo form_label("Crop Rating", "cropRating");
								echo '</div><div class="col">';
								echo '<input type="number" class="form-control form-control-plaintext " name="cropRating" value="';
								echo $cropRating;
								echo '"readonly"></div></div>';
								echo '<div style="margin-left:50%; margin-bottom:2%;">';
								echo form_submit("updateEnd", "Update" , "class='submit btn btn-sm btn-primary'  style='margin-bottom:2%;'");
								?>
	     						<a href='<?php echo "../Crops"?>' class="btn btn-sm btn-primary">Back to Crops</a>
								<?php
								echo '</div>';
								echo form_close();
								echo '<div class="modal-footer>"';	
								?>
							</div> <!-- close modal footer -->
						</div><!-- /.modal-body -->
				</div><!-- /.modal-content -->
			</div>