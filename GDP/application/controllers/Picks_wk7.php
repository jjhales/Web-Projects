<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk7 extends CI_Controller {

public function week7(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups7');
		$data['team1'] = $this->matchups7->team1();
		$data['team2'] = $this->matchups7->team2();
		$data['team3'] = $this->matchups7->team3();
		$data['team4'] = $this->matchups7->team4();
		$data['team5'] = $this->matchups7->team5();
		$data['team6'] = $this->matchups7->team6();
		$data['team7'] = $this->matchups7->team7();
		$data['team8'] = $this->matchups7->team8();
		$data['team9'] = $this->matchups7->team9();
		$data['team10'] = $this->matchups7->team10();
		$data['team11'] = $this->matchups7->team11();
		$data['team12'] = $this->matchups7->team12();
		$data['team13'] = $this->matchups7->team13();
		$data['team14'] = $this->matchups7->team14();
		$data['team15'] = $this->matchups7->team15();
		$data['team16'] = $this->matchups7->team16();
		$data['team17'] = $this->matchups7->team17();
		$data['team18'] = $this->matchups7->team18();
		$data['team19'] = $this->matchups7->team19();
		$data['team20'] = $this->matchups7->team20();
		$data['team21'] = $this->matchups7->team21();
		$data['team22'] = $this->matchups7->team22();
		$data['team23'] = $this->matchups7->team23();
		$data['team24'] = $this->matchups7->team24();
		$data['team25'] = $this->matchups7->team25();
		$data['team26'] = $this->matchups7->team26();
		$data['team27'] = $this->matchups7->team27();
		$data['team28'] = $this->matchups7->team28();
		$data['dbpickvalues'] = $this->matchups7->picks_present_7();
		$data['week7_winners'] = $this->matchups7->winner_picks_7();
		
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week7', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week7', $data);
		$this->load->view('templates/footer');
		}
	}
}