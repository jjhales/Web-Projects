<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picks_wk2 extends CI_Controller {

public function week2(){
		//load arrays from model users vteam and hteam
		$this->load->model('matchups2');
		$data['team1'] = $this->matchups2->team1();
		$data['team2'] = $this->matchups2->team2();
		$data['team3'] = $this->matchups2->team3();
		$data['team4'] = $this->matchups2->team4();
		$data['team5'] = $this->matchups2->team5();
		$data['team6'] = $this->matchups2->team6();
		$data['team7'] = $this->matchups2->team7();
		$data['team8'] = $this->matchups2->team8();
		$data['team9'] = $this->matchups2->team9();
		$data['team10'] = $this->matchups2->team10();
		$data['team11'] = $this->matchups2->team11();
		$data['team12'] = $this->matchups2->team12();
		$data['team13'] = $this->matchups2->team13();
		$data['team14'] = $this->matchups2->team14();
		$data['team15'] = $this->matchups2->team15();
		$data['team16'] = $this->matchups2->team16();
		$data['team17'] = $this->matchups2->team17();
		$data['team18'] = $this->matchups2->team18();
		$data['team19'] = $this->matchups2->team19();
		$data['team20'] = $this->matchups2->team20();
		$data['team21'] = $this->matchups2->team21();
		$data['team22'] = $this->matchups2->team22();
		$data['team23'] = $this->matchups2->team23();
		$data['team24'] = $this->matchups2->team24();
		$data['team25'] = $this->matchups2->team25();
		$data['team26'] = $this->matchups2->team26();
		$data['team27'] = $this->matchups2->team27();
		$data['team28'] = $this->matchups2->team28();
		$data['team29'] = $this->matchups2->team29();
		$data['team30'] = $this->matchups2->team30();
		$data['team31'] = $this->matchups2->team31();
		$data['team32'] = $this->matchups2->team32();
		$data['dbpickvalues'] = $this->matchups2->picks_present_2();
		$data['week2_winners'] = $this->matchups2->winner_picks_2();
		//check if logged in 
		//if logged in display header_3
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_3');
			$this->load->view('templates/weeks_nav');
			$this->load->view('templates/clubhouse_link');
			$this->load->view('weeks/week2', $data);
			$this->load->view('templates/footer');
		}else{
		//if not logged in load header_2
		$this->load->view('templates/header_2');
		$this->load->view('templates/modals');
		$this->load->view('templates/weeks_nav');
		$this->load->view('weeks/week2', $data);
		$this->load->view('templates/footer');
		}
	}
}