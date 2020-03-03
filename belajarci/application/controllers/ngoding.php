<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('malasngoding'); //membuka library malasngoding yang telah dibuat
		$this->malasngoding->nama_saya(); // memanggil method nama_saya pada library malasngoding
                echo "<br/>";
                $this->malasngoding->nama_kamu("Andi"); // memanggil method nama_kamu kemudian mengisinya dengan Andi
	}
 
}