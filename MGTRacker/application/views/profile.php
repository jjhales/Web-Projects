<div class="modal fade" id="profileView"tabindex="-1", role="dialog" aria-labelledby="profileView" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
    	<!-- header -->
      		<div class="modal-header" style="opacity:1;">
        		<h4 class="modal-title">Profile</h4>
      		</div>
      		<!-- sign up body -->
	     	<div class="modal-body" id="userProfile">
	     		<?php
				foreach ($profile as $value) {
				echo '<p>Name: ';
				echo $value->customerFName." ".$value->customerLName;
				echo '</p>';
				echo '<p>Email Address: ';
				echo $value->CustomerEmail;
				echo '</p>';
				echo '<p>Company: ';
				echo $value->customerCompany;
				echo '</p>';
				echo '<p>Phone Number: ';
				echo $value->customerPhone;
				echo '</p>';
				echo '<p>Address: ';
				echo $value->customerStreet." ".$value->customerTown.", ".$value->customerState." ".$value->customerZip ;
				echo '</p>';	
				}
				?>
			</div> <!-- close modal body -->
			<div class="modal-footer">
			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#profileEdit">Edit Profile</button>
			<a href="<?php echo './MGTracker/passwordReset'?>" class="btn btn-primary btn-sm">Change Password</a>
			<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
			</div> <!-- close modal footer -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
