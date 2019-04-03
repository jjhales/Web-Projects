<?php
$this->load->helper('form');
$usertype = $this->session->userdata('usertype');
if ($usertype === "admin"){
	echo "<h4>Contacts</h4>";
	//buttons
	echo '<button type="button" id="employeesContact" class="btn btn-primary" data-toggle="collapse" href="#employees" role="button" aria-expanded="false" aria-controls="employees" style="margin-right:2%; margin-bottom:2%;">Employees</button>';
	echo '<button type="button" id="customerContact" class="btn btn-primary" data-toggle="collapse" href="#customers" role="button" aria-expanded="false" aria-controls="customers" style="margin-right:2%; margin-bottom:2%;">Customers</button>';
	//employees
	echo '<div id="employees" class="collapse">';
	echo '<h4>Employee Contacts</h4>';
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>#</th>';
	echo '<th>First Name</th>';
	echo '<th>Last Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone Number</th>';
	echo '<th>Role<th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	$count = 0;
	foreach ($employee as $value) {
	$count = $count + 1;
	echo '<tr>';
	echo '<td>';
	echo $count;
	echo '</td><td>';
	echo $value->customerFName;
	echo '</td><td>';
	echo $value->customerLName;
	echo '</td><td>';
	echo form_open('MGTracker/assignType');
	echo '<input type="text" class="form-control form-control-plaintext" name = "email" value="'; 
	echo $value->CustomerEmail;
	echo '" "readonly">';
	echo '</td><td>';
	echo $value->customerPhone;
	echo '</td><td>';
	echo '<input type="text" class="form-control" name="usertype" value="';
	echo $value->usertype;
	echo '">';
	echo '</td><td>';
	echo form_submit("submit", "update", "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo '</td>';
	echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
//customers
	echo '<div id="customers" class="collapse">';
	echo '<h4>Customers</h4>';
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>#</th>';
	echo '<th>First Name</th>';
	echo '<th>Last Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone Number</th>';
	echo '<th>Role<th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	$count = 0;
	foreach ($customers as $value) {
	$count = $count + 1;
	echo '<tr>';
	echo '<td>';
	echo $count;
	echo '</td><td>';
	echo $value->customerFName;
	echo '</td><td>';
	echo $value->customerLName;
	echo '</td><td>';
	echo form_open('MGTracker/assignType');
	echo '<input type="text" class="form-control form-control-plaintext" name = "email" value="'; 
	echo $value->CustomerEmail;
	echo '" "readonly">';
	echo '</td><td>';
	echo $value->customerPhone;
	echo '</td><td>';
	echo '<input type="text" class="form-control" name="usertype" value="';
	echo $value->usertype;
	echo '">';
	echo '</td><td>';
	echo form_submit("submit", "update", "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo '</td>';
	echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
}elseif($usertype === "superadmin"){
	echo "<h4>Contacts</h4>";
	//buttons
	echo '<button type="button" id="employeesContact" class="btn btn-primary" data-toggle="collapse" href="#employees" role="button" aria-expanded="false" aria-controls="employees" style="margin-right:2%; margin-bottom:2%;">Employees</button>';
	echo '<button type="button" id="customerContact" class="btn btn-primary" data-toggle="collapse" href="#customers" role="button" aria-expanded="false" aria-controls="customers" style="margin-right:2%; margin-bottom:2%;">Customers</button>';
	//employees
	echo '<div id="employees" class="collapse">';
	echo '<h4>Employee Contacts</h4>';
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>#</th>';
	echo '<th>First Name</th>';
	echo '<th>Last Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone Number</th>';
	echo '<th>Role<th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	$count = 0;
	foreach ($employee as $value) {
	$count = $count + 1;
	echo '<tr>';
	echo '<td>';
	echo $count;
	echo '</td><td>';
	echo $value->customerFName;
	echo '</td><td>';
	echo $value->customerLName;
	echo '</td><td>';
	echo form_open('MGTracker/assignType');
	echo '<input type="text" class="form-control form-control-plaintext" name = "email" value="'; 
	echo $value->CustomerEmail;
	echo '" "readonly">';
	echo '</td><td>';
	echo $value->customerPhone;
	echo '</td><td>';
	echo '<input type="text" class="form-control" name="usertype" value="';
	echo $value->usertype;
	echo '">';
	echo '</td><td>';
	echo form_submit("submit", "update", "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo '</td>';
	echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
//customers
	echo '<div id="customers" class="collapse">';
	echo '<h4>Customers</h4>';
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>#</th>';
	echo '<th>First Name</th>';
	echo '<th>Last Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone Number</th>';
	echo '<th>Role<th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	$count = 0;
	foreach ($customers as $value) {
	$count = $count + 1;
	echo '<tr>';
	echo '<td>';
	echo $count;
	echo '</td><td>';
	echo $value->customerFName;
	echo '</td><td>';
	echo $value->customerLName;
	echo '</td><td>';
	echo form_open('MGTracker/assignType');
	echo '<input type="text" class="form-control form-control-plaintext" name = "email" value="'; 
	echo $value->CustomerEmail;
	echo '" "readonly">';
	echo '</td><td>';
	echo $value->customerPhone;
	echo '</td><td>';
	echo '<input type="text" class="form-control" name="usertype" value="';
	echo $value->usertype;
	echo '">';
	echo '</td><td>';
	echo form_submit("submit", "update", "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo '</td>';
	echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
}elseif($usertype === "employee"){
	echo "<h4>Contacts</h4>";
	//buttons
	echo '<button type="button" id="employeesContact" class="btn btn-primary" data-toggle="collapse" href="#employees" role="button" aria-expanded="false" aria-controls="employees" style="margin-right:2%; margin-bottom:2%;">Co-Workers</button>';
	echo '<button type="button" id="customerContact" class="btn btn-primary" data-toggle="collapse" href="#customers" role="button" aria-expanded="false" aria-controls="customers" style="margin-right:2%; margin-bottom:2%;">Customers</button>';
	//employees
	echo '<div id="employees" class="collapse">';
	echo '<h4>Co-Workers</h4>';
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>#</th>';
	echo '<th>First Name</th>';
	echo '<th>Last Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone Number</th>';
	echo '<th>Role<th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	$count = 0;
	foreach ($employee as $value) {
	$count = $count + 1;
	echo '<tr>';
	echo '<td>';
	echo $count;
	echo '</td><td>';
	echo $value->customerFName;
	echo '</td><td>';
	echo $value->customerLName;
	echo '</td><td>';
	echo $value->CustomerEmail;
	echo '</td><td>';
	echo $value->customerPhone;
	echo '</td><td>';
	echo $value->usertype;
	echo '</td><td>';
	echo '</td>';
	echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
	//customers
	echo '<div id="customers" class="collapse">';
	echo '<div><h4>Customers</h4></div>';
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>#</th>';
	echo '<th>First Name</th>';
	echo '<th>Last Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone Number</th>';
	echo '<th>Role<th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	$count = 0;
	foreach ($customers as $value) {
	$count = $count + 1;
	echo '<tr>';
	echo '<td>';
	echo $count;
	echo '</td><td>';
	echo $value->customerFName;
	echo '</td><td>';
	echo $value->customerLName;
	echo '</td><td>';
	echo $value->CustomerEmail;
	echo '</td><td>';
	echo $value->customerPhone;
	echo '</td><td>';
	echo $value->usertype;
	echo '</td>';
	echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
}

if($usertype === "superadmin"){
	echo '<h4>Users</h4>';
	echo '<button type="button" id="users" class="btn btn-primary" data-toggle="collapse" href="#users" role="button" aria-expanded="false" aria-controls="users" style="margin-right:2%; margin-bottom:2%;">Customers</button>';
	echo '<div id="users" class="collapse">';
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>#</th>';
	echo '<th>username</th>';
	echo '<th>First Name</th>';
	echo '<th>Last Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone Number</th>';
	echo '<th>Company</th>';
	echo '<th>User Type<th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	$count = 0;
	foreach ($allusers as $value) {
	$count = $count + 1;
	echo '<tr>';
	echo '<td>';
	echo $count;
	echo '</td>';
	echo form_open('MGTracker/editUsers');

	echo '<td>';
	echo '<input type="text" class="form-control form-control-plaintext" name = "username" value="';
	echo $value->username;
	echo '">';
	echo '</td><td>';
	echo '<input type="text" class="form-control form-control-plaintext" name = "fname" value="';
	echo $value->customerFName;
	echo '">';
	echo '</td><td>';
	echo '<input type="text" class="form-control form-control-plaintext"  name = "lname" value="';
	echo $value->customerLName;
	echo '">';
	echo '</td><td>';
	echo '<input type="text" class="form-control form-control-plaintext" name = "email" value="'; 
	echo $value->CustomerEmail;
	echo '" "readonly">';
	echo '</td><td>';
	echo '<input type="text" class="form-control form-control-plaintext" name = "phone" value="';
	echo $value->customerPhone;
	echo '">';
	echo '</td><td>';
	echo '<input type="text" class="form-control form-control-plaintext" name = "company" value="';
	echo $value->customerCompany;
	echo '">';
	echo '</td><td>';
	echo '<input type="text" class="form-control form-control-plaintext" name="usertype" value="';
	echo $value->usertype;
	echo '">';
	echo '</td><td>';
	echo form_submit("submit", "update", "class='submit btn btn-primary btn-sm'");
	echo form_close();
	echo '</td>';
	echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
}

?>