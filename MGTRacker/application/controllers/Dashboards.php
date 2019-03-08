<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller{
	public function index(){
		//invoke model
		$this->load->model('FarmMaterial');
		$this->load->model('Crop');
		$this->load->model('Dashboard');
		//prepping data
		$data['harvestInventory'] = $this->Dashboard->harvestInventory();
		$data['avgHarvestInventory'] = $this->Dashboard->avgHarvestInventory();
		$data['seedPurchasedInventory'] = $this->Dashboard->seedPurchasedInventory();
		$data['seedUsedInventory'] = $this->Dashboard->seedUsedInventory();
		$data['seedUnusedInventory'] = $this->Dashboard->unusedSeed();
		$data['mediumPurchasedInventory'] = $this->Dashboard->mediumPurchasedInventory();
		$data['mediumUsedInventory'] = $this->Dashboard->mediumUsedInventory();
		$data['mediumUnusedInventory'] =$this->Dashboard->unusedMedium();
		$data['equipmentPurchaseInventory'] = $this->Dashboard->equipmentPurchaseInventory();
		$data['nutrientPurchasedInventory'] = $this->Dashboard->nutrientPurchasedInventory();
		$data['nutrientUsedInventory'] = $this->Dashboard->nutrientUsedInventory();
		$data['nutrientUnusedInventory'] = $this->Dashboard->unusedNutrient();
		//load views
		$this->load->view('templates/header2');
		$this->load->view('dashBoard', $data);
		$this->load->view('templates/footer');
	}
}
?>		