<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_Order extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// cek login
		if ($this->session->userdata == null) {
			$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url());
		} else {
			if ($this->session->userdata('tipe_user') != 'admin') {
				redirect(base_url() . 'index.php/admin');
			}
		}
	}

	public function index()
	{
		$data['page_title'] = "Daftar Request Order";
		$data['page_tab'] = "Manage_Order";
		$data['content'] = "admin/manage_order";

		$w = array('status' => 'pending');
		$data['datas'] = $this->m_supplier->getData('transaksi', $w, 'waktu_dibuat', 'desc');
		$this->load->view('fragments/layout', $data);
	}

	public function prosesTransaksi(){

		if (isset($_GET['id']) && $_GET['id'] != ''){
			$this->m_supplier->updateData(array('id' => $_GET['id'], 'status'=>'diproses'),'transaksi');
		}else{
			redirect(base_url());
		}
		$this->session->set_flashdata('pesan_sukses','Order dengan transaksi id '.$_GET['id'].' telah diproses.');
		redirect(base_url().'index.php/manage_pengiriman');

	}


}
