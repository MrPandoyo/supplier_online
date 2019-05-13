<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata == null){
			$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url());
		}else{
			if($this->session->userdata('tipe_user') != 'client'){
				redirect(base_url().'index.php/admin');
			}
		}
	}

	public function index(){
		$data['page_title'] = "Beli Supply";
		$data['page_tab'] = "Katalog";
		$data['content'] = "client/katalog";
		$data['datas'] = $this->m_supplier->getAllData('product');

		$this->load->view('fragments/layout', $data);
	}

	public function detail(){
		$data['page_title'] = "Detail Product";
		$data['page_tab'] = "Katalog";
		$data['content'] = "client/detail_product";
		if (isset($_GET['id']) && $_GET['id'] != ''){
			$where = array('id' => $_GET['id']);
			$data['product'] = $this->m_supplier->getData('product',$where)->result();
		}else{
			redirect(base_url());
		}
		$this->load->view('fragments/layout', $data);
	}

	public function add_trx(){
		$product = $this->input->post('product');
		$jumlah = $this->input->post('jumlah');

		$id_user = $this->session->userdata('id');
//		log_message('info', 'id_user = '.$id_user);
		$w = array('id_user' => $id_user);
		$client = $this->m_supplier->getData('client',$w)->result();

//			check apakah ada transaksi status cart
		$where = array('id_client' => $client[0]->id, 'status' => 'cart');
		$cart = $this->m_supplier->getData('transaksi',$where)->result();
		if($cart != null){

//			check apakah product sudah dimasukan ke 'cart'
			$w2 = array('id_transaksi' => $cart[0]->id);
			$details = $this->m_supplier->getData('transaksi_detail',$w2)->result();
			foreach ($details as $d){
				if($d->id_product == $product)redirect(base_url().'index.php/order');
			}

			$id_trx = $cart[0]->id;
		}else{
			$trx = array(
				'id_client' => $client[0]->id,
				'status' => 'cart',
				'waktu_dibuat' => date('Y-m-d')
			);
			$id_trx = $this->m_supplier->saveData($trx,'transaksi');
		}
		$trx_detail = array(
			'id' => null,
			'id_product' => $product,
			'id_transaksi' => $id_trx,
			'jumlah' => $jumlah,
		);

		$this->m_supplier->saveData($trx_detail,'transaksi_detail');

		$this->session->set_flashdata('pesan_sukses','Order telah disimpan.');
		redirect(base_url().'index.php/order');
	}

}
?>

