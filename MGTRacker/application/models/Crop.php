<?php
class Crop extends CI_Model{
	public function crops_pull_germ(){
		$query = $this->db->query("SELECT * from crops WHERE crops.dateLight IS NULL");
		return $query->result();	
	}
	public function updateLight($data1, $data){
		$this->db->where('flatNumber', $data1);
		$this->db->update('crops', $data);
	}
	public function crops_pull_grow(){
		$query = $this->db->query("SELECT * from crops WHERE crops.dateLight IS NOT NULL and crops.dateEnd IS NULL");	
		return $query->result();
	}
	public function updateEnd($data1, $data){
		$this->db->where('flatNumber', $data1);
		$this->db->update('crops', $data);
	}
	public function crops_pull_harvest(){
		$query = $this->db->query("SELECT * from crops WHERE crops.dateLight IS NOT NULL and crops.dateEnd IS NOT NULL");
		return $query->result();	
	}
	public function crops_pull_germ_count(){
		$query = $this->db->query("SELECT COUNT(crops.flatNumber) AS germCrops from crops WHERE crops.dateLight IS NULL");
		return $query->result();	
	}
	public function crops_pull_grow_count(){
		$query = $this->db->query("SELECT *, COUNT(crops.flatNumber) AS growCrops from crops WHERE crops.dateLight IS NOT NULL and crops.dateEnd IS NULL");	
		return $query->result();
	}
	public function location(){
		$query = $this->db->query('SELECT crops.location from crops GROUP BY crops.location');
		return $query->result();
	}
	public function nutrientsLocation(){
		$query = $this->db->query('SELECT nutrientuse.location from nutrientuse GROUP BY nutrientuse.location');
		return $query->result();
	}

}