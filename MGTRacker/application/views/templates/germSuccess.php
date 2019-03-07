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
        					<h4 class="modal-title" id="germSucess">Review Update</h4>
      					</div>
	     					<div class="modal-body" id="update_germ_success_msg">
	     					<?php
	     					$this->load->helper('form');
	     						echo form_open('Crops/validateGerm');
	     						echo '<div class="form-row"><div class="col">';
	     						echo form_label("Crop Number", "flatNumber");
	     						echo '</div><div class="col">';
	     						echo '<input type ="text" class="form-control form-control-plaintext" name = "flatNumber" value ="';
								echo $flatNumber;
								echo '"readonly"></div></div>';
								echo '<div class="form-row"><div class="col">';
								echo form_label("Light Date", "datelight");
								echo '</div><div class="col">';
								echo '<input type="date" class="form-control form-control-plaintext " name="dateLight" value="';
								echo $dateLight;
								echo '"readonly"></div></div>';
								echo '<div class="form-row"><div class="col">';
								echo form_label("Location", "location");
								echo '</div><div class="col">';
								echo '<input type="text" class="form-control form-control-plaintext " name="location" value="';
								echo $location;
								echo '"readonly"></div></div>';
								echo '</div>';
	     						echo '<div style="margin-left:50%; margin-bottom:2%;">';
	     						echo form_submit("updateLight", "Update" , "class='submit btn btn-primary'");
	     						?>
	     						<a href='<?php echo "../Crops"?>' class="btn btn-primary">Back to Crops</a>
								<?php
								echo '</div>';
								echo form_close();
								echo '<div class="modal-footer>"';	
								?>
							</div> <!-- close modal footer -->
						</div><!-- /.modal-body -->
				</div><!-- /.modal-content -->
			</div>