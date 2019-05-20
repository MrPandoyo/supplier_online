<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_User_Admin extends CI_Controller {

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
		$data['page_title'] = "Master User Admin";
		$data['page_tab'] = "Master";
		$data['page_level1'] = "User Admin";
		$data['customCss'] = "helper/table_css";
		$data['customJavascript'] = "helper/table_javascript";
		$data['content'] = "admin/master_user_admin/list";
		$data['datas'] = $this->m_supplier->getData('user',array('tipe_user'=>'admin'));

		$this->load->view('fragments/layout', $data);
	}

	public function form(){
		$data['page_title'] = "Master User Admin";
		$data['page_tab'] = "Master";
		$data['page_level1'] = "User Admin";
		$data['content'] = "admin/master_user_admin/form";
		if (isset($_GET['id']) && $_GET['id'] != ''){
			$where = array('id' => $_GET['id']);
			$data['user'] = $this->m_supplier->getData('user',$where)->result();
		}
		$this->load->view('fragments/layout', $data);
	}

	public function save(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$foto = $this->input->post('foto_name');

//		valdiating
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if($this->form_validation->run() != false){

			$config = $this->m_supplier->uploadConfig('profile');
			if (!empty($_FILES['foto']['name'])){
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto')) {
					$this->session->set_flashdata('pesan_error',$this->upload->display_errors());
					redirect(base_url().'index.php/master_user_admin/form?id='.$id);
				}else{
					$foto = $this->upload->data('file_name');
				}
			}


			if($id != ''){
				$user = array(
					'id' => $id,
					'nama' => $nama,
					'username' => $username,
					'password' => md5($password),
					'foto' => $foto
				);
				$this->m_supplier->updateData($user,'user');
			}else{
				$user = array(
					'id' => $id,
					'nama' => $nama,
					'username' => $username,
					'password' => md5($password),
					'tipe_user' => 'admin',
					'join_date' => date('Y-m-d'),
					'foto' => $foto
				);
				$this->m_supplier->saveData($user,'user');
			}

			$this->session->set_flashdata('pesan_sukses','User '.$username.' telah disimpan.');
			redirect(base_url().'index.php/master_user_admin');
		}else{
			$this->session->set_flashdata('pesan_error',validation_errors());
			redirect(base_url().'index.php/master_user_admin/form?id='.$id);
		}
	}

	public function delete(){

		if (isset($_GET['id']) && $_GET['id'] != ''){
			try{
				$this->m_supplier->deleteData($_GET['id'],'user');
				$this->session->set_flashdata('pesan_sukses',"Client telah dihapus");
			}catch (Exception $e){
				$this->session->set_flashdata('pesan_error',$e->getMessage());
			}
		}
		$this->index();
	}

}
?>
