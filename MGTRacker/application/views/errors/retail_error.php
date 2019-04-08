<script type="text/javascript">
	function cg(){
		document.getElementById('pop_success').click();
		document.getElementById('pop_success').style.display='none';
}
</script>
<body onload="cg()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#cg_success" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_success" tabindex="-1", role="dialog" aria-labelledby="retailError" aria-hidden="true">
				<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
        					<h4 class="modal-title" id="retailError">Error!</h4>
      					</div>
	     					<div class="modal-body" id="retail_Error_msg">
	     					<p>Something went wrong! Try again.</p>
	     					<p>
	     					<?php 
	     					echo validation_errors();
	     					?>
	     					</p>

	     					</div> <!--modal-body close-->
	     					<div class="modal-footer">
								<a href='<?php echo "../Retail"?>' class="btn btn-primary btn-sm" style="float:right; margin-right:2%; margin-bottom:2%;">Retail</a>
							</div> <!-- close modal footer -->
						</div><!-- /.modal-body -->
				</div><!-- /.modal-content -->
			</div>