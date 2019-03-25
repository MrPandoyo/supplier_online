<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Category extends CI_Controller {

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
		$data['page_title'] = "Master Category";
		$data['page_tab'] = "Master";
		$data['page_level1'] = "Category";
		$data['customCss'] = "admin/master_category/css";
		$data['customJavascript'] = "admin/master_category/javascript";
		$data['content'] = "admin/master_category/list";
		$data['datas'] = $this->m_supplier->getAllData('category');

		$this->load->view('fragments/layout', $data);
	}

	public function form(){
		$data['page_title'] = "Master Category";
		$data['page_tab'] = "Master";
		$data['page_level1'] = "Category";
		$data['content'] = "admin/master_category/form";
		if (isset($_GET['id']) && $_GET['id'] != ''){
			$where = array('id' => $_GET['id']);
			$data['kategori'] = $this->m_supplier->getData('category',$where)->result();
		}
		$this->load->view('fragments/layout', $data);
	}

	public function save(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');

		$this->form_validation->set_rules('kode', 'Kode', 'required|is_unique[category.kode]', array('is_unique' => 'Kode '.$kode.' sudah dipakai.'));

		if($this->form_validation->run() != false){

			$category = array(
				'id' => $id,
				'kode' => $kode,
				'nama' => $nama
			);
			if($id != ''){
				$this->m_supplier->updateData($category,'category');
			}else{
				$id = $this->m_supplier->saveData($category,'category');
			}

			$this->session->set_flashdata('pesan_sukses','Category '.$nama.' telah disimpan.');
			redirect(base_url().'index.php/master_category?id='.$id);
		}else{
			$this->form();
		}
	}

	public function delete(){

		if (isset($_GET['id']) && $_GET['id'] != ''){
			try{
				$this->m_supplier->deleteData($_GET['id'],'category');
				$this->session->set_flashdata('pesan_sukses',"Client telah dihapus");
			}catch (Exception $e){
				$this->session->set_flashdata('pesan_error',$e->getMessage());
			}
		}
		$this->index();
	}

}
?>
