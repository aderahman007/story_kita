<?php

class M_login extends CI_Model
{
	// function cek_login($table, $where)
	// {
	// 	return $this->db->get_where($table, $where);
	// }



	public function get_user_data($id)
	{
		return $this->db->get_where('user', array('id_user' => $id))->row();
	}
}
