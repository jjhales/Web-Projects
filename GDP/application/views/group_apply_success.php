<body onload="cg()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#cg_success" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_success">
				<div class="modal-dialog">
    				<div class="modal-content">
    				<!-- header -->
      					<div class="modal-header" "style=opacity:1;">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        						<span aria-hidden="true">&times;</span>
        					</button>
        					<h4 class="modal-title"></h4>
      					</div>
      					<!-- sign up body -->
	     					<div class="modal-body" id="pick_success_msg">
	     					<h3>You have successfully applied for a group!</h3>
	     					</div>
	     					<div class="modal-footer">
							<a href='<?php echo "../Picks/clubhouse"?>' class="btn btn-primary btn-lg" style="float:right; margin-right:2%; margin-bottom:2%; color:white;">Clubhouse</a></button>
							<a href='<?php echo "../GDP/groups_display"?>' class="btn btn-primary btn-lg" style="float:right; margin-right:2%; margin-bottom:2%; color:white;">Groups</a></button>
							</div> <!-- close modal footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>