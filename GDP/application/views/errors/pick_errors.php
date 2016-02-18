			<body onload="pe()">

				<button type="button" id="pop_fail" class="btn btn-link" data-toggle="modal" data-target="#pick_errors" style="color:white">pe</button>
				
				<div class="modal fade" id="pick_errors">
					<div class="modal-dialog">
	    				<div class="modal-content">
	    				<!-- header -->
	      					<div class="modal-header" "style=opacity:1;">
	        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        						<span aria-hidden="true">&times;</span>
	        					</button>
	        					<h4 class="modal-title"></h4>
	      					</div>
	      					<!-- pick error body -->
		     					<div class="modal-body" id="pick_error_msg">
		     					<?php
									echo "<h3>";
									echo validation_errors();
									echo "</h3>";
								?>
								</div>
	     					<div class="modal-footer">
	     						<button type="button" class="btn btn-primary btn-lg" value="Back" onclick="goBack()">Try Again</button>
							</div> <!-- close modal footer -->
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
