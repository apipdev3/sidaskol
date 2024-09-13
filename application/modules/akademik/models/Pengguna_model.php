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
}

/* End of file Pengguna_model.php */
/* Location: ./application/modules/akademik/models/Pengguna_model.php */