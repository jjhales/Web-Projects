<?php
class Dashboard extends CI_Model{
	public function harvestInventory(){
		$data = $this->session->userdata('company');
		$sql = "SELECT * FROM crops WHERE crops.yieldWeight IS NOT NULL AND crops.company = ?";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function avgHarvestInventory(){
		$data = $this->session->userdata('company');
		$sql = "SELECT crops.seedName, AVG(crops.seedUsed) AS avgSeedUsed, crops.seedManufacturer, crops.mediumName, SUM(crops.mediumUsed) AS totalMediumUsed, crops.mediumManufacturer, crops.mediumMaterial, AVG(crops.yieldWeight) AS avgYieldWeight, crops.testing, AVG(crops.cropRating) AS avgCropRating FROM crops WHERE crops.yieldWeight IS NOT NULL AND crops.company = ? GROUP BY crops.seedName, crops.seedManufacturer, crops.mediumName, crops.mediumManufacturer, crops.mediumMaterial, crops.testing";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function seedPurchasedInventory(){
		$data = $this->session->userdata('company');
		$sql = "SELECT seed.seedName, seed.seedManufacturer, SUM(seed.seedAmount) AS seedInputTotal, AVG(seed.seedPrice) AS avgSeedPrice FROM seed WHERE seed.company = ? GROUP BY seed.seedName, seed.seedManufacturer";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function seedUsedInventory(){
		$data = $this->session->userdata('company');
		$sql = "SELECT crops.seedName, crops.seedManufacturer, SUM(crops.seedUsed) AS seedUsedTotal FROM crops WHERE crops.company = ? GROUP BY crops.seedName, crops.seedManufacturer";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function unusedSeed(){
		$data = $this->session->userdata('company');
		$sql = "SELECT seed.seedName, seed.seedManufacturer, SUM(seed.seedAmount) AS seedInputTotal, AVG(seed.seedPrice) AS avgSeedPrice, crops.seedUsed FROM seed LEFT JOIN crops ON seed.seedName = crops.seedName AND seed.seedManufacturer = crops.seedManufacturer AND seed.company = crops.company WHERE crops.seedUsed IS NULL AND seed.company = ? GROUP BY seed.seedName, seed.seedManufacturer";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function mediumPurchasedInventory(){
		$data = $this->session->userdata('company');
		$sql = "SELECT medium.mediumName, medium.mediumManufacturer, medium.mediumMaterial, SUM(medium.mediumAmount) AS mediumInputTotal, AVG(medium.mediumCost) AS avgMediumCost FROM medium WHERE medium.company = ? GROUP BY medium.mediumName, medium.mediumManufacturer, medium.mediumMaterial";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function mediumUsedInventory(){
		$data = $this->session->userdata('company');
		$sql = "SELECT crops.mediumName, crops.mediumManufacturer, crops.mediumMaterial, SUM(crops.mediumUsed) AS mediumUsedTotal FROM crops WHERE crops.company = ? GROUP BY crops.mediumName, crops.mediumManufacturer, crops.mediumMaterial";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function unusedMedium(){
		$data = $this->session->userdata('company');
		$sql = "SELECT medium.mediumName, medium.mediumManufacturer, medium.mediumMaterial, SUM(medium.mediumAmount) AS mediumInputTotal, AVG(medium.mediumCost) AS avgMediumCost, crops.mediumUsed FROM medium LEFT JOIN crops ON medium.mediumName = crops.mediumName AND medium.mediumManufacturer = crops.mediumManufacturer AND medium.mediumMaterial = crops.mediumMaterial AND medium.company = crops.company WHERE crops.mediumUsed IS NULL AND medium.company = ? GROUP BY medium.mediumName, medium.mediumManufacturer";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function equipmentPurchaseInventory(){
		$data = $this->session->userdata('company');
		$sql = "SELECT equipment.equipmentName, equipment.equipmentType, equipment.equipmentVendor, equipment.equipmentManufacturer, SUM(equipment.equipmentPrice) AS ePrice, SUM(equipment.equipmentAmount) AS eAmount FROM equipment WHERE equipment.company = ? GROUP BY equipment.equipmentName, equipment.equipmentVendor, equipment.equipmentManufacturer";
		$query = $this->db->query($sql, $data);
		return $query->result();
	} 
	public function nutrientPurchasedInventory(){
		$data = $this->session->userdata('company');
		$sql = "SELECT nutrients.nutrientName, nutrients.nutrientManufacturer, SUM(nutrients.nutrientSize) AS nutrientInputTotal, AVG(nutrients.nutrientPrice) AS avgNutrientCost FROM nutrients WHERE nutrients.company = ? GROUP BY nutrients.nutrientName, nutrients.nutrientManufacturer";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function nutrientUsedInventory(){
		$data = $this->session->userdata('company');
		$sql = "SELECT nutrientuse.nutrientName, nutrientuse.nutrientManufacturer, SUM(nutrientuse.nutrientAmount) AS nutrientUsedTotal FROM nutrientuse WHERE nutrientuse.company = ? GROUP BY nutrientuse.nutrientName, nutrientuse.nutrientManufacturer";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
	public function unusedNutrient(){
		$data = $this->session->userdata('company');
		$sql = "SELECT nutrients.nutrientName, nutrients.nutrientManufacturer, SUM(nutrients.nutrientSize) AS nutrientInputTotal, AVG(nutrients.nutrientPrice) AS avgnutrientCost, nutrientuse.nutrientAmount FROM nutrients LEFT JOIN nutrientuse ON nutrients.nutrientName = nutrientuse.nutrientName AND nutrients.nutrientManufacturer = nutrientuse.nutrientManufacturer AND nutrients.company = nutrientuse.company WHERE nutrientuse.nutrientAmount IS NULL AND nutrients.company = ? GROUP BY nutrients.nutrientName, nutrients.nutrientManufacturer";
		$query = $this->db->query($sql, $data);
		return $query->result();
	}
}