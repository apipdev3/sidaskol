<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

	public function getMenu()
	{
		return $this->db->get('tbl_menu');
	}

	public function getMenuById($id_menu)
	{
		return $this->db->get_where('tbl_menu',['id_menu' => $i]);
	}

	public function insertMenu($data)
	{
		return $this->db->insert('tbl_menu',$data);
	}

	public function updateMenu($id_menu, $data)
	{
		return $this->db->where('id_menu',$id_menu)->update('tbl_menu',$data);
	}

	public function deleteMenu($id_menu)
	{
		return $this->db->where('id_menu',$id_menu)->delete('tbl_menu');
	}

}

/* End of file Menu_model.php */
/* Location: ./application/modules/admin/models/Menu_model.php */