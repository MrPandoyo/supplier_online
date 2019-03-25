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

	public function shop(){
		$data['tab'] = "shop";
		$this->load->view('client/shop');	
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/welcome?pesan=logout');
	}
}
?>
