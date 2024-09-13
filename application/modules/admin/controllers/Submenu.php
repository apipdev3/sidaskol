<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Menu_model','Menu');
		$this->load->model('Submenu_model','Submenu');
	}

	public function index()
	{
		$data = [
			'title'		=> 'Data Submenu',
			'menu' 		=> $this->Menu->getMenu()->result(),
			'sub_menu' 	=> $this->Submenu->getSubmenu()->result(),
			'status' 	=> ['Y','N'],
		];

		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('submenu/index');
		$this->load->view('template/footer');
	}

	public function tambah(){

		$data = [

			'nama_submenu' 	=> $this->input->post('nama_submenu'),
			'link' 			=> $this->input->post('link'),
			'icon' 			=> $this->input->post('icon'),
			'id_menu' 		=> $this->input->post('id_menu'),
			'is_active' 	=> $this->input->post('is_active'),

		];

		$query = $this->Submenu->insertSubMenu($data);
		if ($query) {
			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Berhasil Disimpan.',
	            icon: 'fa fa-check',
	            type: 'success'
	        });";
			
			$this->session->set_flashdata('message', '<script>'.$message.'</script>');
		}else{

			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Gagal Tersimpan.',
	            icon: 'fa fa-close',
	            type: 'error'
	        });";

			$this->session->set_flashdata('message', '<script>'.$message.'</script>');
		}
            
        redirect('admin/Submenu');
	}

	public function edit($id_submenu){

		$data = [

			'nama_submenu' 	=> $this->input->post('nama_submenu'),
			'link' 			=> $this->input->post('link'),
			'icon' 			=> $this->input->post('icon'),
			'id_menu' 		=> $this->input->post('id_menu'),
			'is_active' 	=> $this->input->post('is_active'),

		];

		$query = $this->Submenu->updateSubMenu($id_submenu, $data);
		if ($query) {
			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Berhasil Diupdate.',
	            icon: 'fa fa-check',
	            type: 'success'
	        });";
			
			$this->session->set_flashdata('message', '<script>'.$message.'</script>');
		}else{

			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Gagal Diupdate.',
	            icon: 'fa fa-close',
	            type: 'error'
	        });";

			$this->session->set_flashdata('message', '<script>'.$message.'</script>');
		}
            
        redirect('admin/Submenu');
	}


	public function hapus($id_submenu)
	{
		$query = $this->Submenu->deleteSubMenu($id_submenu, $data);
		if ($query) {
			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Berhasil Dihapus.',
	            icon: 'fa fa-check',
	            type: 'success'
	        });";
			
			$this->session->set_flashdata('message', '<script>'.$message.'</script>');
		}else{

			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Gagal Dihapus.',
	            icon: 'fa fa-close',
	            type: 'error'
	        });";

			$this->session->set_flashdata('message', '<script>'.$message.'</script>');
		}
            
        redirect('admin/Submenu');
	}

}

/* End of file Submenu.php */
/* Location: ./application/modules/admin/controllers/Submenu.php */