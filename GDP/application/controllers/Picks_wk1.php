<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk1 extends CI_Controller {

public function week1(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups');
		$data['team1'] = $this->matchups->team1();
		$data['team2'] = $this->matchups->team2();
		$data['team3'] = $this->matchups->team3();
		$data['team4'] = $this->matchups->team4();
		$data['team5'] = $this->matchups->team5();
		$data['team6'] = $this->matchups->team6();
		$data['team7'] = $this->matchups->team7();
		$data['team8'] = $this->matchups->team8();
		$data['team9'] = $this->matchups->team9();
		$data['team10'] = $this->matchups->team10();
		$data['team11'] = $this->matchups->team11();
		$data['team12'] = $this->matchups->team12();
		$data['team13'] = $this->matchups->team13();
		$data['team14'] = $this->matchups->team14();
		$data['team15'] = $this->matchups->team15();
		$data['team16'] = $this->matchups->team16();
		$data['team17'] = $this->matchups->team17();
		$data['team18'] = $this->matchups->team18();
		$data['team19'] = $this->matchups->team19();
		$data['team20'] = $this->matchups->team20();
		$data['team21'] = $this->matchups->team21();
		$data['team22'] = $this->matchups->team22();
		$data['team23'] = $this->matchups->team23();
		$data['team24'] = $this->matchups->team24();
		$data['team25'] = $this->matchups->team25();
		$data['team26'] = $this->matchups->team26();
		$data['team27'] = $this->matchups->team27();
		$data['team28'] = $this->matchups->team28();
		$data['team29'] = $this->matchups->team29();
		$data['team30'] = $this->matchups->team30();
		$data['team31'] = $this->matchups->team31();
		$data['team32'] = $this->matchups->team32();
		//load data for array to set inputs to selected
		$data['dbpickvalues'] = $this->matchups->picks_present_1();
		$data['week1_winners'] = $this->matchups->winner_picks_1();

		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week1', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week1', $data);
		$this->load->view('templates/footer');
		}
	}

}

