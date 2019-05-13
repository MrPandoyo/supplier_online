<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Kurir extends CI_Controller {

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
		$data['page_title'] = "Master Kurir";
		$data['page_tab'] = "Master";
		$data['page_level1'] = "Kurir";
		$data['customCss'] = "helper/table_css";
		$data['customJavascript'] = "helper/table_javascript";
		$data['content'] = "admin/master_kurir/list";
		$data['datas'] = $this->m_supplier->getAllData('kurir');

		$this->load->view('fragments/layout', $data);
	}

	public function form(){
		$data['page_title'] = "Master Kurir";
		$data['page_tab'] = "Master";
		$data['page_level1'] = "Kurir";
		$data['content'] = "admin/master_kurir/form";
		if (isset($_GET['id']) && $_GET['id'] != ''){
			$where = array('id' => $_GET['id']);
			$data['kurir'] = $this->m_supplier->getData('kurir',$where)->result();
		}
		$this->load->view('fragments/layout', $data);
	}

	public function save(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$kode = $this->input->post('kode');

//		valdiating
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if($this->form_validation->run() != false){

			$kurir = array(
				'id' => $id,
				'nama' => $nama,
				'kode' => $kode,
			);
			if($id != ''){
				$this->m_supplier->updateData($kurir,'kurir');
			}else{
				$id = $this->m_supplier->saveData($kurir,'kurir');
			}

			$this->session->set_flashdata('pesan_sukses','Kurir '.$nama.' telah disimpan.');
			redirect(base_url().'index.php/master_kurir');
		}else{
			$this->session->set_flashdata('pesan_error',validation_errors());
			redirect(base_url().'index.php/master_kurir/form?id='.$id);
		}
	}

	public function delete(){

		if (isset($_GET['id']) && $_GET['id'] != ''){
			try{
				$this->m_supplier->deleteData($_GET['id'],'kurir');
				$this->session->set_flashdata('pesan_sukses',"Client telah dihapus");
			}catch (Exception $e){
				$this->session->set_flashdata('pesan_error',$e->getMessage());
			}
		}
		$this->index();
	}

}
?>
