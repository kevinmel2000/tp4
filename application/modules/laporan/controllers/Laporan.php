<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: mrapry
 * Date: 4/6/17
 * Time: 11:53 AM
 */

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
    	$this->template->load('template','index');
    }


}

