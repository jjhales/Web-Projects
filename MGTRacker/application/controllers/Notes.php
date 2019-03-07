<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller{
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('businessNotes');
		$this->load->view('templates/footer');
	}
}
?>