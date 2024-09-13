<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('instansi/index');
		$this->load->view('template/footer');
	}

}

/* End of file Instansi.php */
/* Location: ./application/modules/akademik/controllers/Instansi.php */