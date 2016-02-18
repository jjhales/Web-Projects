<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	//load homepage as default
	public function index(){
		$this->homepage();
	}
	//displays homepage / tested OK
	public function homepage()
	{
		// loads header.php
		$this->load->view('templates/header');
		//loads intro.php introduction message
		$this->load->view('intro');
		//loads new_employee.php new_employee form
		$this->load->view('new_employee');
		// loads login.php login form
		$this->load->view('login');
		//loads footer.php 
		$this->load->view('templates/footer');
	} //close homepage
	//login validation rules set / tested OK
	public function login_validation()
	{		
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
			redirect ('dashboard');
		} else{
			// loads login.php login form again
			$this->load->view('templates/header');
			$this->load->view('templates/home_link');
			$this->load->view('login');
			$this->load->view('templates/footer');
		}
	} //close login_validation
	//validates if user is in db to login / tested OK
	public function validate_credentials()
	{
		// loads model_users db model
		$this->load->model('model_users');
		// checks if true for model_users
		if($this->model_users->can_log_in())
		{
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials', 'Incorrect login');
			return false;
		}
	} //close validate_credentials
	//validates new_employee form tested/OK
	public function new_employee_insert_valid()
	{
		$this->load->library('form_validation');
			//sets rules for form validation of infro for new user form
		$this->form_validation->set_rules('employee_fname', 'First Name', 'required');
		$this->form_validation->set_rules('employee_lname', 'Last Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[employee.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|md5');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[employee.email]');
			
			if($this->form_validation->run())
			{
				// inserts user data into db and loads login page 
				$data = array(
					"employee_fname" => $this->input->post('employee_fname'),
					"employee_lname" => $this->input->post('employee_lname'),
					"username" => $this->input->post('username'),
					"password" => $this->input->post('password'),
					"email" => $this->input->post('email')
					);

				$query = $this->db->insert('employee', $data);
				redirect ('home/first_login');
			}else{
				// loads new_employee.php first login 
				$this->load->view('templates/header');
				$this->load->view('templates/home_link');
				$this->load->view('new_employee');
				$this->load->view('templates/footer');
			}
	}//close new_employee_insert_valid
	//first login redirects user to login with new created username and password tested/OK
	public function first_login()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/home_link');
		$this->load->view('first_login');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}//close first login
	
}//closes controller
