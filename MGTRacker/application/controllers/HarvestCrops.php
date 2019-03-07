<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HarvestCrops extends CI_Controller{
	public function index(){
		//invoke model
		$this->load->model('Crop');
		$data['harvest'] = $this->Crop->crops_pull_harvest();
		//load views
		$this->load->view('templates/header');
		$this->load->view('harvestCrop', $data);
		$this->load->view('templates/footer');
	}
}