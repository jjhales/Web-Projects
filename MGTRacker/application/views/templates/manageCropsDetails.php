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
        					<h4 class="modal-title" id="cropSucess">Crop!</h4>
      					</div>
	     					<div class="modal-body" id="crops_success_msg">
	     					<?php
	     						echo '<div>Seed Name: ';
	     						echo $seedName;
	     						echo '</div>';
	     						echo '<div>Seed Used: ';
	     						echo $seedUsed;
	     						echo 'g';
	     						echo '</div>';
	     						echo '<div>Medium Name: ';
	     						echo $mediumName;
	     						echo '</div>';
	     						echo '<div>Medium Material: ';
	     						echo $mediumMaterial;
	     						echo '</div>';
	     						echo '<div> Date Start: ';
	     						echo $dateStart;
	     						echo '</div>';
	     						echo '<div> Date Light: ';
	     						echo $dateLight;
	     						echo '</div>';
	     						echo '<div> Crop Type: ';
	     						echo $testing;
	     						echo '</div>';
	     					?>
	     					</div> <!--modal-body close-->
	     					<div class="modal-footer">
								<a href='<?php echo "../Crops"?>' class="btn btn-primary btn-lg" style="float:right; margin-right:2%; margin-bottom:2%;">Crops</a>
							</div> <!-- close modal footer -->
						</div><!-- /.modal-body -->
				</div><!-- /.modal-content -->
			</div>