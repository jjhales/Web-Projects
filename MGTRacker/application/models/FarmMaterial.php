<?php
class FarmMaterial extends CI_Model{
	
	public function seedList(){
		$data = $this->session->userdata('company');
		$sql = "SELECT seed.seedName FROM seed WHERE seed.company = ? GROUP BY seedName ORDER BY seedName asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function seedVendor(){
		$data = $this->session->userdata('company');
		$sql = "SELECT seed.seedVendor FROM seed WHERE seed.company = ? GROUP BY seedVendor ORDER BY seedVendor asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function seedManufacturer(){
		$data = $this->session->userdata('company');
		$sql = "SELECT seed.seedManufacturer FROM seed WHERE seed.company = ? GROUP BY seedManufacturer ORDER BY seedManufacturer asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function plantList(){
		$data = $this->session->userdata('company');
		$sql = "SELECT plant.plantName FROM plant WHERE plant.company = ? GROUP BY plantName ORDER BY plantName asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function plantVendor(){
		$data = $this->session->userdata('company');
		$sql = "SELECT plant.plantVendor FROM plant WHERE plant.company = ? GROUP BY plantVendor ORDER BY plantVendor asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function plantManufacturer(){
		$data = $this->session->userdata('company');
		$sql = "SELECT plant.plantManufacturer FROM plant WHERE plant.company = ? GROUP BY plantManufacturer ORDER BY plantManufacturer asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function mediumName(){
		$data = $this->session->userdata('company');
		$sql = "SELECT medium.mediumName FROM medium WHERE medium.company = ? GROUP BY mediumName ORDER BY mediumName asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function mediumVendor(){
		$data = $this->session->userdata('company');
		$sql = "SELECT medium.mediumVendor FROM medium WHERE medium.company = ? GROUP BY mediumVendor ORDER BY mediumVendor asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function mediumManufacturer(){
		$data = $this->session->userdata('company');
		$sql = "SELECT medium.mediumManufacturer FROM medium WHERE medium.company = ? GROUP BY mediumManufacturer ORDER BY mediumManufacturer asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function mediumMaterial(){
		$data = $this->session->userdata('company');
		$sql = "SELECT medium.mediumMaterial FROM medium WHERE medium.company = ? GROUP BY mediumMaterial ORDER BY mediumMaterial asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function equipmentName(){
		$data = $this->session->userdata('company');
		$sql = "SELECT equipment.equipmentName FROM equipment WHERE equipment.company = ? GROUP BY equipmentName ORDER BY equipmentName asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function equipmentType(){
		$data = $this->session->userdata('company');
		$sql = "SELECT equipment.equipmentType FROM equipment WHERE equipment.company = ? GROUP BY equipmentType ORDER BY equipmentType asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function equipmentVendor(){
		$data = $this->session->userdata('company');
		$sql = "SELECT equipment.equipmentVendor FROM equipment WHERE equipment.company = ? GROUP BY equipmentVendor ORDER BY equipmentVendor asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function equipmentManufacturer(){
		$data = $this->session->userdata('company');
		$sql = "SELECT equipment.equipmentManufacturer FROM equipment WHERE equipment.company = ? GROUP BY equipmentManufacturer ORDER BY equipmentManufacturer asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function nutrientName(){
		$data = $this->session->userdata('company');
		$sql = "SELECT nutrients.nutrientName FROM nutrients WHERE nutrients.company = ? GROUP BY nutrientName ORDER BY nutrientName asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function nutrientVendor(){
		$data = $this->session->userdata('company');
		$sql = "SELECT nutrients.nutrientVendor FROM nutrients WHERE nutrients.company = ? GROUP BY nutrientVendor ORDER BY nutrientVendor asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}
	public function nutrientManufacturer(){
		$data = $this->session->userdata('company');
		$sql = "SELECT nutrients.nutrientManufacturer FROM nutrients WHERE nutrients.company = ? GROUP BY nutrientManufacturer ORDER BY nutrientManufacturer asc";
		$query = $this->db->query($sql, $data);
		return $query->result();	
	}

}

