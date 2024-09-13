<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu_model extends CI_Model {

	public function getSubmenu()
	{
		return $this->db->select('a.*, a.link as link_sb,b.id_menu, b.nama_menu')
                     ->from('tbl_submenu a')
                     ->join('tbl_menu b', 'b.id_menu = a.id_menu')->get();
	}

	public function getSubMenuById($id_submenu)
	{
		return $this->db->get_where('tbl_submenu',['id_menu' => $i]);
	}

	public function insertSubMenu($data)
	{
		return $this->db->insert('tbl_submenu',$data);
	}

	public function updateSubMenu($id_submenu, $data)
	{
		return $this->db->where('id_submenu',$id_submenu)->update('tbl_submenu',$data);
	}

	public function deleteSubMenu($id_submenu)
	{
		return $this->db->where('id_submenu',$id_submenu)->delete('tbl_submenu');
	}

}

/* End of file Submenu_model.php */
/* Location: ./application/modules/admin/models/Submenu_model.php */