<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk4 extends CI_Controller {

public function week4(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups4');
		$data['team1'] = $this->matchups4->team1();
		$data['team2'] = $this->matchups4->team2();
		$data['team3'] = $this->matchups4->team3();
		$data['team4'] = $this->matchups4->team4();
		$data['team5'] = $this->matchups4->team5();
		$data['team6'] = $this->matchups4->team6();
		$data['team7'] = $this->matchups4->team7();
		$data['team8'] = $this->matchups4->team8();
		$data['team9'] = $this->matchups4->team9();
		$data['team10'] = $this->matchups4->team10();
		$data['team11'] = $this->matchups4->team11();
		$data['team12'] = $this->matchups4->team12();
		$data['team13'] = $this->matchups4->team13();
		$data['team14'] = $this->matchups4->team14();
		$data['team15'] = $this->matchups4->team15();
		$data['team16'] = $this->matchups4->team16();
		$data['team17'] = $this->matchups4->team17();
		$data['team18'] = $this->matchups4->team18();
		$data['team19'] = $this->matchups4->team19();
		$data['team20'] = $this->matchups4->team20();
		$data['team21'] = $this->matchups4->team21();
		$data['team22'] = $this->matchups4->team22();
		$data['team23'] = $this->matchups4->team23();
		$data['team24'] = $this->matchups4->team24();
		$data['team25'] = $this->matchups4->team25();
		$data['team26'] = $this->matchups4->team26();
		$data['team27'] = $this->matchups4->team27();
		$data['team28'] = $this->matchups4->team28();
		$data['team29'] = $this->matchups4->team29();
		$data['team30'] = $this->matchups4->team30();
		$data['dbpickvalues'] = $this->matchups4->picks_present_4();
		$data['week4_winners'] = $this->matchups4->winner_picks_4();
		
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week4', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week4', $data);
		$this->load->view('templates/footer');
		}
	}
}