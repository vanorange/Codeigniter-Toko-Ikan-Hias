<?php 

class Model_kategori extends CI_Model{

	public function data_ikan(){
		return $this->db->get_where("ikan", array('kategori' => 'ikan'));
	}

	public function data_peripheral(){
		return $this->db->get_where("ikan", array('kategori' => 'peripheral'));
	}

	public function data_aquarium(){
		return $this->db->get_where("ikan", array('kategori' => 'aquarium'));
	}
}

 ?>