<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MGTracker extends CI_Controller{
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/userModals');
		$this->load->view('templates/footer');
	}
	public function new_user_valid(){
		// loads form validation library
		$this->load->library('form_validation');
		//sets rules for form validation of info for new user form
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		//check db for unique email address
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customers.CustomerEmail]');
		//check db for unique username
		$this->form_validation->set_rules('username', 'Username', 'trim|is_unique[customers.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim');
		//match password
		$this->form_validation->set_rules('passwordConf', 'Password Confirmation', 'trim|matches[password]');
		$this->form_validation->set_rules('agree', 'Agree Terms', 'required');
		//if validation is good
		if($this->form_validation->run()){
			//set password to a variable
			$newPass = $this->input->post('password');
			//hashes password for db
			$default_password = password_hash($newPass, PASSWORD_BCRYPT);
			//prep data for database insertion 
			$data = array(
				"customerFName" => $this->input->post('fname'),
				"customerLName" => $this->input->post('lname'),
				"customerCompany" => $this->input->post('company'),
				"customerPhone" => $this->input->post('phone'),
				"CustomerEmail" => $this->input->post('email'),
				"customerNews" => $this->input->post('news'),
				"username" => $this->input->post('username'),
				"usertype" => ('customer'),
				"password" => ($default_password),
				"resetCode" => ('0')
			);
			// inserts user data into db and loads login page
			$query = $this->db->insert('customers', $data);
			$this->load->view('templates/header3');
			$this->load->view('success/signupSuccess');
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/signup_error');
			$this->load->view('templates/footer');
		}
	}
	public function login_validation(){
		// loads form validation library
		$this->load->library('form_validation');
		// sets rules for form validation for login upon success load dashboard
		//check if usename is in database using validate_credentials()
		$this->form_validation->set_rules('username', 'Username', 'required|trim|callback_validate_credentials');
		$this->form_validation->set_message('validate_credentials', 'Your username cannot be found');
		//sets rules for password 
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		//if successful form validation check password against db then load dashboard
		if($this->form_validation->run()){
			//query db for password attached to username
			$user = $this->input->post('username');
			$sql = 'SELECT customerCompany, password, CustomerEmail, usertype FROM customers WHERE username = ?';
			$query = $this->db->query($sql, $user);
			$result = $query->result();
			//convert array for password and company to string
			foreach ($result as $row) {
				//password in db
				$dbpass = $row->password;
				//password entered by a valid user
				$userPass = $this->input->post('password');
				//company in db
				$company = $row->customerCompany;
				$email = $row->CustomerEmail;
				$usertype = $row->usertype;
				//compare password entered and database value
				if(password_verify($userPass, $dbpass)){ 
					$data = array(
					'username' => ($user),
					'company' => ($company),
					'email' => ($email),
					'usertype' => ($usertype),
					'is_logged_in' => 1);
					//set session data with username and company
					$this->session->set_userdata($data);
					//load dashboard
					if($usertype === 'customer'){
						redirect('Customers');
					}else{
					redirect ('Dashboards');
					}
				}else{
			// loads login.php login form again
					$this->load->view('templates/header3');
					$this->load->view('errors/password_error');
					$this->load->view('templates/footer');
				}//close if(password_verify())
			}//close foreach
		}else{
			// loads login.php login form again
					$this->load->view('templates/header3');
					$this->load->view('errors/signin_error');
					$this->load->view('templates/footer');
		}//close if(validation run)	
	}//close function
	public function validate_credentials(){
		// loads ModelUsers db model
		$this->load->model('ModelUsers');
		// checks if true for ModelUsers
		if($this->ModelUsers->can_log_in())
		{
			return TRUE;
		}else{
			
			return FALSE;
		}

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
	public function forgot_password(){
		$this->load->view('templates/header3');
		$this->load->view('templates/forgot_password');
		$this->load->view('templates/footer');

	}
	public function email_verification(){
		// loads form validation library
		$this->load->library('form_validation');
		//validates email is in db 
		$this->form_validation->set_rules('email', 'email', 'required|trim');

		
		if ($this->form_validation->run()){
			$email = $this->input->post('email');
			$sql = 'SELECT customerNumber FROM customers WHERE CustomerEmail = ?';
			$query = $this->db->query($sql, $email);
			$result = $query->result();
				if($result > 0){
				//generate pin verification 
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
				$pin_verification = substr( str_shuffle( $chars ), 0, 8 );
				$data = array('resetCode' => $pin_verification);
				$this->db->where('CustomerEmail', $email);
				$this->db->update('customers', $data);
				//load successful views
				$this->load->view('templates/header3');
				$this->load->view('templates/email_sent');
				$this->load->view('templates/footer');
				//generate email 
				$this->load->library('email');
				$this->email->from('juanita@juanitahales.com');
				$this->email->to($email);
				$this->email->subject('Reset Your MGTracker Password');
				$this->email->message('Hello you requested we reset your password please click the link:http://www.juanitahales/MGTracker/index.php/MGTracker/reset_verification
				       
				 Enter your email address and the pin from this email.          '          
				 .$pin_verification.
				 '          Thank you for using MGTracker!');
				$this->email->send();
				
				}else{
					$this->load->view('templates/header3');
					$this->load->view('errors/email_fail');
					$this->load->view('templates/footer');
				}
		}else{
			//you email didn't match our records
			$this->load->view('templates/header3');
			$this->load->view('errors/email_fail');
			$this->load->view('templates/footer');
		}

	}
	public function reset_verification(){
		$this->load->view('templates/header2');
		$this->load->view('templates/reset_verification');
		$this->load->view('templates/footer');
	}
	public function email_pin_verification(){
		$this->load->library('form_validation');
		//validates email is in db 
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('resetCode', 'Reset Code', 'required');

		if ($this->form_validation->run()){
			//variables email
			$data = $this->input->post('email');
			$data3 = array(
				'email' => $this->input->post('email')
			);
			//variables pin
			$data2 = $this->input->post('resetCode');
			//db
			$sql = 'SELECT resetCode FROM customers WHERE CustomerEmail = ?';
			$query = $this->db->query($sql, $data);
			$results = $query->result();
			//when pin number is verified update 
				foreach ($results as $row) {
				if ($row->resetCode === $data2){
					$this->load->view('templates/header3');
					$this->load->view('templates/reset_password', $data3);
					$this->load->view('templates/footer');
				}else{
					$this->load->view('templates/header3');
					$this->load->view('errors/pin_error');
					$this->load->view('templates/footer');
				}}
			}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/pin_error');
			$this->load->view('templates/footer');
		}

	}
	public function passwordReset(){
			$email = $this->session->userdata('email');
			$data = array(
				'email' => ($email)
			);
			$this->load->view('templates/header3');
			$this->load->view('templates/reset_password', $data);
			$this->load->view('templates/footer');

	}
	public function reset_password(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passwordConf]');
		$this->form_validation->set_rules('passwordConf', 'PasswordConf', 'trim|required');

		if ($this->form_validation->run()){
			//declare email
			$data = $this->input->post('email');
			$newPass = $this->input->post('password');
			//hashes password for db
			$default_password = password_hash($newPass, PASSWORD_BCRYPT);
			$pass = array(
				"password" => ($default_password)
			);
			//update new password
			$this->db->where('CustomerEmail', $data);
			$this->db->update('customers', $pass);
			//update new pin
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
			$pin_verification = substr( str_shuffle( $chars ), 0, 8 );
			$data3 = array('resetCode' => $pin_verification);
			$this->db->where('CustomerEmail', $data);
			$this->db->update('customers', $data3);
			//display message
			$this->load->view('templates/header3');
			$this->load->view('success/reset_success');
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/reset_fail');
			$this->load->view('templates/footer');
		}

	}
	public function editProfile(){
		// loads form validation library
		$this->load->library('form_validation');
		//sets rules for form validation of info for new user form
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		//if validation is good
		if($this->form_validation->run()){
			//username from session
			$username = $this->session->userdata('username');
			//package data to be added to the db
			$data = array(
				"customerFName" => $this->input->post('fname'),
				"customerLName" => $this->input->post('lname'),
				"customerCompany" => $this->input->post('company'),
				"customerPhone" => $this->input->post('phone'),
				"CustomerEmail" => $this->input->post('email')
			);
			//update db where username matches session data
			$this->db->where('username',$username);
			$this->db->update('customers', $data);
			redirect('Dashboards');
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/reset_fail');
			$this->load->view('templates/footer');
		}

			// inserts user data into db and loads login page
	}
	public function assignType(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('usertype', 'User Type', 'required');

		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$usertype = array('usertype'=> $this->input->post('usertype'));
			$this->db->where('CustomerEmail', $email);
			$this->db->update('customers', $usertype);
			redirect('Dashboards');
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
			$this->load->view('templates/footer');
		}
	}
	public function editUsers(){
		$this->load->library('form_validation');
		//sets rules for form validation of info for new user form
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		//if validation is good
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$data = array(
				"username" => $this->input->post('username'),
				"customerFName" => $this->input->post('fname'),
				"customerLName" => $this->input->post('lname'),
				"customerCompany" => $this->input->post('company'),
				"customerPhone" => $this->input->post('phone'),
				"usertype" => $this->input->post('usertype')
			);
			// inserts user data into db and loads login page
			$this->db->where('CustomerEmail', $email);
			$this->db->update('customers', $data);
			redirect('Dashboards');
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
			$this->load->view('templates/footer');
		}
	}

}

?>