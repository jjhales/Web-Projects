<body onload="cgf()">

			<button type="button" id="pop_fail" class="btn btn-link" data-toggle="modal" data-target="#cg_fail" style="color:white">cg</button>
			
			<div class="modal fade" id="cg_fail">
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
	     					<h3><?php echo validation_errors();?></h3>
	     					</div>
	     					<div class="modal-footer">
							<button type="button" class="btn btn-primary btn-lg" style="float:right; margin-right:2%; margin-bottom:2%;"><a href="../Picks/clubhouse" style="color:white;">Clubhouse</a></button>
							<button type="button" class="btn btn-primary btn-lg" value="Back" onclick="goBack()">Groups</button>
							</div> <!-- close modal footer -->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>