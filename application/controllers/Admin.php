<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata('nama') == ''){
			$alert=$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url());
		}else{
			if($this->session->userdata('tipe_user') != 'admin'){
				redirect(base_url().'index.php/client');
			}
		}
	}

	public function index(){
		$this->load->view('fragments/layout', ['content' => 'admin/home']);
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/welcome?pesan=logout');
	}
}
?>
