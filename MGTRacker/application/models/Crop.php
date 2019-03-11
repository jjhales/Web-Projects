<?php
class Crop extends CI_Model{
	public function crops_pull_germ(){
		$data = $this->session->userdata('company');
		$sql = "SELECT * from crops WHERE crops.dateLight IS NULL and crops.company = ?";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function updateLight($data1, $data){
		$this->db->where('flatNumber', $data1);
		$this->db->update('crops', $data);
	}
	public function crops_pull_grow(){
		$data = $this->session->userdata('company');
		$sql = "SELECT * from crops WHERE crops.dateLight IS NOT NULL and crops.dateEnd IS NULL and crops.company = ?";
		$query = $this->db->query($sql, $data);	
		return $query->result();
	}
	public function plants_pull_grow(){
		$data = $this->session->userdata('company');
		$sql = "SELECT * from plantcrops WHERE plantcrops.dateStart IS NOT NULL and plantcrops.dateEnd IS NULL and plantcrops.company = ?";
		$query = $this->db->query($sql, $data);	
		return $query->result();
	}

	public function updateEnd($data1, $data){
		$this->db->where('flatNumber', $data1);
		$this->db->update('crops', $data);
	}
	public function updatePlantEnd($data1, $data){
		$this->db->where('plantNumber', $data1);
		$this->db->update('plantcrops', $data);
	}
	public function crops_pull_harvest(){
		$data = $this->session->userdata('company');
		$sql = "SELECT * from crops WHERE crops.dateLight IS NOT NULL and crops.dateEnd IS NOT NULL and crops.company = ?";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function crops_pull_germ_count(){
		$data = $this->session->userdata('company');
		$sql ="SELECT COUNT(crops.flatNumber) AS germCrops from crops WHERE crops.dateLight IS NULL and crops.company = ?";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function crops_pull_grow_count(){
		$data = $this->session->userdata('company');
		$sql = "SELECT *, COUNT(crops.flatNumber) AS growCrops from crops WHERE crops.dateLight IS NOT NULL and crops.dateEnd IS NULL and crops.company = ?";	
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function crops_pull_Plantgrow_count(){
		$data = $this->session->userdata('company');
		$sql = "SELECT *, COUNT(plantcrops.plantNumber) AS growPlantCrops from plantcrops WHERE plantcrops.dateStart IS NOT NULL and plantcrops.dateEnd IS NULL and plantcrops.company = ?";	
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function location(){
		$data = $this->session->userdata('company');
		$sql = "SELECT crops.location from crops WHERE crops.company = ? GROUP BY crops.location";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function nutrientsLocation(){
		$data = $this->session->userdata('company');
		$sql = "SELECT nutrientuse.location from nutrientuse WHERE nutrientuse.company = ? GROUP BY nutrientuse.location";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}

}