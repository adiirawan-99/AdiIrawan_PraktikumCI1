<?php 
 
class M_data extends CI_Model{
	function ambil_data(){ // membuat fungsi ambil_data
		return $this->db->get('user'); // mengambil data dari database
	}
}