<body onload="dm()">

				<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#delete_member" style="color:white">dm</button>
				
				<div class="modal fade" id="delete_member">
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
		     					<div class="modal-body" id="success">
		     					<?php
									echo "<h3>";
									echo "You have successfully deleted a member from your group!";
									echo "</h3>";
								?>
								</div>
	     					<div class="modal-footer">
	     						<button type="button" class="btn btn-primary btn-lg"><a href="../GDP/groups_display" style="color:white;">Groups</a></button>
							</div> <!-- close modal footer -->
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
