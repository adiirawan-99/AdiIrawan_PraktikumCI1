<?php 
 
class Form extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); //memanggil library form_validation  
	}
 
	function index(){// method yang pertama kali diakses
		$this->load->view('v_form'); // mengakses v_form
	}
 
	function aksi(){ //membuat method aksi
		$this->form_validation->set_rules('nama','Nama','required'); // menjadikan form wajib diisi pada v_form. Kemudian ditentukan dulu form mana yang akan diberikan validasi. (contoh : nama)
		$this->form_validation->set_rules('email','Email','required'); // menjadikan form wajib diisi pada v_form. fungsi set_rules untuk menetapkan aturan form
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required'); // menjadikan form wajib diisi pada v_form
 
		if($this->form_validation->run() != false){ 
			echo "Form validation oke";
		}else{
			$this->load->view('v_form');
		}
	}
}