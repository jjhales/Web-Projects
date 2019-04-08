<script type="text/javascript">
	function sue(){document.getElementById('signup_fail').click();}
	function goBack(){window.history.back()}
</script>
				<body onload="sue()">

					<button type="button" id="signup_fail" class="btn btn-link" data-toggle="modal" data-target="#pin_errors" style="color:white">sue</button>
					
					<div class="modal fade" id="pin_errors">
						<div class="modal-dialog">
		    				<div class="modal-content">
		    				<!-- header -->
		      					<div class="modal-header" "style=opacity:1;">
		        					<h4 class="modal-title">Error</h4>
		      					</div>
		      					<!-- signin error body -->
			     					<div class="modal-body" id="sign_up_error_msg">

									<?php
										echo "<h3> We're sorry we could not reset your password due to the following errors:</h3>";
										echo "<p>";
										echo "Email address and Pin do not match";
										echo "</p>";
										echo "<p>Please try again</p>";
									?>
									</div>
	     						<div class="modal-footer">
	     							<button type="button" class="btn btn-primary btn-sm" value="Back" onclick="goBack()">Try Again</button>
								</div> <!-- close modal footer -->
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div>
  			