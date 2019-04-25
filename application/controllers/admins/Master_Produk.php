<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Produk extends CI_Controller {

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
		$data['page_title'] = "Master Produk";
		$data['page_tab'] = "Master";
		$data['page_level1'] = "Produk";
		$data['customCss'] = "helper/table_css";
		$data['customJavascript'] = "helper/table_javascript";
		$data['content'] = "admin/master_produk/list";
		$data['datas'] = $this->m_supplier->getAllData('product');

		$this->load->view('fragments/layout', $data);
	}

	public function form(){
		$data['page_title'] = "Master Produk";
		$data['page_tab'] = "Master";
		$data['page_level1'] = "Produk";
		$data['content'] = "admin/master_produk/form";
		if (isset($_GET['id']) && $_GET['id'] != ''){
			$where = array('id' => $_GET['id']);
			$data['product'] = $this->m_supplier->getData('product',$where)->result();
		}
		$this->load->view('fragments/layout', $data);
	}

	public function save(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama_product = $this->input->post('nama_product');
		$stock = $this->input->post('stock');
		$harga = $this->input->post('harga');
		$description = $this->input->post('description');
		$foto=$this->input->post('foto_name');

//		valdiating
		if ($id != ''){
			$where = array('kode' => $kode);
			$duplicate = $this->m_supplier->getData('product',$where)->result();
			if($duplicate[0] != null){
				if($id != $duplicate[0]->id) {
					$this->form_validation->set_rules('kode', 'Kode', 'required|is_unique[product.kode]', array('is_unique' => 'Kode '.$kode.' sudah dipakai.'));
				}
			}
		}else{
			$this->form_validation->set_rules('kode', 'Kode', 'required|is_unique[product.kode]', array('is_unique' => 'Kode '.$kode.' sudah dipakai.'));
		}
		$this->form_validation->set_rules('nama_product', 'Nama Produk', 'required');

		if($this->form_validation->run()){

			$config = $this->m_supplier->uploadConfig('product');
			if (!empty($_FILES['foto']['name'])){
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto')) {
					$this->session->set_flashdata('pesan_error',$this->upload->display_errors());
					redirect(base_url().'index.php/master_produk/form?id='.$id);
				}else{
					$foto = $this->upload->data('file_name');
				}
			}

			$product = array(
				'id' => $id,
				'kode' => $kode,
				'nama_product' => $nama_product,
				'stock' => $stock,
				'harga' => $harga,
				'description' => $description,
				'foto' => $foto,
			);

			if($id != ''){
				$this->m_supplier->updateData($product,'product');
			}else{
				$this->m_supplier->saveData($product,'product');
			}

			$this->session->set_flashdata('pesan_sukses','Produk '.$nama_product.' telah disimpan.');
			redirect(base_url().'index.php/master_produk');
		}else{
			$this->session->set_flashdata('pesan_error',validation_errors());
			redirect(base_url().'index.php/master_produk/form?id='.$id);
		}
	}

	public function delete(){

		if (isset($_GET['id']) && $_GET['id'] != ''){
			try{
				$this->m_supplier->deleteData($_GET['id'],'product');
				$this->session->set_flashdata('pesan_sukses',"Client telah dihapus");
			}catch (Exception $e){
				$this->session->set_flashdata('pesan_error',$e->getMessage());
			}
		}
		$this->index();
	}

}
?>
