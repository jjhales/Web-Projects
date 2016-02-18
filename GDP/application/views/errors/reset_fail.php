
				<body onload="sue()">

					<button type="button" id="signup_fail" class="btn btn-link" data-toggle="modal" data-target="#reset_fail" style="color:white">sue</button>
					
					<div class="modal fade" id="reset_fail">
						<div class="modal-dialog">
		    				<div class="modal-content">
		    				<!-- header -->
		      					<div class="modal-header" "style=opacity:1;">
		        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        						<span aria-hidden="true">&times;</span>
		        					</button>
		        					<h4 class="modal-title"></h4>
		      					</div>
		      					<!-- signin error body -->
			     					<div class="modal-body" id="sign_up_error_msg">

									<?php
										echo "<h3> We're sorry we could not reset your password due to the following errors:</h3>";
										echo "<h3>";
										echo validation_errors();
										echo "</h3>";
										echo "<h3>Please try again</h3>";
										echo "</div>";
									?>
									</div>
	     						<div class="modal-footer">
	     							<button type="button" class="btn btn-primary btn-lg" value="Back" onclick="goBack()">Try Again</button>
								</div> <!-- close modal footer -->
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div>
  			