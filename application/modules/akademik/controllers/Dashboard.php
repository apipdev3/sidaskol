<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/akademik/controllers/Dashboard.php */