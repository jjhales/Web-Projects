<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk16 extends CI_Controller {

public function week16(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups16');
		$data['team1'] = $this->matchups16->team1();
		$data['team2'] = $this->matchups16->team2();
		$data['team3'] = $this->matchups16->team3();
		$data['team4'] = $this->matchups16->team4();
		$data['team5'] = $this->matchups16->team5();
		$data['team6'] = $this->matchups16->team6();
		$data['team7'] = $this->matchups16->team7();
		$data['team8'] = $this->matchups16->team8();
		$data['team9'] = $this->matchups16->team9();
		$data['team10'] = $this->matchups16->team10();
		$data['team11'] = $this->matchups16->team11();
		$data['team12'] = $this->matchups16->team12();
		$data['team13'] = $this->matchups16->team13();
		$data['team14'] = $this->matchups16->team14();
		$data['team15'] = $this->matchups16->team15();
		$data['team16'] = $this->matchups16->team16();
		$data['team17'] = $this->matchups16->team17();
		$data['team18'] = $this->matchups16->team18();
		$data['team19'] = $this->matchups16->team19();
		$data['team20'] = $this->matchups16->team20();
		$data['team21'] = $this->matchups16->team21();
		$data['team22'] = $this->matchups16->team22();
		$data['team23'] = $this->matchups16->team23();
		$data['team24'] = $this->matchups16->team24();
		$data['team25'] = $this->matchups16->team25();
		$data['team26'] = $this->matchups16->team26();
		$data['team27'] = $this->matchups16->team27();
		$data['team28'] = $this->matchups16->team28();
		$data['team29'] = $this->matchups16->team29();
		$data['team30'] = $this->matchups16->team30();
		$data['team31'] = $this->matchups16->team31();
		$data['team32'] = $this->matchups16->team32();
		$data['dbpickvalues'] = $this->matchups16->picks_present_16();
		$data['week16_winners'] = $this->matchups16->winner_picks_16();
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week16', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week16', $data);
		$this->load->view('templates/footer');
		}
	}
}