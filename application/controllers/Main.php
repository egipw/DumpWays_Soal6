<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_main');	
	}

	function mobil() {
		$data['items']= $this->m_main->ambil_data_mobil();
		$data['isi'] = 'mobil/index';
		$data['js'] = 'mobil/index_js';
		$this->load->view('template/template', $data);
	}

	function tambah_mobil() {
		$data['isi'] = 'mobil/tambah';
		$data['js']  = 'mobil/tambah_js';
		$this->load->view('template/template', $data);
	}

	function aksi_tambah_mobil(){
	
		$name = $this->input->post('name');
		$brand_id = $this->input->post('brand_id');
		$color = $this->input->post('color');
		$description = $this->input->post('description');
		$create_time = $this->input->post('create_time');
		$update_time = $this->input->post('update_time');
		$stock = $this->input->post('stock');


		$this->m_main->tambah_mobil($name, $brand_id, $color, $description, $create_time, $update_time, $stock);

		redirect(base_url('main/mobil'));
	}

	function ubah($id){
		$data['data']= $this->m_main->select_data_mobil($id);
		$data['isi'] = 'mobil/ubah';
		$data['js'] = 'mobil/ubah_js';
		$this->load->view('template/template', $data);
	}

	function detail($id){
		$data['data']= $this->m_main->select_data_mobil($id);
		$data['isi'] = 'mobil/detail';
		$data['js'] = 'mobil/detail_js';
		$this->load->view('template/template', $data);
	}

	function upload($id){
		$data['data']= $this->m_main->select_data_mobil($id);
		$data['isi'] = 'mobil/upload';
		$data['js'] = 'mobil/upload';
		$this->load->view('template/template', $data);
	}

	function aksi_upload(){
		$fav = $_FILES['foto'];
		if ($fav['size'] != 0) {
			move_uploaded_file($fav['tmp_name'], 'uploads/carsimage/temp/' . $this->input->post('id'));
			$image = new \Gumlet\ImageResize('uploads/carsimage/temp/' . $this->input->post('id'));
			$image->save('uploads/carsimage/' . $this->input->post('id'));
			unlink('uploads/carsimage/' . $this->input->post('id'));
		}
		redirect(base_url('main/mobil'));	
	}

	function aksi_ubah(){
		$id = $this->input->post('id');
		$stock = $this->input->post('stock');
		$this->m_main->ubah_mobil($stock, $id);
		redirect(base_url('main/mobil'));	
	}

	function brand() {
		$data['items']= $this->m_main->ambil_data_brand();
		$data['isi'] = 'brand/index';
		$data['js'] = 'brand/index_js';
		$this->load->view('template/template', $data);
	}

	function tambah_brand() {
		$data['isi'] = 'brand/tambah';
		$data['js']  = 'brand/tambah_js';
		$this->load->view('template/template', $data);
	}

	function aksi_tambah_brand(){
	
		$name = $this->input->post('name');


		$this->m_main->tambah_brand($name);

		redirect(base_url('main/brand'));
	}

	function costumer() {
		$data['items']= $this->m_main->ambil_data_costumer();
		$data['isi'] = 'costumer/index';
		$data['js'] = 'costumer/index_js';
		$this->load->view('template/template', $data);
	}

	function tambah_costumer() {
		$data['isi'] = 'costumer/tambah';
		$data['js']  = 'costumer/tambah_js';
		$this->load->view('template/template', $data);
	}

	function aksi_tambah_costumer(){
	
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$address = $this->input->post('address');


		$this->m_main->tambah_costumer($name,$email,$address);

		redirect(base_url('main/costumer'));
	}


}