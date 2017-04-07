<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	    $this->template->load('template','portal');
	}

	public function permohonan()
    {

    }

}

/* End of file Portal.php */
/* Location: ./application/controllers/Portal.php */