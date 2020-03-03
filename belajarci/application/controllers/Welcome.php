<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
	
	function __construct(){ // fungsi pertama yang diakses saat halaman di load
		parent::__construct();
		$this->load->helper('html'); // memanggil helper. Helper yang digunakan adalah helper html
	}
 
	public function index(){
		$this->load->view('welcome'); // menampilkan welcome
	}
}