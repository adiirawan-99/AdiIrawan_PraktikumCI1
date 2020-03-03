<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download')); //mengaktifkan helper url dan download				
	}
 
	public function index(){		
		$this->load->view('v_download'); //halaman yang akan diload pertama kali, jika alamat diakses
	}
 
	public function lakukan_download(){				
		force_download('gambar/malasngoding.png',NULL); //mendownload file 
	}	
 
}