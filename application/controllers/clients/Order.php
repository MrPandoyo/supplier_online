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
			$data['details'] = $details;
		}
		$data['cart'] = $cart;

		$this->load->view('fragments/layout', $data);
	}
}
?>
