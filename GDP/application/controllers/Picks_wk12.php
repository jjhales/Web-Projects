<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk12 extends CI_Controller {

public function week12(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups12');
		$data['team1'] = $this->matchups12->team1();
		$data['team2'] = $this->matchups12->team2();
		$data['team3'] = $this->matchups12->team3();
		$data['team4'] = $this->matchups12->team4();
		$data['team5'] = $this->matchups12->team5();
		$data['team6'] = $this->matchups12->team6();
		$data['team7'] = $this->matchups12->team7();
		$data['team8'] = $this->matchups12->team8();
		$data['team9'] = $this->matchups12->team9();
		$data['team10'] = $this->matchups12->team10();
		$data['team11'] = $this->matchups12->team11();
		$data['team12'] = $this->matchups12->team12();
		$data['team13'] = $this->matchups12->team13();
		$data['team14'] = $this->matchups12->team14();
		$data['team15'] = $this->matchups12->team15();
		$data['team16'] = $this->matchups12->team16();
		$data['team17'] = $this->matchups12->team17();
		$data['team18'] = $this->matchups12->team18();
		$data['team19'] = $this->matchups12->team19();
		$data['team20'] = $this->matchups12->team20();
		$data['team21'] = $this->matchups12->team21();
		$data['team22'] = $this->matchups12->team22();
		$data['team23'] = $this->matchups12->team23();
		$data['team24'] = $this->matchups12->team24();
		$data['team25'] = $this->matchups12->team25();
		$data['team26'] = $this->matchups12->team26();
		$data['team27'] = $this->matchups12->team27();
		$data['team28'] = $this->matchups12->team28();
		$data['team29'] = $this->matchups12->team29();
		$data['team30'] = $this->matchups12->team30();
		$data['team31'] = $this->matchups12->team31();
		$data['team32'] = $this->matchups12->team32();
		$data['dbpickvalues'] = $this->matchups12->picks_present_12();
		$data['week12_winners'] = $this->matchups12->winner_picks_12();
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week12', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week12', $data);
		$this->load->view('templates/footer');
		}
	}
}