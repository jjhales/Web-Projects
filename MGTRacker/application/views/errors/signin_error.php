				<script type="text/javascript">
					function sie(){document.getElementById('signin_fail').click();}
					function goBack(){window.history.back()}
				</script>
				
				<body onload="sie()">

					<button type="button" id="signin_fail" class="btn btn-link" data-toggle="modal" data-target="#signin_errors" style="color:white"></button>
					
					<div class="modal fade" id="signin_errors">
						<div class="modal-dialog">
		    				<div class="modal-content">
		    				<!-- header -->
		      					<div class="modal-header" "style=opacity:1;">
		        					<h4 class="modal-title">Error</h4>
		      					</div>
		      					<!-- signin error body -->
			     					<div class="modal-body" id="sign_in_error_msg">
										<?php
											echo "<h4> We're sorry you could not be logged in due to the following errors:</h4>";
											echo "<p>";
											echo validation_errors();
											echo "</p>";
										?>
									</div>
	     						<div class="modal-footer">
	     							<button type="button" class="btn btn-primary btn-sm" value="Back" onclick="goBack()">Try Again</button>
								</div> <!-- close modal footer -->
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div>