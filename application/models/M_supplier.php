<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class M_supplier extends CI_Model{
	function get_data_detail($where,$table){
		return $this->db->get_where($table,$where);
	}

	function saveData($data,$table){
		$this->db->set($data);
		$this->db->insert($table);
   		return $this->db->insert_id();
	}

}
?>
