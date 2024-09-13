<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Pengguna_model','Pengguna');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Pengguna',
			'user' => $this->Pengguna->getPengguna()->result(),
		];
		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('pengguna/index',$data);
		$this->load->view('template/footer');
	}

}

/* End of file Pengguna.php */
/* Location: ./application/modules/akademik/controllers/Pengguna.php */