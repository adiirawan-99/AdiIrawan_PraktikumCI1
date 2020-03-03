<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // mencegah akses langsung pada controller 
 
class Belajar extends CI_Controller { // nama kelas sesuai yang telah dibuat saat membuat controller yaitu Belajar
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');//meload model m_data
	}
 
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result(); //memanggil fungsi ambil_data pada model m_data . fungsi result untuk menjadikannya array
		$this->load->view('v_user.php',$data); //memparsing array pada halaman v_user
	}
 
}

