<?php 
 
class M_Catatan extends CI_Model{	

    public function tambah($data, $table){
        $this->db->insert($table, $data);
        // if($this->db->affected_rows() > 0){
        //     return true;
        // }
    }

    public function tampil_alma(){
        return $this->db->get_where('catatan', array('penulis' => 'alma'));
        // return $this->db->get('catatan');
    }

    public function tampil_ade(){
        return $this->db->get_where('catatan', array('penulis' => 'ade'));
        // return $this->db->get('catatan');
    }

    public function tampil_detail($id){
        return $this->db->get_where('catatan', array('id_catatan' => $id));
    }

}