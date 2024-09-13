<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_kelas extends CI_Controller {

	public function index()
	{
		$data = [
			'siswa' => $this->db->get('tbl_siswa')->result()
		];
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('transaksi_kelas/index',$data);
		$this->load->view('transaksi_kelas/js',$data);
		$this->load->view('template/footer');
	}

	public function getKelasAsal()
	{
		$data = [
			'siswa' => $this->db->get('tbl_siswa')->result()
		];
		
		$this->load->view('transaksi_kelas/Kelas_asal',$data);
	
	}

	public function getKelasTujuan()
	{
		$data = [
			'siswa' => $this->db->get('tbl_siswa')->result()
		];
		
		$this->load->view('transaksi_kelas/Kelas_tujuan',$data);
	
	}

}

/* End of file Transaksi_kelas.php */
/* Location: ./application/modules/akademik/controllers/Transaksi_kelas.php */