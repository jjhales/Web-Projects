<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {

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
	

	public function index()
	{
		$this->team_names();
	}

	public function logout()
	{
			$this->session->sess_destroy();
			redirect('');
	}

	public function team_names()
	{
		$this->load->model("model_users");
		$data['teamInfo'] = $this->model_users->teams_select();
		$this->load->view('templates/header_4');
		$this->load->view('admin/admin_panel', $data);
		$this->load->view('templates/footer');
	}

	public function add_games(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('game_id', 'Game Id', 'required');
		$this->form_validation->set_rules('team_info', 'Team Info', 'required');
		$this->form_validation->set_rules('play_date', 'Play Date', 'required');
		$this->form_validation->set_rules('play_time', 'Play Time', 'required');

		if($this->form_validation->run()){
			$data = array(
				"game_id" => $this->input->post('game_id'),
				"team_info" => $this->input->post('team_info'),
				"play_date" => $this->input->post('play_date'),
				"play_time" => $this->input->post('play_time')
				);
			$query = $this->db->insert('games', $data);
			echo "Success!";
			redirect('Administration');
		}else{
			echo 'fail';
		}//close if

	}//close add games

	public function add_winners(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('week_number', 'Week Number', 'required');

		if($this->form_validation->run())
		 	{
				//array for user post data
				$data = array(
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
				$data1 = array(
					"week_number" => $this->input->post('week_number'),
					);
				$sql = "SELECT week_number from winners where week_number = ?";
				$query = $this->db->query($sql, $data1);
				$test = $query->result();
				if($test == NULL){
					$query = $this->db->insert('winners', $data);
					echo "Success!";
					redirect('Administration');
				}else{
					$week_number = $this->input->post('week_number');
					$this->db->where('week_number', $week_number);
					$this->db->update('winners', $data);
					echo "Success!";
					redirect('Administration');
				}
		}else{
			echo 'fail';
		}//close if
	}//close validation

}//close all