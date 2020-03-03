<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //mencegah akses langsung 
 //membuat uri segment
class Mobil extends CI_Controller {
 
	public function warna(){ //membuat method warna
		echo "Segment 1 adalah = " . $this->uri->segment('1') . "<br/>";	//menampilkan segment keberapa yang ditampilkan	
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>";	//menampilkan segment keberapa yang ditampilkan	
		echo "Segment 3 adalah = " . $this->uri->segment('3') . "<br/>";	//menampilkan segment keberapa yang ditampilkan	
		echo "Segment 4 adalah = " . $this->uri->segment('4') . "<br/>";	//menampilkan segment keberapa yang ditampilkan	
		echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>";	//menampilkan segment keberapa yang ditampilkan
	}
}