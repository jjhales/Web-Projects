<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk14 extends CI_Controller {

public function week14(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups14');
		$data['team1'] = $this->matchups14->team1();
		$data['team2'] = $this->matchups14->team2();
		$data['team3'] = $this->matchups14->team3();
		$data['team4'] = $this->matchups14->team4();
		$data['team5'] = $this->matchups14->team5();
		$data['team6'] = $this->matchups14->team6();
		$data['team7'] = $this->matchups14->team7();
		$data['team8'] = $this->matchups14->team8();
		$data['team9'] = $this->matchups14->team9();
		$data['team10'] = $this->matchups14->team10();
		$data['team11'] = $this->matchups14->team11();
		$data['team12'] = $this->matchups14->team12();
		$data['team13'] = $this->matchups14->team13();
		$data['team14'] = $this->matchups14->team14();
		$data['team15'] = $this->matchups14->team15();
		$data['team16'] = $this->matchups14->team16();
		$data['team17'] = $this->matchups14->team17();
		$data['team18'] = $this->matchups14->team18();
		$data['team19'] = $this->matchups14->team19();
		$data['team20'] = $this->matchups14->team20();
		$data['team21'] = $this->matchups14->team21();
		$data['team22'] = $this->matchups14->team22();
		$data['team23'] = $this->matchups14->team23();
		$data['team24'] = $this->matchups14->team24();
		$data['team25'] = $this->matchups14->team25();
		$data['team26'] = $this->matchups14->team26();
		$data['team27'] = $this->matchups14->team27();
		$data['team28'] = $this->matchups14->team28();
		$data['team29'] = $this->matchups14->team29();
		$data['team30'] = $this->matchups14->team30();
		$data['team31'] = $this->matchups14->team31();
		$data['team32'] = $this->matchups14->team32();
		$data['dbpickvalues'] = $this->matchups14->picks_present_14();
		$data['week14_winners'] = $this->matchups14->winner_picks_14();
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week14', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week14', $data);
		$this->load->view('templates/footer');
		}
	}
}