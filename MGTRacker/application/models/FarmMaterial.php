<?php
class FarmMaterial extends CI_Model{
	
	public function seedList(){
		$query = $this->db->query("SELECT seed.seedName FROM seed GROUP BY seedName ORDER BY seedName asc");
		return $query->result();	
	}
	public function seedVendor(){
		$query = $this->db->query("SELECT seed.seedVendor FROM seed GROUP BY seedVendor ORDER BY seedVendor asc");
		return $query->result();	
	}
	public function seedManufacturer(){
		$query = $this->db->query("SELECT seed.seedManufacturer FROM seed GROUP BY seedManufacturer ORDER BY seedManufacturer asc");
		return $query->result();	
	}
	public function mediumName(){
		$query = $this->db->query("SELECT medium.mediumName FROM medium GROUP BY mediumName ORDER BY mediumName asc");
		return $query->result();	
	}
	public function mediumVendor(){
		$query = $this->db->query("SELECT medium.mediumVendor FROM medium GROUP BY mediumVendor ORDER BY mediumVendor asc");
		return $query->result();	
	}
	public function mediumManufacturer(){
		$query = $this->db->query("SELECT medium.mediumManufacturer FROM medium GROUP BY mediumManufacturer ORDER BY mediumManufacturer asc");
		return $query->result();	
	}
	public function mediumMaterial(){
		$query = $this->db->query("SELECT medium.mediumMaterial FROM medium GROUP BY mediumMaterial ORDER BY mediumMaterial asc");
		return $query->result();	
	}
	public function equipmentName(){
		$query = $this->db->query("SELECT equipment.equipmentName FROM equipment GROUP BY equipmentName ORDER BY equipmentName asc");
		return $query->result();	
	}
	public function equipmentType(){
		$query = $this->db->query("SELECT equipment.equipmentType FROM equipment GROUP BY equipmentType ORDER BY equipmentType asc");
		return $query->result();	
	}
	public function equipmentVendor(){
		$query = $this->db->query("SELECT equipment.equipmentVendor FROM equipment GROUP BY equipmentVendor ORDER BY equipmentVendor asc");
		return $query->result();	
	}
	public function equipmentManufacturer(){
		$query = $this->db->query("SELECT equipment.equipmentManufacturer FROM equipment GROUP BY equipmentManufacturer ORDER BY equipmentManufacturer asc");
		return $query->result();	
	}
	public function nutrientName(){
		$query = $this->db->query("SELECT nutrients.nutrientName FROM nutrients GROUP BY nutrientName ORDER BY nutrientName asc");
		return $query->result();	
	}
	public function nutrientVendor(){
		$query = $this->db->query("SELECT nutrients.nutrientVendor FROM nutrients GROUP BY nutrientVendor ORDER BY nutrientVendor asc");
		return $query->result();	
	}
	public function nutrientManufacturer(){
		$query = $this->db->query("SELECT nutrients.nutrientManufacturer FROM nutrients GROUP BY nutrientManufacturer ORDER BY nutrientManufacturer asc");
		return $query->result();	
	}

}

