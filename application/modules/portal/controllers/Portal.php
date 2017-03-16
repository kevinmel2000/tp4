<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function permohonan()
	{
		$this->load->view('permohonan');
	}

}

/* End of file Portal.php */
/* Location: ./application/controllers/Portal.php */