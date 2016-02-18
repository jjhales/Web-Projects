<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk3 extends CI_Controller {

public function week3(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups3');
		$data['team1'] = $this->matchups3->team1();
		$data['team2'] = $this->matchups3->team2();
		$data['team3'] = $this->matchups3->team3();
		$data['team4'] = $this->matchups3->team4();
		$data['team5'] = $this->matchups3->team5();
		$data['team6'] = $this->matchups3->team6();
		$data['team7'] = $this->matchups3->team7();
		$data['team8'] = $this->matchups3->team8();
		$data['team9'] = $this->matchups3->team9();
		$data['team10'] = $this->matchups3->team10();
		$data['team11'] = $this->matchups3->team11();
		$data['team12'] = $this->matchups3->team12();
		$data['team13'] = $this->matchups3->team13();
		$data['team14'] = $this->matchups3->team14();
		$data['team15'] = $this->matchups3->team15();
		$data['team16'] = $this->matchups3->team16();
		$data['team17'] = $this->matchups3->team17();
		$data['team18'] = $this->matchups3->team18();
		$data['team19'] = $this->matchups3->team19();
		$data['team20'] = $this->matchups3->team20();
		$data['team21'] = $this->matchups3->team21();
		$data['team22'] = $this->matchups3->team22();
		$data['team23'] = $this->matchups3->team23();
		$data['team24'] = $this->matchups3->team24();
		$data['team25'] = $this->matchups3->team25();
		$data['team26'] = $this->matchups3->team26();
		$data['team27'] = $this->matchups3->team27();
		$data['team28'] = $this->matchups3->team28();
		$data['team29'] = $this->matchups3->team29();
		$data['team30'] = $this->matchups3->team30();
		$data['team31'] = $this->matchups3->team31();
		$data['team32'] = $this->matchups3->team32();
		$data['dbpickvalues'] = $this->matchups3->picks_present_3();
		$data['week3_winners'] = $this->matchups3->winner_picks_3();
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week3', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week3', $data);
		$this->load->view('templates/footer');
		}
	}
}