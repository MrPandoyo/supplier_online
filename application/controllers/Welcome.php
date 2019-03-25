<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		if(isset($this->session->userdata['status']) && $this->session->userdata['status'] == 'login'){
			if($this->session->userdata('tipe_user') == 'admin'){
				redirect(base_url().'index.php/admin');
			}else{
				redirect(base_url().'index.php/client');
			}
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
					$session = array('id' => $d->id, 'nama' => $d->nama, 'email'=>$d->username ,'tipe_user'=>$d->tipe_user, 'status' => 'login', 'foto'=>$d->foto);
					$this->session->set_userdata($session);
					if($d->tipe_user == 'admin'){
						redirect(base_url().'index.php/admin');
					}else{
						redirect(base_url().'index.php/client');
					}
				}else{
					$this->session->set_flashdata('alert','Login gagal! Username atau Password salah.');
					redirect(base_url().'index.php/welcome?pesan=gagal');
				}
			}else{
					$this->load->view('login');
					$this->session->set_flashdata('alert','Anda Belum Mengisi Username atau Password.');
			}
	}

	function home(){
		if(isset($this->session->userdata['status']) && $this->session->userdata['status'] == 'login'){
			if($this->session->userdata('tipe_user') == 'admin'){
				redirect(base_url().'index.php/admin');
			}else{
				redirect(base_url().'index.php/client');
			}
		}else{
			$this->load->view('login');
		}
	}

	function daftar(){
		if(isset($this->session->userdata['status']) && $this->session->userdata['status'] == 'login'){
			if($this->session->userdata('tipe_user') == 'admin'){
				redirect(base_url().'index.php/admin');
			}else{
				redirect(base_url().'index.php/client');
			}
		}else{
			$this->load->view('form_daftar');
		}
	}

	function register(){
		$namaToko = $this->input->post('namaToko');
		$namaPemilik = $this->input->post('namaPemilik');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');

		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('passconf','Password Confirmation','trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.username]', array('is_unique' => 'Email '.$email.' sudah dipakai.'));

		if($this->form_validation->run() != false){
			$user = array(
				'username' => $email,
				'nama' => $namaToko,
				'password' => md5($password),
				'tipe_user' => 'client'
			);
			$idUser = $this->m_supplier->saveData($user,'user');

			$client = array(
				'nama_toko' => $namaToko,
				'nama_pemilik' => $namaPemilik,
				'alamat' => $alamat,
				'phone' => $phone,
				'email' => $email,
				'join_date' => date('Y-m-d H:i:s'),
				'verified' => false,
				'id_user' => $idUser
			);
			$this->m_supplier->saveData($client,'client');

			$this->session->set_flashdata('daftar_sukses','Akun anda telah sukses dibuat.');
			$this->login();
		}else{
			$this->load->view('form_daftar');
		}
	}

}
?>
