<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

	public function getPengguna()
	{
		$pengguna = $this->db->select('*')
						 	 ->from('tbl_user tu')
						 	 ->join('tbl_userlevel tul','tul.id_level = tu.level_id')
						 	 ->get();

		return $pengguna;
	}

	public function getPenggunaById($id)
	{
		$pengguna = $this->db->select('*')
						 	 ->from('tbl_user tu')
						 	 ->join('tbl_userlevel tul','tul.id_level = tu.level_id')
						 	 ->where('tu.id_user',$id)
						 	 ->get();

		return $pengguna;
	}

	public function getLevel()
	{
		$level = $this->db->get('tbl_userlevel');
		return $level;
	}

	public function tambahPengguna($data)
	{
		$query = $this->db->insert('tbl_user',$data);
		return $query;
	}

	public function editPengguna($id,$data)
	{
		$query = $this->db->where('id',$id)->insert('tbl_user',$data);
		return $query;
	}
}

/* End of file Pengguna_model.php */
/* Location: ./application/modules/akademik/models/Pengguna_model.php */