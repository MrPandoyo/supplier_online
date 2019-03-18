<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		if(isset($this->session->userdata['status']) && $this->session->userdata['status'] == 'login'){
			redirect(base_url().'index.php/admin');
		}else{
			$this->load->view('login');
		}
	}

	function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','password','trim|required');
			if($this->form_validation->run() != false){
				$where = array('username' => $username, 'password' => md5($password));
				
				$data = $this->m_supplier->get_data_detail($where, 'user');
				$d = $this->m_supplier->get_data_detail($where, 'user')->row();
				$cek = $data->num_rows();

				if($cek > 0){
					$session = array('id' => $d->id, 'nama' => $d->nama, 'email'=>$d->username ,'tipe_user'=>$d->tipe_user, 'status' => 'login');
					$this->session->set_userdata($session);
					if($d->tipe_user == 'admin'){
						redirect(base_url().'index.php/admin');
					}else{
						redirect(base_url().'index.php/client');
					}
				}else{
					$this->session->set_flashdata('alert','Login gagal! Username atau Password salah.');
					redirect(base_url().'welcome?pesan=gagal');
				}
			}else{
					$this->load->view('login');
					$this->session->set_flashdata('alert','Anda Belum Mengisi Username atau Password.');
			}
	}

	function daftar(){
		$this->load->view('form_daftar');
	}

}
?>
