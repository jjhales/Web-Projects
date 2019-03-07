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
        					<h4 class="modal-title" id="cropSucess">Success</h4>
      					</div>
	     					<div class="modal-body" id="Success_msg">
	     						<p>Your entry has been added successfully!!</p>
	     					</div> <!--modal-body close-->
	     					<div class="modal-footer">
	     						<a href='<?php echo "../Dashboards"?>' class="btn btn-primary" style="float:right; margin-right:2%; margin-bottom:2%;">Dashboard</a>
								<a href='<?php echo "../FarmMaterials"?>' class="btn btn-primary" style="float:right; margin-right:2%; margin-bottom:2%;">Farm Materials</a>
								<a href='<?php echo "../Crops"?>' class="btn btn-primary" style="float:right; margin-right:2%; margin-bottom:2%;">Crops</a>
								<a href='<?php echo "../Nutrients"?>' class="btn btn-primary" style="float:right; margin-right:2%; margin-bottom:2%;">Nutrients</a>
							</div> <!-- close modal footer -->
						</div><!-- /.modal-body -->
				</div><!-- /.modal-content -->
			</div>