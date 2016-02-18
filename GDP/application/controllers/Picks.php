<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks extends CI_Controller {

	public function index()
	{
		$this->default_week();
	}
	//logout
	public function logout()
	{
			$this->session->sess_destroy();
			redirect('');
	}

	// default view current week change upon week change
	public function default_week(){
		redirect ('Picks_wk17/week17');
	}
	// validates picks week 1 -16 only validates games 1-13 due to bye weeks
	public function picks_validation(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Member Sign in', 'required');
		
		if($this->form_validation->run())
		 	{
				//array for user post data
				$data = array(
					"username" => $this->input->post('username'),
					"week_number" => $this->input->post('week_number'),
					"game_1" => $this->input->post('game_1'),
					"game_2" => $this->input->post('game_2'),
					"game_3" => $this->input->post('game_3'),
					"game_4" => $this->input->post('game_4'),
					"game_5" => $this->input->post('game_5'),
					"game_6" => $this->input->post('game_6'),
					"game_7" => $this->input->post('game_7'),
					"game_8" => $this->input->post('game_8'),
					"game_9" => $this->input->post('game_9'),
					"game_10" => $this->input->post('game_10'),
					"game_11" => $this->input->post('game_11'),
					"game_12" => $this->input->post('game_12'),
					"game_13" => $this->input->post('game_13'),
					"game_14" => $this->input->post('game_14'),
					"game_15" => $this->input->post('game_15'),
					"game_16" => $this->input->post('game_16'),

				);
				//data array for query
				$data1 = array(
					"username" => $this->input->post('username'),
					"week_number" => $this->input->post('week_number'),
					);
				//query to check entry
				$sql = "SELECT user_picks.username, user_picks.week_number FROM user_picks WHERE user_picks.username = ? AND user_picks.week_number = ?";
				$query = $this->db->query($sql, $data1);
				$test = $query->result();
				//if test is null insert		
						if($test == NULL)
						{
							$query = $this->db->insert('user_picks', $data);
							$this->load->view('templates/header_3');
							$this->load->view('templates/success_picks');
							$this->load->view('templates/footer');
				//if test has data update		
						}else{
							$username = $this->input->post('username');
							$week_number = $this->input->post('week_number');
							$this->db->where('username', $username);
							$this->db->where('week_number', $week_number);
							$this->db->update('user_picks', $data);
							$this->load->view('templates/header_3');
							$this->load->view('templates/success_picks');
							$this->load->view('templates/footer');
						}
			//if timeout
			}elseif($this->session->userdata('is_logged_in'))
			{
				$this->load->view('templates/header_3');
				$this->load->view('templates/modals');
				$this->load->view('errors/pick_errors');
				$this->load->view('templates/clubhouse_link'); 
  				$this->load->view('templates/footer');
  			//if user is not logged in pop pick errors with username error
  			}else{
				$this->load->view('templates/header_2');
				$this->load->view('errors/pick_errors'); 
  				$this->load->view('templates/footer');
  			}

	}// close picks_validation
	//clubhouse view
	public function clubhouse(){
			$this->load->model('model_users');
			$data['profile_display'] = $this->model_users->profile_display();
			$data['teams_display'] = $this->model_users->teams_display();
			$data['personal'] = $this->model_users->personal_stats();
			$data['total'] = $this->model_users->total_stats();
			$this->load->view('templates/header_3');
			$this->load->view('clubhouse', $data);
			$this->load->view('templates/footer');
	}//close clubhouse
	//edit profile
	public function edit_profile(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('team_allegience', 'required');
		if($this->form_validation->run()){
				$data = array(
					"user_id" => $this->input->post('user_id'),
					"username" => $this->input->post('username'),
					"email" => $this->input->post('email'),
					"team_allegience" => $this->input->post('team_allegience'),
				);
				$user_id = $this->input->post('user_id');
				$this->db->where('user_id', $user_id);
				$query = $this->db->update('gdp_users', $data);
				
				$this->load->view('templates/header_3');
				$this->load->view('templates/edit_psuccess');
				$this->load->view('templates/footer');
				

		}else{
				$this->load->view('templates/header_3');
				$this->load->view('errors/pick_errors');
				$this->load->view('templates/footer');
			
		}
	}//close edit profile

	public function change_password(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_id' ,'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passwordConf]|md5');
		$this->form_validation->set_rules('passwordConf', 'PasswordConf', 'trim|required');
		if ($this->form_validation->run())
			{
				$data = array(
					"password" =>$this->input->post('password')

				);
				$user_id = $this->input->post('user_id');
				$this->db->where('user_id', $user_id);
				$query = $this->db->update('gdp_users', $data);
				$this->load->view('templates/header_3');
				$this->load->view('templates/change_password_success');
				$this->load->view('templates/footer');
		}else{
				$this->load->view('templates/header_3');
				$this->load->view('errors/pick_errors');
				$this->load->view('templates/footer');
		}
	}
	
}//close Picks
	
	
