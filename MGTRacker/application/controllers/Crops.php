<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crops extends CI_Controller{
	public function index(){
		//invoke model
		$this->load->model('FarmMaterial');
		$this->load->model('Crop');
		//prepping data from farm material model
		//loaded lists from the database in alphabetical order 
		//eventually could have this write to an xml or json so it could query those instead of a db query--just a thought
		$data['seedList'] = $this->FarmMaterial->seedList();
		$data['mediumName'] = $this->FarmMaterial->mediumName();
		$data['nutrientName'] = $this->FarmMaterial->nutrientName();
		$data['seedManufacturer'] = $this->FarmMaterial->seedManufacturer();
		$data['mediumManufacturer'] = $this->FarmMaterial->mediumManufacturer();
		$data['nutrientManufacturer'] = $this->FarmMaterial->nutrientManufacturer();
		$data['mediumMaterial'] = $this->FarmMaterial->mediumMaterial();
		$data['germination'] = $this->Crop->crops_pull_germ();
		$data['grow'] = $this->Crop->crops_pull_grow();
		$data['germinationCount'] = $this->Crop->crops_pull_germ_count();
		$data['growCount'] = $this->Crop->crops_pull_grow_count();
		$data['location'] = $this->Crop->location();
		//load views
		$this->load->view('templates/header2');
		$this->load->view('manageCrops', $data);
		$this->load->view('templates/footer');
	}
	public function addCrop(){
		//turn on validation
		$this->load->library('form_validation');
		//set validation rules
		$this->form_validation->set_rules('seedName', 'Seed Name', 'required');
		$this->form_validation->set_rules('seedUsed', 'Seed Used', 'required');
		$this->form_validation->set_rules('weight', 'Weight', 'required');
		$this->form_validation->set_rules('seedManufacturer', 'seedManufacturer', 'required');
		$this->form_validation->set_rules('mediumName', 'Medium Name', 'required');
		$this->form_validation->set_rules('mediumManufacturer', 'mediumManufacturer', 'required');
		$this->form_validation->set_rules('mediumAmount', 'Medium Amount', 'required');
		$this->form_validation->set_rules('mediumMaterial', 'Medium Material', 'required');
		$this->form_validation->set_rules('dateStart', 'Start Date', 'required');
		$this->form_validation->set_rules('testing', 'Testing', 'required');
		$this->form_validation->set_rules('location', 'Location','required');
		//run validation
		if($this->form_validation->run()){
			//convert weight to g
			//1oz = 28.34g
            //1lb = 453.59g
			$W = $this->input->post('weight');
			$A = $this->input->post('seedUsed');
		if($W === "oz"){
			$conAmount = ($A * 28.34);
		}elseif($W === "lb"){
			$conAmount = ($A * 453.59);
		}else{ 
			$conAmount = ($A * 1);
		}
			$MA = $this->input->post('mediumAmount');
			$MS = $this->input->post('mediumSize');
		//convert oz to g if needed
		if($MS === "oz"){
			$mediumCon = ($MA * 28.34);
		}else{
			$mediumCon = ($MA * 1);
		} 
			//prep data for DB in array
			$data = array(
				'seedName' => $this->input->post('seedName'),
				'seedUsed' => $conAmount,
				'seedManufacturer' => $this->input->post('seedManufacturer'),
				'mediumName' => $this->input->post('mediumName'),
				'mediumUsed' => $mediumCon,
				'mediumManufacturer' => $this->input->post('mediumManufacturer'),
				'mediumMaterial' => $this->input->post('mediumMaterial'),
				'dateStart' => $this->input->post('dateStart'),
				'testing' => $this->input->post('testing'),
				'location' => $this->input->post('location')
			);
			//load view for validation
			$this->load->view('templates/header3');
			$this->load->view('templates/validate_crop', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
			
		}
	}
	public function validateCrop(){
		$data = array(
				'seedName' => $this->input->post('seedName'),
				'seedUsed' => $this->input->post('seedUsed'),
				'seedManufacturer' => $this->input->post('seedManufacturer'),
				'mediumName' => $this->input->post('mediumName'),
				'mediumUsed' => $this->input->post('mediumUsed'),
				'mediumManufacturer' => $this->input->post('mediumManufacturer'),
				'mediumMaterial' => $this->input->post('mediumMaterial'),
				'dateStart' => $this->input->post('dateStart'),
				'testing' => $this->input->post('testing'),
				'location' => $this->input->post('location')
			);
			$query = $this->db->insert('crops', $data);
			$this->load->view('templates/header3');
			$this->load->view('success/addSuccess');
	}
	public function updateGerm(){
		$this->load->model('Crop');
		$this->load->library('form_validation');
		//set validation rules
		$this->form_validation->set_rules('flatNumber', 'Flat Number', 'required' );
		$this->form_validation->set_rules('dateLight', 'Light Date', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
		if($this->form_validation->run()){
			$data  = array(
				'flatNumber' => $this->input->post('flatNumber'),
				'dateLight' => $this->input->post('dateLight'),
				'location' =>$this->input->post('location')
				);
			
			$this->load->view('templates/header3');
			$this->load->view('success/germSuccess', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
		}

	}
	public function validateGerm(){
		$this->load->model('Crop');
		$data1 = $this->input->post("flatNumber");
		$data  = array(
			'dateLight' => $this->input->post('dateLight'),
			'location'=> $this->input->post('location')
			);
		
		$this->Crop->updateLight($data1, $data);
		$this->load->view('templates/header3');
		$this->load->view('success/addSuccess');
	}
	//update grow
		public function updateGrow(){
		$this->load->model('Crop');
		$this->load->library('form_validation');
		//set validation rules
		$this->form_validation->set_rules('flatNumber', 'Flat Number', 'required' );
		$this->form_validation->set_rules('dateEnd', 'Harvest Date', 'required');
		if($this->form_validation->run()){
			$W = $this->input->post('weight');
			$YW = $this->input->post('yWeight');
		if($W === "oz"){
			$conAmount = ($YW * 28.34);
		}elseif($W === "lb"){
			$conAmount = ($YW * 453.59);
		}else{ 
			$conAmount = ($YW * 1);
		}
			$data1 = $this->input->post("flatNumber");
			$data  = array(
				'flatNumber' => $this->input->post('flatNumber'),
				'seedName' => $this->input->post('seedName'),
				'dateEnd' => $this->input->post('dateEnd'),
				'yieldWeight' => $conAmount,
				'cropRating' => $this->input->post('cropRating')
				);
			$this->load->view('templates/header3');
			$this->load->view('success/updateSuccess', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
		}

	}
	public function validateGrow(){
		$this->load->model('Crop');
		$data1 = $this->input->post("flatNumber");
			$data  = array(
				'dateEnd' => $this->input->post('dateEnd'),
				'yieldWeight' => $this->input->post('yieldWeight'),
				'cropRating' => $this->input->post('cropRating')
				);
		
		$this->Crop->updateEnd($data1, $data);
		$this->load->view('templates/header3');
		$this->load->view('success/addSuccess');
	}
	
}
?>	