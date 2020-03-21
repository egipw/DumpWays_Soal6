<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_main');	
	}

	function index() {
		$data['items']= $this->m_main->ambil_data_mobil();
		$data['isi'] = 'admin/member/index';
		$data['js'] = 'admin/member/index_js';
		$this->load->view('template/template', $data);
	}


}