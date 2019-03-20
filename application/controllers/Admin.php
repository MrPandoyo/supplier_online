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
		// $data['tab'] = "home"; 
		// $this->load->view('admin/header',$data);
		// $this->load->view('admin/home');
		// $this->load->view('admin/footer');	
		$this->load->view('fragments/layout', ['content' => 'admin/home']);
	}

	public function items(){
		$data['tab'] = "items"; 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/items');
		$this->load->view('admin/footer');	
	}

	public function tambah_items(){
		$data['tab'] = "items"; 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/tambah_items');
		$this->load->view('admin/footer');	
	}

	public function manage_request(){
		$data['tab'] = "request"; 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_request');
		$this->load->view('admin/footer');	
	}

	public function manage_pengiriman(){
		$data['tab'] = "pengiriman"; 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/pengiriman');
		$this->load->view('admin/footer');	
	}

	public function kirim_request(){
		$data['tab'] = "pengiriman"; 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/kirim_request');
		$this->load->view('admin/footer');	
	}

	public function manage_komplain(){
		$data['tab'] = "komplain"; 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/komplain');
		$this->load->view('admin/footer');	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/welcome?pesan=logout');
	}
}
?>
