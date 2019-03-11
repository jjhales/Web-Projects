<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FarmMaterials extends CI_Controller{
	public function index(){
		//invoke model
		$this->load->model('FarmMaterial');
		//prepping data from farm material model
		//loaded lists from the database in alphabetical order 
		//eventually could have this write to an xml or json so it could query those instead of a db query--just a thought
		$data['seedList'] = $this->FarmMaterial->seedList();
		$data['seedVendor'] = $this->FarmMaterial->seedVendor();
		$data['seedManufacturer'] = $this->FarmMaterial->seedManufacturer();
		$data['plantList'] = $this->FarmMaterial->plantList();
		$data['plantVendor'] = $this->FarmMaterial->plantVendor();
		$data['plantManufacturer'] = $this->FarmMaterial->plantManufacturer();
		$data['mediumName'] = $this->FarmMaterial->mediumName();
		$data['mediumVendor'] = $this->FarmMaterial->mediumVendor();
		$data['mediumManufacturer'] = $this->FarmMaterial->mediumManufacturer();
		$data['mediumMaterial'] = $this->FarmMaterial->mediumMaterial();
		$data['equipmentName'] = $this->FarmMaterial->equipmentName();
		$data['equipmentType'] = $this->FarmMaterial->equipmentType();
		$data['equipmentVendor'] = $this->FarmMaterial->equipmentVendor();
		$data['equipmentManufacturer'] = $this->FarmMaterial->equipmentManufacturer();
		$data['nutrientName'] = $this->FarmMaterial->nutrientName();
		$data['nutrientVendor'] = $this->FarmMaterial->nutrientVendor();
		$data['nutrientManufacturer'] = $this->FarmMaterial->nutrientManufacturer();
		//load views
		$this->load->view('templates/header2');
		$this->load->view('farmMats', $data);
		$this->load->view('templates/footer');
	}
	//add seed form validation and db insert
	public function addSeed(){
		//turn on validation
		$this->load->library('form_validation');
		//set validation rules
		$this->form_validation->set_rules('seedName', 'Seed Name', 'required' );
		$this->form_validation->set_rules('fseedAmount', 'Seed Amount', 'required');
		$this->form_validation->set_rules('fseedPrice', 'Seed Price', 'required');
		//run validation
		if($this->form_validation->run()){
			//convert weight to g
			//1oz = 28.34g
            //1lb = 453.59g
			$W = $this->input->post('weight');
			$A = $this->input->post('fseedAmount');
		if($W === "oz"){
			$conAmount = ($A * 28.34);
		}elseif($W === "lb"){
			$conAmount = ($A * 453.59);
		}else{ 
			$conAmount = ($A * 1);
		}
			//convert to price per g
			$firstPrice = $this->input->post("fseedPrice");
			$lastPrice = $firstPrice/$conAmount;  
			//prep data for DB in array
			$data = array(
				'seedName' => $this->input->post('seedName'),
				'seedVendor' => $this->input->post('seedVendor'),
				'seedManufacturer' => $this->input->post('seedManufacturer'),
				'seedAmount' => $conAmount,
				'seedPrice' => $lastPrice
			);
			//insert into db
			$this->load->view('templates/header3');
			$this->load->view('success/seedSuccess', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
		}
	}
	public function validateSeed(){
			$data = array(
				'seedName' => $this->input->post('seedName'),
				'seedVendor' => $this->input->post('seedVendor'),
				'seedManufacturer' => $this->input->post('seedManufacturer'),
				'seedAmount' => $this->input->post('seedAmount'),
				'seedPrice' => $this->input->post('seedPrice'),
				'username' => $this->session->userdata('username'),
				'company' => $this->session->userdata('company')
			);
			//insert into db
			$query = $this->db->insert('seed', $data);
			$this->load->view('templates/header3');
			$this->load->view('success/addSuccess');
	}
	public function addPlant(){
		//turn on validation
		$this->load->library('form_validation');
		//set validation rules
		$this->form_validation->set_rules('plantName', 'plant Name', 'required' );
		$this->form_validation->set_rules('plantAmount', 'plant Amount', 'required');
		$this->form_validation->set_rules('fplantPrice', 'plant Price', 'required');
		//run validation
		if($this->form_validation->run()){
			$plantAmount = $this->input->post("plantAmount");
			$firstPrice = $this->input->post("fplantPrice");
			$lastPrice = $firstPrice/$plantAmount;  
			//prep data for DB in array
			$data = array(
				'plantName' => $this->input->post('plantName'),
				'plantVendor' => $this->input->post('plantVendor'),
				'plantManufacturer' => $this->input->post('plantManufacturer'),
				'plantAmount' => $plantAmount,
				'plantPrice' => $lastPrice
			);
			//insert into db
			$this->load->view('templates/header3');
			$this->load->view('success/plantSuccess', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
		}
	}
	public function validatePlant(){
			$data = array(
				'plantName' => $this->input->post('plantName'),
				'plantVendor' => $this->input->post('plantVendor'),
				'plantManufacturer' => $this->input->post('plantManufacturer'),
				'plantAmount' => $this->input->post('plantAmount'),
				'plantPrice' => $this->input->post('plantPrice'),
				'username' => $this->session->userdata('username'),
				'company' => $this->session->userdata('company')
			);
			//insert into db
			$query = $this->db->insert('plant', $data);
			$this->load->view('templates/header3');
			$this->load->view('success/addSuccess');
	}
	//add medium form validation and db insert
	public function addMedium(){	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mediumName', 'Medium Name', 'required');
		$this->form_validation->set_rules('mediumAmount', 'Medium Amount', 'required');
		$this->form_validation->set_rules('fmediumCost', 'Medium Cost', 'required');
		if($this->form_validation->run()){
			$MA = $this->input->post('mediumAmount');
			$MS = $this->input->post('mediumSize');
			$C = $this->input->post('fmediumCost');
		//convert oz to g if needed
		if($MS === "oz"){
			$mediumCon = ($MA * 28.34);
		}else{
			$mediumCon = ($MA * 1);
		}
			//prep medium cost
			$mediumCost = $C/$mediumCon;
			//prep data for db in array	
			$data = array(
				'mediumName' => $this->input->post('mediumName'),
				'mediumVendor' => $this->input->post('mediumVendor'),
				'mediumManufacturer' => $this->input->post('mediumManufacturer'),
				'mediumMaterial' => $this->input->post('mediumMaterial'),
				'mediumAmount' => $MA,
				'mediumSize' => $MS,
				'mediumCost' => $mediumCost
			);
			$this->load->view('templates/header3');
			$this->load->view('success/mediumSuccess', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
		}
	}
	public function validateMedium(){
		$data = array(
				'mediumName' => $this->input->post('mediumName'),
				'mediumVendor' => $this->input->post('mediumVendor'),
				'mediumManufacturer' => $this->input->post('mediumManufacturer'),
				'mediumMaterial' => $this->input->post('mediumMaterial'),
				'mediumAmount' => $this->input->post('mediumAmount'),
				'mediumSize' => $this->input->post('mediumSize'),
				'mediumCost' => $this->input->post('mediumCost'),
				'username' => $this->session->userdata('username'),
				'company' => $this->session->userdata('company')
			);
			$query = $this->db->insert('medium', $data);
			$this->load->view('templates/header3');
			$this->load->view('success/addSuccess');

	}
	//add equipment form validation and db insert
	public function addEquipment(){
		//validate
		$this->load->library('form_validation');
		$this->form_validation->set_rules('equipmentName', 'Equipment Name', 'required');
		$this->form_validation->set_rules('equipmentType', 'Equipment Type', 'required');
		$this->form_validation->set_rules('equipmentPrice', 'Equipment Price', 'required');
		$this->form_validation->set_rules('equipmentPurchaseDate', 'Equipment Puchase Date', 'required');
		if($this->form_validation->run()){
			//prep data in array
			$data = array(
				'equipmentName' => $this->input->post('equipmentName'),
				'equipmentType' => $this->input->post('equipmentType'),
				'equipmentVendor' => $this->input->post('equipmentVendor'),
				'equipmentManufacturer' => $this->input->post('equipmentManufacturer'),
				'equipmentPrice' => $this->input->post('equipmentPrice'),
				'equipmentAmount' => $this->input->post('equipmentAmount'),
				'equipmentPurchaseDate' => $this->input->post('equipmentPurchaseDate')

			);
			//db insert
			$this->load->view('templates/header3');
			$this->load->view('success/equipmentSuccess', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
		}
	}
	public function validateEquipment(){
		$data = array(
				'equipmentName' => $this->input->post('equipmentName'),
				'equipmentType' => $this->input->post('equipmentType'),
				'equipmentVendor' => $this->input->post('equipmentVendor'),
				'equipmentManufacturer' => $this->input->post('equipmentManufacturer'),
				'equipmentPrice' => $this->input->post('equipmentPrice'),
				'equipmentAmount' => $this->input->post('equipmentAmount'),
				'equipmentPurchaseDate' => $this->input->post('equipmentPurchaseDate'),
				'username' => $this->session->userdata('username'),
				'company' => $this->session->userdata('company')

			);
			//db insert
			$query = $this->db->insert('equipment', $data);
			$this->load->view('templates/header3');
			$this->load->view('success/addSuccess');

	}
	public function addNutrients(){	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nutrientName', 'Nutrient Name', 'required');
		$this->form_validation->set_rules('nutrientSize', 'Nutrient Size', 'required');
		$this->form_validation->set_rules('nutrientPrice', 'Nutrient Price', 'required');
		if($this->form_validation->run()){
			$NS = $this->input->post('nutrientSize');
			$NA =$this->input->post('nutrientAmount');
			$NC = $this->input->post('nutrientPrice');
		//convert oz to g if needed
		if($NA === "oz"){
			$nutrientCon = ($NS * 29.57);
		}else{
			$nutrientCon = ($NS * 1);
		}
		$nutrientCost = $NC/$nutrientCon;
			//prep data for db in array	
			$data = array(
				'nutrientName' => $this->input->post('nutrientName'),
				'nutrientVendor' => $this->input->post('nutrientVendor'),
				'nutrientManufacturer' => $this->input->post('nutrientManufacturer'),
				'nutrientSize' => $nutrientCon,
				'nutrientPrice' => $nutrientCost
			);
			$this->load->view('templates/header3');
			$this->load->view('success/nutrientsSuccess', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
		}
	}
	public function validateNutrient(){
		$data = array(
				'nutrientName' => $this->input->post('nutrientName'),
				'nutrientVendor' => $this->input->post('nutrientVendor'),
				'nutrientManufacturer' => $this->input->post('nutrientManufacturer'),
				'nutrientSize' => $this->input->post('nutrientSize'),
				'nutrientPrice' => $this->input->post('nutrientPrice'),
				'username' => $this->session->userdata('username'),
				'company' => $this->session->userdata('company')
			);
			$query = $this->db->insert('nutrients', $data);
			$this->load->view('templates/header3');
			$this->load->view('success/addSuccess');

	}

}
