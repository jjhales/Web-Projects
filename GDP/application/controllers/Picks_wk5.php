<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk5 extends CI_Controller {

public function week5(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups5');
		$data['team1'] = $this->matchups5->team1();
		$data['team2'] = $this->matchups5->team2();
		$data['team3'] = $this->matchups5->team3();
		$data['team4'] = $this->matchups5->team4();
		$data['team5'] = $this->matchups5->team5();
		$data['team6'] = $this->matchups5->team6();
		$data['team7'] = $this->matchups5->team7();
		$data['team8'] = $this->matchups5->team8();
		$data['team9'] = $this->matchups5->team9();
		$data['team10'] = $this->matchups5->team10();
		$data['team11'] = $this->matchups5->team11();
		$data['team12'] = $this->matchups5->team12();
		$data['team13'] = $this->matchups5->team13();
		$data['team14'] = $this->matchups5->team14();
		$data['team15'] = $this->matchups5->team15();
		$data['team16'] = $this->matchups5->team16();
		$data['team17'] = $this->matchups5->team17();
		$data['team18'] = $this->matchups5->team18();
		$data['team19'] = $this->matchups5->team19();
		$data['team20'] = $this->matchups5->team20();
		$data['team21'] = $this->matchups5->team21();
		$data['team22'] = $this->matchups5->team22();
		$data['team23'] = $this->matchups5->team23();
		$data['team24'] = $this->matchups5->team24();
		$data['team25'] = $this->matchups5->team25();
		$data['team26'] = $this->matchups5->team26();
		$data['team27'] = $this->matchups5->team27();
		$data['team28'] = $this->matchups5->team28();
		$data['dbpickvalues'] = $this->matchups5->picks_present_5();
		$data['week5_winners'] = $this->matchups5->winner_picks_5();

		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week5', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week5', $data);
		$this->load->view('templates/footer');
		}
	}
}