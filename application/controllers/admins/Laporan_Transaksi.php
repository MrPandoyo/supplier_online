<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Transaksi extends CI_Controller
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
		$data['page_title'] = "Laporan Transaksi";
		$data['page_tab'] = "Manage_Order";
		$data['content'] = "admin/laporan_transaksi";

		$w = array('status' => 'complete');
		$data['datas'] = $this->m_supplier->getData('transaksi', $w, 'waktu_dibuat', 'desc');
		$this->load->view('fragments/layout', $data);
	}

	public function printLaporan()
	{
		$w = array('status' => 'complete');
		$data['datas'] = $this->m_supplier->getData('transaksi', $w, 'waktu_dibuat', 'desc');
		$this->load->view('admin/print_laporan', $data);
	}


}
