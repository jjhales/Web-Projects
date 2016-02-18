<body onload="sie()">

					<button type="button" id="signin_fail" class="btn btn-link" data-toggle="modal" data-target="#signin_errors" style="color:white">sie</button>
					
					<div class="modal fade" id="signin_errors">
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
			     					<div class="modal-body" id="sign_in_error_msg">
										<?php
											echo "<h3>You do not have access to this page</h3>";
											echo "<h3>Please talk to an admin for access</h3>";
										?>
									</div>
	     						<div class="modal-footer">
	     							<button type="button" class="btn btn-primary btn-lg" value="Back" onclick="goBack()">Back</button>
								</div> <!-- close modal footer -->
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div>