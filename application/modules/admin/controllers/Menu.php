<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Menu_model','Menu');
	}

	public function index()
	{
		
		$data = [
			'title'		=> 'Data Menu',
			'menu' 		=> $this->Menu->getMenu()->result(),
			'status' 	=> ['Y','N'],
		];

		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('menu/index');
		$this->load->view('template/footer');
	}

	public function tambahMenu(){

		$data = [

			'modul' 	=> $this->input->post('modul'),
			'nama_menu' => $this->input->post('nama_menu'),
			'link' 		=> $this->input->post('link'),
			'icon' 		=> $this->input->post('icon'),
			'urutan' 	=> $this->input->post('urutan'),
			'is_active' => $this->input->post('is_active'),

		];

		$query = $this->Menu->insertMenu($data);
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
            
        redirect('admin/Menu');
	}

	public function editMenu($id_menu){

		$data = [

			'modul' 	=> $this->input->post('modul'),
			'nama_menu' => $this->input->post('nama_menu'),
			'link' 		=> $this->input->post('link'),
			'icon' 		=> $this->input->post('icon'),
			'urutan' 	=> $this->input->post('urutan'),
			'is_active' => $this->input->post('is_active'),

		];

		$query = $this->Menu->updateMenu($id_menu, $data);
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
            
        redirect('admin/Menu');
	}


	public function hapusMenu($id_menu)
	{
		$query = $this->Menu->deleteMenu($id_menu, $data);
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
            
        redirect('admin/Menu');
	}


}

/* End of file Menu.php */
/* Location: ./application/modules/admin/controllers/Menu.php */