<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata == null){
			$alert=$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url());
		}else{
			if($this->session->userdata('tipe_user') != 'client'){
				redirect(base_url().'index.php/admin');
			}
		}
	}

	public function index(){
		$this->load->view('fragments/layout', ['content' => 'client/home']);
	}

	public function request_barang(){
		$data['tab'] = "request_barang"; 
		$this->load->view('client/header',$data);
		$this->load->view('client/request_barang');
		$this->load->view('client/footer');	
	}

	public function request_form(){
		$data['tab'] = "request_barang"; 
		$this->load->view('client/header',$data);
		$this->load->view('client/request_form');
		$this->load->view('client/footer');	
	}

	public function pengiriman(){
		$data['tab'] = "pengiriman"; 
		$this->load->view('client/header',$data);
		$this->load->view('client/pengiriman');
		$this->load->view('client/footer');	
	}

	public function shop(){
		$this->load->view('client/shop');	
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/welcome?pesan=logout');
	}
}
?>
