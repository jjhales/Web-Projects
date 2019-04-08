<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nutrients extends CI_Controller{
	public function index(){
		//invoke model
		$this->load->model('FarmMaterial');
		$this->load->model('Crop');
		//prepping data from model
		//loaded lists from the database in alphabetical order 
		//eventually could have this write to an xml or json so it could query those instead of a db query--just a thought
		$data['nutrientName'] = $this->FarmMaterial->nutrientName();
		$data['nutrientManufacturer'] = $this->FarmMaterial->nutrientManufacturer();
		$data['location'] = $this->Crop->location();
		//$data['activeNutrients'] = $this->Crop->activeNutrients();
		$data['nutrientsLocation'] = $this->Crop->nutrientsLocation();
		//load views
		$this->load->view('templates/header2');
		$this->load->view('nutrientUse', $data);
		$this->load->view('templates/footer');
	}

	public function useNutrients(){	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nutrientName', 'Nutrient Name', 'required');
		$this->form_validation->set_rules('nutrientManufacturer', 'Nutrient Manufacturer', 'required');
		$this->form_validation->set_rules('nutrientAmount', 'Nutrient Amount', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
		$this->form_validation->set_rules('nutrientUseDate', 'Nutrient Use Date', 'required');
		if($this->form_validation->run()){
			$NS = $this->input->post('nutrientAmount');
			$NA =$this->input->post('nutrientMeasure');
		//convert oz to g if needed
		if($NA === "oz"){
			$nutrientCon = ($NS * 29.57);
		}else{
			$nutrientCon = ($NS * 1);
		}
			//prep data for db in array	
			$data = array(
				'nutrientName' => $this->input->post('nutrientName'),
				'nutrientManufacturer' => $this->input->post('nutrientManufacturer'),
				'nutrientAmount' => $nutrientCon,
				'location' => $this->input->post('location'),
				'nutrientUseDate' =>$this->input->post('nutrientUseDate'),
				'inUse' =>('1'),

			);
			$this->load->view('templates/header3');
			$this->load->view('success/nutrientUseSuccess', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('errors/crop_error');
		}
	}
	public function validateNutrientUse(){
		$currentLocation = array(
				'nutrientName' => $this->input->post('nutrientName'),
				'nutrientManufacturer' => $this->input->post('nutrientManufacturer'),
				'location' => $this->input->post('location')
		);
		$notinUse = array(
				'inUse' => ('0')
		);
		//check nutrientUse by name, manufacturer, location
		$this->db->where($currentLocation);
		//if results turn inUse to value of 0
		$this->db->update('nutrientuse', $notinUse);
		//setup array for insert into the db
		$data = array(
				'nutrientName' => $this->input->post('nutrientName'),
				'nutrientManufacturer' => $this->input->post('nutrientManufacturer'),
				'nutrientAmount' => $this->input->post('nutrientAmount'),
				'location' => $this->input->post('location'),
				'nutrientUseDate' =>$this->input->post('nutrientUseDate'),
				'inUse' =>('1'),
				'username' => $this->session->userdata('username'),
				'company' => $this->session->userdata('company')
			);

		//insert new value into the db
			$query = $this->db->insert('nutrientuse', $data);
			$this->load->view('templates/header3');
			$this->load->view('success/addSuccess');

	}
	public function nutrientUseDeactivate(){
		$data = array(
			'nutrientUseID' => $this->input->post('nutrientUseID')
		);
		$notinUse = array(
				'inUse' => ('0')
		);
		//remove a nutrient from active list
		$this->db->where($data);
		$this->db->update('nutrientuse', $notinUse);
		$this->load->view('templates/header3');
		$this->load->view('success/addSuccess');

	}
			
}
?>