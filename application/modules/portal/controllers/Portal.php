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

	public function oka()
	{
		$this->load->view('oka1');
	}

	public function oka2()
	{
	$this->load->view('oka2');
	}

	public function oka3()
	{
	$this->load->view('oka3');
	}

	public function oka4()
	{
	$this->load->view('oka4');
	}

	public function slider()
	{
	$this->load->view('slider');
	}

	public function permohonan()
	{
		$this->load->view('permohonan');
	}

	public function baru(){
		$this->load->view('index');
	}

}

/* End of file Portal.php */
/* Location: ./application/controllers/Portal.php */