<div class="modal fade" id="profileEdit"tabindex="-1", role="dialog" aria-labelledby="profileEdit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
    	<!-- header -->
      		<div class="modal-header" style="opacity:1;">
        		<h4 class="modal-title">Edit Profile</h4>
      		</div>
      		<!-- sign up body -->
	     	<div class="modal-body" id="editProfile">
	     		<?php
	     		foreach ($profile as $value) {
	     		$this->load->helper('form');
	     		echo form_open('MGTracker/editProfile');
	     		//firstname
				echo '<div class="form-row"><div class="col">';
				echo form_label('First Name: ', 'fname');
				echo '</div><div class="col">';
				echo '<input type ="text" class="form-control" name = "fname" value ="';
				echo $value->customerFName;
				echo '"></div></div>';
				//lastname
				echo '<div class="form-row"><div class="col">';
				echo form_label('Last Name: ', 'lname');
				echo '</div><div class="col">';
				echo '<input type ="text" class="form-control" name = "lname" value ="';
				echo $value->customerLName;
				echo '"></div></div>';
				//email
				echo '<div class="form-row"><div class="col">';
				echo form_label('Email Address: ', 'email');
				echo '</div><div class="col">';
				echo '<input type ="text" class="form-control" name = "email" value ="';
				echo $value->CustomerEmail;
				echo '"></div></div>';
				//company
				echo '<div class="form-row"><div class="col">';
				echo form_label('Company: ', 'company');
				echo '</div><div class="col">';
				echo '<input type ="text" class="form-control" name = "company" value ="';
				echo $value->customerCompany;
				echo '"></div></div>';
				//phonenumber
				echo '<div class="form-row"><div class="col">';
				echo form_label('Phone Number: ', 'phone');
				echo '</div><div class="col">';
				echo '<input type ="text" class="form-control" name = "phone" value ="';
				echo $value->customerPhone;
				echo '"></div></div>';
				echo '<div class="form-row"><div class="col">';
				echo form_label('Address: ', 'address');
				echo '<input type ="text" class="form-control" name = "customerStreet" placeholder="street address" value ="';
				echo $value->customerStreet;
				echo '">';
				echo '<input type ="text" class="form-control" name = "customerTown" placeholder="city" value ="';
				echo $value->customerTown;
				echo '">';
				echo '<input type ="text" class="form-control" name = "customerState" placeholder="state" value ="';
				echo $value->customerState;
				echo '">';
				echo '<input type ="text" class="form-control" name = "customerZip" placeholder="zip" value ="';
				echo $value->customerZip;
				echo '">';
				echo '</div>';
				}
	     	echo '</div>';
	     	echo '<div class="modal-footer">';
	     	echo form_submit("editProfileSubmit", "Submit" , "class='submit btn btn-primary btn-sm'");
	     	echo '<a href="Dashboards" class="btn btn-primary btn-sm">Close</a>';
	     	echo form_close();
	     		?>
	     	</div> <!-- close modal footer -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
