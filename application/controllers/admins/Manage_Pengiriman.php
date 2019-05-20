<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_Pengiriman extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// cek login
		if ($this->session->userdata == null) {
			$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url());
		}
	}

	public function index(){
		if ($this->session->userdata('tipe_user') != 'admin') {
			redirect(base_url() . 'index.php/admin');
		}

		$data['page_title'] = "Daftar Pengiriman Barang";
		$data['page_tab'] = "Manage_Pengiriman";
		$data['sub_tab'] = "ready";
		$data['content'] = "admin/manage_pengiriman";

		$w = array('status' => 'diproses');
		$data['datas'] = $this->m_supplier->getData('transaksi', $w, 'waktu_dibuat', 'desc');
		$data['kurirs'] = $this->m_supplier->getAllData('kurir');
		$this->load->view('fragments/layout', $data);
	}

	public function prosesPengiriman(){
		if ($this->session->userdata('tipe_user') != 'admin') {
			redirect(base_url() . 'index.php/admin');
		}

		$kurir = $this->input->post('kurir');
		$transaksi = $this->input->post('transaksi');

		$pengiriman = array(
			'id_kurir'=>$kurir,
			'id_transaksi'=> $transaksi,
			'waktu_berangkat' => date('Y-m-d H:i:s')
		);
		$this->m_supplier->saveData($pengiriman,'pengiriman');
		$this->m_supplier->updateData(array('id' => $transaksi, 'status'=>'enroute'),'transaksi');
		$this->session->set_flashdata('pesan_sukses','Order dengan transaksi id '.$_GET['id'].' telah dikirim.');
		redirect(base_url().'index.php/manage_pengiriman/enroute');
	}

	public function enroute(){
		if ($this->session->userdata('tipe_user') != 'admin') {
			redirect(base_url() . 'index.php/admin');
		}

		$data['page_title'] = "Daftar Pengiriman Barang";
		$data['page_tab'] = "Manage_Pengiriman";
		$data['sub_tab'] = "enroute";
		$data['content'] = "admin/pengiriman_enroute";

		$w = array('waktu_sampai' => null);
		$data['datas'] = $this->m_supplier->getData('pengiriman', $w, 'waktu_berangkat', 'asc');
		$this->load->view('fragments/layout', $data);
	}

	public function selesaiKirim(){
		if(isset($_GET['id']) && $_GET['id'] != ''){
			$pengiriman = $this->m_supplier->getData('pengiriman',array('id_transaksi' => $_GET['id']));
			$this->m_supplier->updateData(array('id' => $pengiriman->result()[0]->id, 'waktu_sampai'=>date('Y-m-d H:i:s')),'pengiriman');
			$this->m_supplier->updateData(array('id' => $_GET['id'], 'status'=>'complete'),'transaksi');

		}else{
			redirect(base_url());
		}
		if ($this->session->userdata('tipe_user') == 'admin') {
			redirect(base_url() . 'index.php/laporan_transaksi');
		}else{
			redirect(base_url() . 'index.php/daftar_transaksi/selesai');
		}
	}


}
