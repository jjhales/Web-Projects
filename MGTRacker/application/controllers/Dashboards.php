<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller{
	public function index(){
		//invoke model
		$this->load->model('FarmMaterial');
		$this->load->model('Crop');
		$this->load->model('Dashboard');
		$this->load->model('ModelUsers');
		//prepping data
		$data['harvestInventory'] = $this->Dashboard->harvestInventory();
		$data['harvestPlantInventory'] = $this->Dashboard->harvestPlantInventory();
		$data['avgHarvestInventory'] = $this->Dashboard->avgHarvestInventory();
		$data['avgPlantHarvestInventory'] = $this->Dashboard->avgPlantHarvestInventory();
		$data['seedPurchasedInventory'] = $this->Dashboard->seedPurchasedInventory();
		$data['seedUsedInventory'] = $this->Dashboard->seedUsedInventory();
		$data['seedUnusedInventory'] = $this->Dashboard->unusedSeed();
		$data['plantPurchasedInventory'] = $this->Dashboard->plantPurchasedInventory();
		$data['plantUsedInventory'] = $this->Dashboard->plantUsedInventory();
		$data['plantUnusedInventory'] = $this->Dashboard->unusedPlant();
		$data['mediumPurchasedInventory'] = $this->Dashboard->mediumPurchasedInventory();
		$data['mediumUsedInventory'] = $this->Dashboard->mediumUsedInventory();
		$data['mediumUnusedInventory'] =$this->Dashboard->unusedMedium();
		$data['equipmentPurchaseInventory'] = $this->Dashboard->equipmentPurchaseInventory();
		$data['nutrientPurchasedInventory'] = $this->Dashboard->nutrientPurchasedInventory();
		$data['nutrientUsedInventory'] = $this->Dashboard->nutrientUsedInventory();
		$data['nutrientUnusedInventory'] = $this->Dashboard->unusedNutrient();
		$user['profile'] = $this->ModelUsers->profile_view();
		$data2['employee'] = $this->ModelUsers->employees();
		$data2['customers'] = $this->ModelUsers->customers();
		$data2['allusers'] = $this->ModelUsers->allUsers();
		//load views
		//usertype
		$this->load->view('templates/header2');
		$this->load->view('dashBoard', $data);
		$this->load->view('personnel', $data2);
		$this->load->view('profile', $user);
		$this->load->view('editprofile', $user);
		$this->load->view('templates/footer');
	}
	
}



?>		