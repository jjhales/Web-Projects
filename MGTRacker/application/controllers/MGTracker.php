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
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customers.email]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[customers.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passwordConf]|md5');
		$this->form_validation->set_rules('passwordConf', 'PasswordConf', 'trim|required');
		$this->form_validation->set_rules('agree', 'Agree Terms', 'required');
		
		if($this->form_validation->run())
			{
				// inserts user data into db and loads login page 
				$data = array(
					"username" => $this->input->post('username'),
					"email" => $this->input->post('email'),
					"password" => $this->input->post('password')
				);

				$query = $this->db->insert('gdp_users', $data);
				$this->load->view('templates/header_2');
				$this->load->view('templates/signup_success');
				$this->load->view('templates/footer');

			}else{
				$this->load->view('templates/header_2');
				$this->load->view('errors/signup_error');
				$this->load->view('templates/modals');
				$this->load->view('templates/footer');


			}

	}
	public function login_validation(){
		// loads form validation library
		$this->load->library('form_validation');
		// sets rules for form validation for login upon success load dashboard
		$this->form_validation->set_rules('username', 'Username', 'required|trim|callback_validate_credentials');
		//sets rules for password 
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
			//if successful form validation load dashboard
		if($this->form_validation->run()){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => 1);
			$this->session->set_userdata($data);
			redirect ('Dashboard');
		} else{
			// loads login.php login form again
				$this->load->view('templates/header2');
				$this->load->view('errors/signin_error');
				$this->load->view('templates/footer');
		}

	}
	public function validate_credentials(){
		// loads ModelUsers db model
		$this->load->model('ModelUsers');
		// checks if true for ModelUsers
		if($this->ModelUsers->can_log_in())
		{
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials', 'Incorrect login');
			return false;
		}

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
	public function forgot_password(){

	}
	public function email_verification(){

	}
	public function reset_verification(){

	}
	public function email_pin_verification(){

	}
	public function reset_password(){

	}

}

?>