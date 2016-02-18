			<body onload="ps()">

			<button type="button" id="pop_success" class="btn btn-link" data-toggle="modal" data-target="#picks_success" style="color:white">ps</button>
			
			<div class="modal fade" id="picks_success">
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
	     					<h3>You have successfully submitted your picks!</h3>
	     					</div>
	     					<div class="modal-footer">
							<a class="btn btn-primary btn-lg" style="float:right; margin-right:2%; margin-bottom:2%; color:white;" href='<?php echo "../Picks/clubhouse"?>'>Clubhouse</a>
							<a class="btn btn-primary btn-lg" style="float:right; margin-right:2%; color:white;" href='<?php echo "../Picks"?>'>Picks</a>
			
							</div> <!-- close modal footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>