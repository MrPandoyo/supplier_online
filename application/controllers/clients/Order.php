<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// cek login
		if ($this->session->userdata == null) {
			$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url());
		} else {
			if ($this->session->userdata('tipe_user') != 'client') {
				redirect(base_url() . 'index.php/admin');
			}
		}
	}

	public function index()
	{
		$data['page_title'] = "Order";
		$data['page_tab'] = "Order";
		$data['content'] = "client/order";

		$id_user = $this->session->userdata('id');
		$w = array('id_user' => $id_user);
		$client = $this->m_supplier->getData('client',$w)->result();

		$where = array('id_client' => $client[0]->id, 'status' => 'cart');
		$cart = $this->m_supplier->getData('transaksi',$where)->result();

		if($cart != null){
			$w2 = array('id_transaksi' => $cart[0]->id);
			$details = $this->m_supplier->getData('transaksi_detail',$w2)->result();

//			log_message('info', 'details = '.print_r($details));
			$data['details'] = $details;
			$data['totals'] = $this->m_supplier->hitungTotal($details);
		}
		$data['cart'] = $cart;

		$this->load->view('fragments/layout', $data);
	}

	public function proses_order(){
		$id_trx = $this->input->post('id');
		$totals = $this->input->post('totals');

		$where = array('id_transaksi' => $id_trx);
		$details = $this->m_supplier->getData('transaksi_detail',$where)->result();
		foreach ($details as $d){
			$jml = $this->input->post($d->id);
			if($jml != null || $jml != ''){
				$trx_detail = array(
					'id' => $d->id,
					'jumlah' => $jml
				);
				$this->m_supplier->updateData($trx_detail,'transaksi_detail');
			}
			$p = $this->m_supplier->getData('product',array('id'=>$d->id_product))->result();
			$stock = $p[0]->stock - $jml;
			$this->m_supplier->updateData(array('id'=>$d->id_product,'stock'=>$stock),'product');
		}
		$trx_array = array(
			'id' => $id_trx,
			'total_harga' => $totals,
			'status' => 'pending'
		);
		$this->m_supplier->updateData($trx_array,'transaksi');
		redirect(base_url() . 'index.php/daftar_transaksi');
	}

	public function hapus_item(){

		if (isset($_GET['id']) && $_GET['id'] != ''){
			$this->m_supplier->deleteData($_GET['id'],'transaksi_detail');
		}else{
			redirect(base_url());
		}

		redirect(base_url().'index.php/order');
	}
}
?>
