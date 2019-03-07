<?php
class Dashboard extends CI_Model{
	public function harvestInventory(){
		$query = $this->db->query("SELECT * FROM crops WHERE crops.yieldWeight IS NOT NULL");
		return $query->result();
	}
	public function avgHarvestInventory(){
		$query = $this->db->query("SELECT crops.seedName, AVG(crops.seedUsed) AS avgSeedUsed, crops.seedManufacturer, crops.mediumName, SUM(crops.mediumUsed) AS totalMediumUsed, crops.mediumManufacturer, crops.mediumMaterial, AVG(crops.yieldWeight) AS avgYieldWeight, crops.testing, AVG(crops.cropRating) AS avgCropRating FROM crops WHERE crops.yieldWeight IS NOT NULL GROUP BY crops.seedName, crops.seedManufacturer, crops.mediumName, crops.mediumManufacturer, crops.mediumMaterial, crops.testing");
		return $query->result();
	}
	public function seedPurchasedInventory(){
		$query = $this->db->query("SELECT seed.seedName, seed.seedManufacturer, SUM(seed.seedAmount) AS seedInputTotal, AVG(seed.seedPrice) AS avgSeedPrice FROM seed GROUP BY seed.seedName, seed.seedManufacturer");
		return $query->result();
	}
	public function seedUsedInventory(){
		$query = $this->db->query("SELECT crops.seedName, crops.seedManufacturer, SUM(crops.seedUsed) AS seedUsedTotal FROM crops GROUP BY crops.seedName, crops.seedManufacturer");
		return $query->result();
	}
	public function unusedSeed(){
		$query = $this->db->query("SELECT seed.seedName, seed.seedManufacturer, SUM(seed.seedAmount) AS seedInputTotal, AVG(seed.seedPrice) AS avgSeedPrice, crops.seedUsed FROM seed LEFT JOIN crops ON seed.seedName = crops.seedName AND seed.seedManufacturer = crops.seedManufacturer WHERE crops.seedUsed IS NULL GROUP BY seed.seedName, seed.seedManufacturer");
		return $query->result();
	}
	public function mediumPurchasedInventory(){
		$query = $this->db->query("SELECT medium.mediumName, medium.mediumManufacturer, medium.mediumMaterial, SUM(medium.mediumAmount) AS mediumInputTotal, AVG(medium.mediumCost) AS avgMediumCost FROM medium GROUP BY medium.mediumName, medium.mediumManufacturer, medium.mediumMaterial");
	return $query->result();
	}
	public function mediumUsedInventory(){
		$query = $this->db->query("SELECT crops.mediumName, crops.mediumManufacturer, crops.mediumMaterial, SUM(crops.mediumUsed) AS mediumUsedTotal FROM crops GROUP BY crops.mediumName, crops.mediumManufacturer, crops.mediumMaterial");
		return $query->result();
	}
	public function unusedMedium(){
		$query = $this->db->query("SELECT medium.mediumName, medium.mediumManufacturer, medium.mediumMaterial, SUM(medium.mediumAmount) AS mediumInputTotal, AVG(medium.mediumCost) AS avgMediumCost, crops.mediumUsed FROM medium LEFT JOIN crops ON medium.mediumName = crops.mediumName AND medium.mediumManufacturer = crops.mediumManufacturer AND medium.mediumMaterial = crops.mediumMaterial WHERE crops.mediumUsed IS NULL GROUP BY medium.mediumName, medium.mediumManufacturer");
		return $query->result();
	}
	public function equipmentPurchaseInventory(){
		$query = $this->db->query('SELECT equipment.equipmentName, equipment.equipmentType, equipment.equipmentVendor, equipment.equipmentManufacturer, SUM(equipment.equipmentPrice) AS ePrice, SUM(equipment.equipmentAmount) AS eAmount FROM equipment GROUP BY equipment.equipmentName, equipment.equipmentVendor, equipment.equipmentManufacturer');
		return $query->result();
	} 
	public function nutrientPurchasedInventory(){
		$query = $this->db->query("SELECT nutrients.nutrientName, nutrients.nutrientManufacturer, SUM(nutrients.nutrientSize) AS nutrientInputTotal, AVG(nutrients.nutrientPrice) AS avgNutrientCost FROM nutrients GROUP BY nutrients.nutrientName, nutrients.nutrientManufacturer");
	return $query->result();
	}
	public function nutrientUsedInventory(){
		$query = $this->db->query("SELECT nutrientuse.nutrientName, nutrientuse.nutrientManufacturer, SUM(nutrientuse.nutrientAmount) AS nutrientUsedTotal FROM nutrientuse GROUP BY nutrientuse.nutrientName, nutrientuse.nutrientManufacturer");
		return $query->result();
	}
	public function unusedNutrient(){
		$query = $this->db->query("SELECT nutrients.nutrientName, nutrients.nutrientManufacturer, SUM(nutrients.nutrientSize) AS nutrientInputTotal, AVG(nutrients.nutrientPrice) AS avgnutrientCost, nutrientuse.nutrientAmount FROM nutrients LEFT JOIN nutrientuse ON nutrients.nutrientName = nutrientuse.nutrientName AND nutrients.nutrientManufacturer = nutrientuse.nutrientManufacturer WHERE nutrientuse.nutrientAmount IS NULL GROUP BY nutrients.nutrientName, nutrients.nutrientManufacturer");
		return $query->result();
	}
}