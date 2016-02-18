<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GDP extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	//loads home page
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/modals');
		$this->load->view('templates/footer');
	}
	//validates new user requires username and email to be unique in db
	public function new_user_valid()
	{
		// loads form validation library
		$this->load->library('form_validation');
		//sets rules for form validation of info for new user form
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[gdp_users.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[gdp_users.email]');
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
	}//close new_user_valid


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
			redirect ('Picks/default_week');
		} else{
			// loads login.php login form again
				$this->load->view('templates/header_2');
				$this->load->view('errors/signin_error');
				$this->load->view('templates/modals');
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
	//loads teams page from the Clubhouse page
	public function teams_info(){
		if($this->session->userdata('is_logged_in')){
		$this->load->model('model_users');
		$data['team'] = $this->model_users->teams_display();
		$this->load->view('templates/header_3');
		$this->load->view('templates/clubhouse_link');
		$this->load->view('teams_page', $data);
		$this->load->view('templates/footer');
		}
	}//close teams_info

	//add user_id to groups form show group members
	public function groups_display(){
		$this->load->model('model_users');
		$data['user_lookup'] = $this->model_users->user_id_lookup();
		$data['user_groups'] = $this->model_users->user_groups();
		$this->load->view('templates/header_3');
		$this->load->view('templates/clubhouse_link');
		$this->load->view('groups', $data);
		$this->load->view('templates/footer');
	}
	//add new unique groups
	public function group_create_valid(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('group_name', 'Group Name', 'required|is_unique[group_name.group_name]');
		if($this->form_validation->run())
		{
		$data = array(
			'group_leader' => $this->input->post('group_leader'),
			'group_name' => $this->input->post('group_name')
		);
		$query = $this->db->insert('group_name', $data);
		$data2 = array(
			'group_name' => $this->input->post('group_name'),
			'member' => $this->input->post('group_leader')
		);
		$query = $this->db->insert('group_members', $data2);

		$this->load->view('templates/header_3');
		$this->load->view('group_success');
		$this->load->view('templates/footer');
		}
		else{
			$this->load->view('templates/header_3');
			$this->load->view('errors/group_errors');
			$this->load->view('templates/footer');
		}

	}//validates add group 
	//searches for group by name and allows user to apply
	public function groupSearch(){
		$data['query'] = $this->model_users->search();
		$data['user_id'] = $this->model_users->user_id_lookup();
		$this->load->view('templates/header_3');
		$this->load->view('templates/clubhouse_link');
		$this->load->view('groups_result', $data);
		$this->load->view('templates/footer');
	}
	//allows users to apply to groups. info gets stored in a temporary db until approved
	public function apply_to_groups(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('member', 'User', 'required');
		$this->form_validation->set_rules('group_name', 'Group Name', 'required');
		if($this->form_validation->run())
		{
		$data = array(
			'member' => $this->input->post('member'),
			'group_name' => $this->input->post('group_name')
		);
		$query = $this->db->insert('temp_group_members', $data);
		$this->load->view('templates/header_3');
		$this->load->view('group_apply_success');
		$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header_3');
			$this->load->view('errors/group_errors');
			$this->load->view('templates/footer');
		}
	}
	//displays information for managing and seeing group stats
	public function groupstats(){
		$data['group_name'] = $this->model_users->group_name_display();
		$data['members'] = $this->model_users->group_members();
		$data['user_lookup'] = $this->model_users->user_id_lookup();
		$data['group_lead'] = $this->model_users->group_lead();
		$data['app_members'] = $this->model_users->group_applicants();
		$this->load->view('templates/header_3');
		$this->load->view('templates/clubhouse_link');
		$this->load->view('manage_groups', $data);
		$this->load->view('group_stats', $data);
		$this->load->view('templates/footer');
	}
	//group leader approval / denial of member request
	//no notifications at this time of approval disproval to the requestor
	//no notifications at this time from requestor to group lead for approval 

	public function group_choice(){
		$memberchoice = $this->input->post('memberchoice');
		$data = array(
				'group_name' => $this->input->post('group_name'),
				'member' => $this->input->post('member')
			);
		if ($memberchoice === 'accept'){
			$query = $this->db->insert('group_members', $data);
			$this->model_users->delete_temp_member();
			$this->load->view('templates/header_3');
			//notification to the group leader by modal as to approval
			$this->load->view('status/member_add');
			$this->load->view('templates/footer');
			
			
			}else{
			$this->model_users->delete_temp_member();
			$this->load->view('templates/header_3');
			//notification to the group leader by modal as to denial
			$this->load->view('status/member_deny');
			$this->load->view('templates/footer');
			
			
			}
	}
	public function remove_members(){
		$this->model_users->delete_group_member();
		$this->load->view('templates/header_3');
		$this->load->view('status/member_delete');	
		$this->load->view('templates/footer');
		
	}
	public function logout()
	{
			$this->session->sess_destroy();
			redirect('');
	}

	//forgot password sequence
	//forgot password email form
	public function forgot_password(){
		$this->load->view('templates/header_5');
		$this->load->view('templates/forgot_password');
		$this->load->view('templates/footer');
	}
	//forgot password email_verification matches email in db. Upon success generate pin_verification and insert pin_verification into gdp users table
	public function email_verification(){
		// loads form validation library
		$this->load->library('form_validation');
		//validates email is in db 
		$this->form_validation->set_rules('email', 'email', 'required|trim');

		
		if ($this->form_validation->run()){
			$email = $this->input->post('email');
			$sql = 'SELECT user_id FROM gdp_users WHERE email = ?';
			$query = $this->db->query($sql, $email);
			$result = $query->result();
				if($result > 0){
				//generate pin verification 
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
				$pin_verification = substr( str_shuffle( $chars ), 0, 8 );
				$data = array('pin_verification' => $pin_verification);
				$this->db->where('email', $email);
				$this->db->update('gdp_users', $data);
				//load successful views
				$this->load->view('templates/header_5');
				$this->load->view('templates/email_sent');
				$this->load->view('templates/footer');
				//generate email 
				$this->load->library('email');
				$this->email->from('gdp@juanitahales.com');
				$this->email->to($email);
				$this->email->subject('Reset Your Game Day Picker Password');
				$this->email->message('Hello you requested we reset your password please click the link:
				 http://www.juanitahales.com/GDP/index.php/GDP/reset_verification          
				 Enter your email address and the pin from this email.          '          
				 .$pin_verification.
				 '          Thank you for using Game Day Picker!');
				$this->email->send();
				
				}else{
					$this->load->view('templates/header_5');
					$this->load->view('errors/email_fail');
					$this->load->view('templates/footer');
				}
		}else{
			//you email didn't match our records
			$this->load->view('templates/header_5');
			$this->load->view('errors/email_fail');
			$this->load->view('templates/footer');
		}
	}
	public function reset_verification(){
		$this->load->view('templates/header_5');
		$this->load->view('templates/reset_verification');
		$this->load->view('templates/footer');
	}
	public function email_pin_verification(){
		$this->load->library('form_validation');
		//validates email is in db 
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('pin_verification', 'pin_verification', 'required');

		if ($this->form_validation->run()){
			//variables email
			$data = $this->input->post('email');
			$data3 = array(
				'email' => $this->input->post('email')
			);
			//variables pin
			$data2 = $this->input->post('pin_verification');
			//db
			$sql = 'SELECT pin_verification FROM gdp_users WHERE email = ?';
			$query = $this->db->query($sql, $data);
			$results = $query->result();
			//when pin number is verified update 
				foreach ($results as $row) {
				if ($row->pin_verification === $data2){
					$this->load->view('templates/header_5');
					$this->load->view('templates/reset_password', $data3);
					$this->load->view('templates/footer');
				}else{
					$this->load->view('templates/header_5');
					$this->load->view('errors/pin_error');
					$this->load->view('templates/footer');
				}}
			}else{
			$this->load->view('templates/header_5');
			$this->load->view('errors/pin_error');
			$this->load->view('templates/footer');
		}
			
	}
	//reset password if pass pin verification
	public function reset_password(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passwordConf]|md5');
		$this->form_validation->set_rules('passwordConf', 'PasswordConf', 'trim|required');

		if ($this->form_validation->run()){
			//declare email
			$data = $this->input->post('email');
			$data2 = array(
				'password' => $this->input->post('password'), 
			);
			//update new password
			$this->db->where('email', $data);
			$this->db->update('gdp_users', $data2);
			//update new pin
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
			$pin_verification = substr( str_shuffle( $chars ), 0, 8 );
			$data3 = array('pin_verification' => $pin_verification);
			$this->db->where('email', $data);
			$this->db->update('gdp_users', $data3);
			//display message
			$this->load->view('templates/header_5');
			$this->load->view('templates/reset_success');
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header_5');
			$this->load->view('errors/reset_fail');
			$this->load->view('templates/footer');
		}

		

	}//end password reset functions
	

 } //closes controller
