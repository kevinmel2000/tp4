<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// echo "ini teras depan rumah";
		$this->load->view('rumah/terasDepan');	
	}

	public function ruang_tamu(){
		echo "ini ruang tamu";
	}

	public function ruang_makan(){
		echo "ini ruang makan";
	}

	public function garasi(){
		echo "ini garasi";
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */