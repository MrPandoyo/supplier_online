<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class M_supplier extends CI_Model{
	function getData($table,$where){
		return $this->db->get_where($table,$where);
	}

	function getAllData($table){
		return $this->db->get_where($table);
	}

	function saveData($data,$table){
		$this->db->set($data);
		$this->db->insert($table);
   		return $this->db->insert_id();
	}

	function updateData($data,$table){
		$this->db->set($data);
		$this->db->where('id',$data['id']);
		return $this->db->update($table);
	}

	function deleteData($id,$table){
		$this->db->where('id',$id);
		return $this->db->delete($table);
	}

}
?>
