<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retail extends CI_Controller{
	public function index(){
		//invoke model
		$this->load->model('Retails');
		$data['productName'] = $this->Retails->productName();
		$data['products'] = $this->Retails->products();
		$data['services'] = $this->Retails->services();
		$this->load->view('templates/header2');
		$this->load->view('manageRetail', $data);
		$this->load->view('templates/footer');
	}
	public function addProduct(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('productName', 'Product Name', 'required|is_unique[retail.productName]');
		$this->form_validation->set_rules('productType', 'Product Type', 'required');
		$this->form_validation->set_rules('productPrice', 'Product Price', 'required');
		if($this->form_validation->run()){
			$data = array(
				'productName' => $this->input->post('productName'),
				'productType' => $this->input->post('productType'),
				'productDescription' => $this->input->post('productDescription'),
				'productPrice' => $this->input->post('productPrice'),
				'productQty' => 0,
				'username' => $this->session->userdata('username'),
				'company' => $this->session->userdata('company')
			);
			$this->db->insert('retail', $data);
			$this->load->view('templates/header3');
			$this->load->view('success/productSuccess', $data);
		}else{
			$this->load->view('templates/header3');
			$this->load->view('error/retail_error');
		}
	}
	public function addNewInventory(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('productName', 'Product Name', 'required');
		$this->form_validation->set_rules('productQty', 'Product Qty', 'required');
		if($this->form_validation->run()){
			$data1 = $this->input->post('productName');
			$this->load->model('Retails');
			$result = $this->Retails->productQty($data1);
			foreach($result as $value){
				$oldQty = $value->productQty;
				$newQty = $this->input->post('productQty');
				$addQty = $oldQty + $newQty;
				$qty['productQty'] = $addQty;
				$this->db->where('productName', $data1);
				$this->db->update('retail', $qty);
			}
			redirect ('Retail');
		}else{
			$this->load->view('templates/header3');
			$this->load->view('error/retail_error');
		}
	}
	public function editInventory(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('productId', 'Product Id', 'required');
		$this->form_validation->set_rules('productName', 'Product Name', 'required');
		$this->form_validation->set_rules('productPrice', 'Product Price', 'required');
		if($this->form_validation->run()){
			$data1 = $this->input->post('productId');
			$data = array(
				'productName' => $this->input->post('productName'),
				'productDescription' => $this->input->post('productDescription'),
				'productPrice' => $this->input->post('productPrice'),
				'username' => $this->session->userdata('username'),
				'company' => $this->session->userdata('company')
			);
			$this->db->where('productId', $data1);
			$this->db->update('retail', $data);
			redirect ('Retail');
		}else{
			$this->load->view('templates/header3');
			$this->load->view('error/retail_error');
		}
	}

}
?>