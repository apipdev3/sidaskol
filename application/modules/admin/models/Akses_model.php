<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akses_model extends CI_Model {

	public function getAkses()
	{
		return $this->db->get('tbl_userlevel');
	}

	public function insertMenu($data)
	{
		return $this->db->insert('tbl_akses_menu',$data);
	}

	public function insertSubmenu($data)
	{
		return $this->db->insert('tbl_akses_submenu',$data);
	}


	public function updateMenu($where_menu,$data)
	{
		return $this->db->where($where_menu)->update('tbl_akses_menu',$data);
	}

	public function updateSubmenu($where_submenu,$data)
	{
		return $this->db->where($where_submenu)->update('tbl_akses_submenu',$data);
	}

}

/* End of file Akses_model.php */
/* Location: ./application/modules/admin/models/Akses_model.php */