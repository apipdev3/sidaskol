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

	public function addUser(){

		$data = [
			'title' => 'Tambah Pengguna',
			'level' => $this->Pengguna->getLevel()->result(),
		];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('pengguna/add',$data);
			$this->load->view('template/footer');
		}else{

			$nama 		= $this->input->post('nama',true);
			$email 		= $this->input->post('email',true);
			$password 	= $this->input->post('password',true);
			$level_id 	= $this->input->post('level_id',true);

			$data = [

				'nama' 		=> $nama,
				'email' 	=> $email,
				'password' 	=> password_hash($password, PASSWORD_DEFAULT),
				'level_id' 	=> $level_id,
			];

			$query = $this->Pengguna->tambahPengguna($data);


			//redirect
			redirect('admin/Pengguna','refresh');


		}
		
	}

	public function editUser($id){

		$data = [
			'title' => 'Edit Pengguna',
			'user' => $this->Pengguna->getPenggunaById($id)->row(),
			'level' => $this->Pengguna->getLevel()->result(),
		];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() == false) {
			
			$this->load->view('template/header');
			$this->load->view('template/menu',$data);
			$this->load->view('pengguna/edit',$data);
			$this->load->view('template/footer');
		}else{

			$nama 		= $this->input->post('nama',true);
			$email 		= $this->input->post('email',true);
			$level_id 	= $this->input->post('level_id',true);

			$data = [

				'nama' 		=> $nama,
				'email' 	=> $email,
				'level_id' 	=> $level_id,
			];

			$query = $this->Pengguna->editPengguna($id,$data);

			redirect('admin/Pengguna','refresh');
		}
	}

	

}

/* End of file Pengguna.php */
/* Location: ./application/modules/akademik/controllers/Pengguna.php */