<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Transaksi extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata == null){
			$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url());
		}
	}

	public function index(){
		$data['page_title'] = "Daftar Transaksi";
		$data['page_tab'] = "Daftar_Transaksi";
		$data['sub_tab'] = "Pending";
		$data['content'] = "client/daftar_transaksi";

		$id_user = $this->session->userdata('id');
		$w = array('id_user' => $id_user);
		$client = $this->m_supplier->getData('client',$w)->result();

		$w = array('status'=>'pending', 'id_client' => $client[0]->id);
		$data['datas'] = $this->m_supplier->getData('transaksi',$w,'waktu_dibuat','desc');

		$this->load->view('fragments/layout', $data);
	}

	public function proses(){
		$data['page_title'] = "Daftar Transaksi";
		$data['page_tab'] = "Daftar_Transaksi";
		$data['sub_tab'] = "Proses";
		$data['content'] = "client/daftar_transaksi";

		$id_user = $this->session->userdata('id');
		$w = array('id_user' => $id_user);
		$client = $this->m_supplier->getData('client',$w)->result();

		$w = array('status'=>'diproses', 'id_client' => $client[0]->id);
		$data['datas'] = $this->m_supplier->getData('transaksi',$w,'waktu_dibuat','desc');

		$this->load->view('fragments/layout', $data);
	}

	public function enroute(){
		$data['page_title'] = "Daftar Transaksi";
		$data['page_tab'] = "Daftar_Transaksi";
		$data['sub_tab'] = "Enroute";
		$data['content'] = "client/daftar_transaksi";

		$id_user = $this->session->userdata('id');
		$w = array('id_user' => $id_user);
		$client = $this->m_supplier->getData('client',$w)->result();

		$w = array('status'=>'enroute', 'id_client' => $client[0]->id);
		$data['datas'] = $this->m_supplier->getData('transaksi',$w,'waktu_dibuat','desc');

		$this->load->view('fragments/layout', $data);
	}

	public function selesai(){
		$data['page_title'] = "Daftar Transaksi";
		$data['page_tab'] = "Daftar_Transaksi";
		$data['sub_tab'] = "Selesai";
		$data['content'] = "client/daftar_transaksi";

		$id_user = $this->session->userdata('id');
		$w = array('id_user' => $id_user);
		$client = $this->m_supplier->getData('client',$w)->result();

		$w = array('status'=>'complete', 'id_client' => $client[0]->id);
		$data['datas'] = $this->m_supplier->getData('transaksi',$w,'waktu_dibuat','desc');

		$this->load->view('fragments/layout', $data);
	}

	public function detail(){
		$data['page_title'] = "Detail Transaksi";
		$data['page_tab'] = "Daftar_Transaksi";
		$data['content'] = "client/detail_transaksi";

		if (isset($_GET['id']) && $_GET['id'] != ''){
			$where = array('id' => $_GET['id']);
			$transaksi = $this->m_supplier->getData('transaksi',$where)->result();

			$w2 = array('id_transaksi' => $transaksi[0]->id);
			$details = $this->m_supplier->getData('transaksi_detail',$w2)->result();

			$data['transaksi'] = $transaksi;
			$data['details'] = $details;
			$data['totals'] = $this->m_supplier->hitungTotal($details);
		}else{
			redirect(base_url());
		}

		$this->load->view('fragments/layout', $data);
	}

	public function printTransaksi(){

		if (isset($_GET['id']) && $_GET['id'] != ''){
			$where = array('id' => $_GET['id']);
			$transaksi = $this->m_supplier->getData('transaksi',$where)->result();

			$w2 = array('id_transaksi' => $transaksi[0]->id);
			$details = $this->m_supplier->getData('transaksi_detail',$w2)->result();

			$data['transaksi'] = $transaksi;
			$data['details'] = $details;
			$data['totals'] = $this->m_supplier->hitungTotal($details);
		}else{
			redirect(base_url());
		}

		$this->load->view('client/print_transaksi', $data);
	}

}
?>

