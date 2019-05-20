<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class M_supplier extends CI_Model{

	function getData($table,$where,$sort = null,$direction = null){
		if($sort != null && $direction != null){
			return $this->db->get_where($table,$where);
		}else{
			$this->db->order_by($sort, $direction);
			return $this->db->get_where($table,$where);
		}
	}

	function getAllData($table){
		return $this->db->get_where($table);
	}

//	function getProductFromDetail($idTrx){
//		$this->db->from('product')
//			->join('transaksi_detail', 'product.id = transaksi_detail.id_product')
//			->where('transaksi_detail.id_transaksi',$idTrx);
//		return $this->db->get();
//	}

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

	function uploadConfig($destination){
		$config['upload_path']          = './images/'.$destination;
		$config['allowed_types']        = 'gif|jpg|png';
		return $config;
	}

	function hitungTotal($details){
		$total = 0;
		foreach ($details as $data){
			$w = array('id' => $data->id_product);
			$p = $this->m_supplier->getData('product', $w)->result()[0];
			$total = $total+$data->jumlah*$p->harga;
		}
		return $total;
	}

	function getPengirimanEnroute(){
		$idTrx = array();
		$pengiriman = $this->getData('pengiriman', array('waktu_sampai' => null), 'waktu_berangkat', 'asc');
		if($pengiriman != null){
			foreach ($pengiriman->result() as $p) {
				array_push($idTrx,$p->id_transaksi);
			}
		}

		if(!empty($idTrx)){
			$this->db->where_in('id', $idTrx);
			return $this->db->get('transaksi');
		}else{
			return null;
		}
	}

}
