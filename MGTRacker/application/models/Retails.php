<?php
class Retails extends CI_Model{
	
	public function productName(){
		$data = $this->session->userdata('company');
		$sql = "SELECT retail.productName FROM retail WHERE retail.company = ? AND retail.productType = 'product' ORDER BY productName asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function products(){
		$data = $this->session->userdata('company');
		$sql = "SELECT * FROM retail WHERE retail.company = ? AND retail.productType = 'product' ORDER BY productName asc";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
		public function services(){
		$data = $this->session->userdata('company');
		$sql = "SELECT * FROM retail WHERE retail.company = ? AND retail.productType = 'service' ORDER BY productName asc";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function productQty($data1){
		$sql = "SELECT retail.productQty FROM retail WHERE retail.productName = ?";
		$query = $this->db->query($sql, $data1);
		return $query->result();
	}
}
?>