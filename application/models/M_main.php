<?php
class M_main extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function ambil_data_mobil(){
		$sql = "SELECT * FROM cars ORDER BY id DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function tambah_mobil($name, $brand_id, $color, $description, $create_time, $update_time, $stock){
		$this->db->insert('cars', ['name' => $name,'brand_id' => $brand_id, 'color' => $color,'description' => $description, 'create_time' => $create_time, 'update_time' => $update_time, 'stock' => $stock]);
		return $this->db->insert_id();
	}

	function select_data_mobil($id){
		$sql = "SELECT * FROM cars WHERE id = ?";
		$query = $this->db->query($sql, array($id));
		$row = $query->row();
		return $row;
	}

	function ubah_mobil($stock, $id){
		$this->db->update('cars', ['stock' => $stock], ['id'=>$id]);
	}

	function ambil_data_brand(){
		$sql = "SELECT * FROM brand";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function tambah_brand($name){
		$this->db->insert('brand', ['name' => $name ]);
		return $this->db->insert_id();
	}

	function ambil_data_costumer(){
		$sql = "SELECT * FROM costumer";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function tambah_costumer($name, $email, $address){
		$this->db->insert('costumer', ['name' => $name, 'email' => $email, 'address' => $address ]);
		return $this->db->insert_id();
	}


	

}
?>