<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akses extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Akses_model','Akses');
	}

	public function index()
	{
		$data = [
			'title' 	=> 'Hak Akses',
			'akses' 	=> $this->Akses->getAkses()->result(),
			'status'	=> ['N','Y']
		];
		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('akses/index',$data);
		$this->load->view('template/footer');
	}

	public function addLevel()
	{
		$nama_level =$this->input->post('nama_level');

		$cek_nama = $this->db->get_where('tbl_userlevel',['nama_level' => $nama_level])->num_rows();
		if ($cek_nama > 0) {
			
			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Sudah ada.',
	            icon: 'fa fa-check',
	            type: 'error'
	        });";
			
			$this->session->set_flashdata('message', '<script>'.$message.'</script>');
			

		}else{

			$this->db->insert('tbl_userlevel', ['nama_level' => $nama_level]);

			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Berhasil Disimpan.',
	            icon: 'fa fa-check',
	            type: 'success'
	        });";
			
			$this->session->set_flashdata('message', '<script>'.$message.'</script>');
			
		}

		redirect('admin/Akses');
	}

	public function editLevel($id_level)
	{
		$nama_level =$this->input->post('nama_level');

		$cek_nama = $this->db->get_where('tbl_userlevel',['id_level' => $id_level])->num_rows();
		if ($cek_nama > 0 ) {

			$this->db->where('id_level',$id_level)->update('tbl_userlevel', ['nama_level' => $nama_level]);

			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Berhasil Diubah.',
	            icon: 'fa fa-check',
	            type: 'success'
	        });";
			
			$this->session->set_flashdata('message', '<script>'.$message.'</script>');

		}else{

			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Tidak ada.',
	            icon: 'fa fa-check',
	            type: 'error'
	        });";
			
			$this->session->set_flashdata('message', '<script>'.$message.'</script>');
		}

		redirect('admin/Akses');
	}

	public function addAkses()
	{	

		if ($this->input->post('id_level') == "") {
			
			$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data level tidak boleh kosong.',
	            icon: 'fa fa-check',
	            type: 'error'
	        });";
			
		$this->session->set_flashdata('message', '<script>'.$message.'</script>');

		redirect('admin/Akses');
		}


		$id_level   = $this->input->post('id_level');
		$id_menu 	= $this->input->post('id_menu');
		$view_menu 	= $this->input->post('view_menu');
		$add_menu 	= $this->input->post('add_menu');
		$edit_menu 	= $this->input->post('edit_menu');
		$delete_menu 	= $this->input->post('delete_menu');

		for ($i=0; $i < count($id_menu) ; $i++) { 
			
			$menu = [
				'id_level'		=> $id_level,
				'id_menu' 		=> $id_menu[$i],
				'view_level' 	=> $view_menu[$i],
				'add_level' 	=> $add_menu[$i],
				'edit_level' 	=> $edit_menu[$i],
				'delete_level' 	=> $delete_menu[$i],
			];

			$cek_menu = $this->db->get_where('tbl_akses_menu',[
						'id_level'		=> $id_level,
						'id_menu' 		=> $id_menu[$i],
						])->num_rows();

			if ($cek_menu > 0) {
				
			}else{

				$query = $this->Akses->insertMenu($menu);
			}


		}

		$id_level   = $this->input->post('id_level');
		$id_submenu = $this->input->post('id_submenu');
		$view_sub 	= $this->input->post('view_sub');
		$add_sub 	= $this->input->post('add_sub');
		$edit_sub 	= $this->input->post('edit_sub');
		$delete_sub 	= $this->input->post('delete_sub');

		for ($i=0; $i < count($id_submenu) ; $i++) { 
			
			$sub = [
				'id_level'			=> $id_level,
				'id_submenu' 		=> $id_submenu[$i],
				'view_level' 		=> $view_sub[$i],
				'add_level' 		=> $add_sub[$i],
				'edit_level' 		=> $edit_sub[$i],
				'delete_level' 		=> $delete_sub[$i],
			];

			$cek_menu = $this->db->get_where('tbl_akses_submenu',[
						'id_level'		=> $id_level,
						'id_submenu' 		=> $id_submenu[$i],
						])->num_rows();

			if ($cek_menu > 0) {
				
			}else{

				$query = $this->Akses->insertSubmenu($sub);
			}

			
		}

		$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Berhasil Disimpan.',
	            icon: 'fa fa-check',
	            type: 'success'
	        });";
			
		$this->session->set_flashdata('message', '<script>'.$message.'</script>');

		redirect('admin/Akses');
		
	}


	public function editAkses($id_level)
	{	
		
		$id_menu 	= $this->input->post('id_menu');
		$view_menu 	= $this->input->post('view_menu');
		$add_menu 	= $this->input->post('add_menu');
		$edit_menu 	= $this->input->post('edit_menu');
		$delete_menu 	= $this->input->post('delete_menu');

		for ($i=0; $i < count($id_menu) ; $i++) { 
			
			$menu = [
				
				'view_level' 	=> $view_menu[$i],
				'add_level' 	=> $add_menu[$i],
				'edit_level' 	=> $edit_menu[$i],
				'delete_level' 	=> $delete_menu[$i],
			];

			$where_menu = ['id_level'=> $id_level,'id_menu' => $id_menu[$i]];

			$cek_menu = $this->db->get_where('tbl_akses_menu',$where_menu)->num_rows();

			if ($cek_menu > 0) {

				 $query = $this->Akses->updateMenu($where_menu,$menu);


			}


		}

		
		$id_submenu 	= $this->input->post('id_submenu');
		$view_sub 		= $this->input->post('view_sub');
		$add_sub 		= $this->input->post('add_sub');
		$edit_sub 		= $this->input->post('edit_sub');
		$delete_sub 	= $this->input->post('delete_sub');

		for ($i=0; $i < count($id_submenu) ; $i++) { 
			
			$sub = [
				
				'view_level' 		=> $view_sub[$i],
				'add_level' 		=> $add_sub[$i],
				'edit_level' 		=> $edit_sub[$i],
				'delete_level' 		=> $delete_sub[$i],
			];

			$where_submenu = ['id_level'=> $id_level,'id_submenu' => $id_submenu[$i]];

			$cek_submenu = $this->db->get_where('tbl_akses_submenu',$where_submenu)->num_rows();

			if ($cek_submenu > 0) {
				
				$query = $this->Akses->updateSubmenu($where_submenu, $sub);
			}

			
		}

		$message = "new PNotify({
	            title: 'Notice',
	            text: 'Data Berhasil Diupdate.',
	            icon: 'fa fa-check',
	            type: 'success'
	        });";
			
		$this->session->set_flashdata('message', '<script>'.$message.'</script>');

		redirect('admin/Akses');

		
	}

	public function hapusLevel($id_level)
	{

		$query = $this->db->where('id_level',$id_level)->delete('tbl_userlevel');
		
		$this->db->where('id_level',$id_level)->delete('tbl_akses_menu');
		$this->db->where('id_level',$id_level)->delete('tbl_akses_submenu');

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
            
        redirect('admin/Akses');
	}
	

}

/* End of file Akses.php */
/* Location: ./application/modules/admin/controllers/Akses.php */