<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Transaksi extends CI_Controller {

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
		$data['page_title'] = "Daftar Transaksi Pending";
		$data['page_tab'] = "Daftar_Transaksi";
		$data['sub_tab'] = "Pending";
		$data['content'] = "client/daftar_transaksi";

		$w = array('status'=>'pending');
		$data['datas'] = $this->m_supplier->getData('transaksi',$w,'waktu_dibuat','desc');

		$this->load->view('fragments/layout', $data);
	}

	public function selesai(){
		$data['page_title'] = "Daftar Transaksi Selesai";
		$data['page_tab'] = "Daftar_Transaksi";
		$data['sub_tab'] = "Selesai";
		$data['content'] = "client/daftar_transaksi";

		$w = array('status'=>'complete');
		$data['datas'] = $this->m_supplier->getData('transaksi',$w,'waktu_dibuat','desc');

		$this->load->view('fragments/layout', $data);
	}

}
?>

