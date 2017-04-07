<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: mrapry
 * Date: 4/6/17
 * Time: 11:53 AM
 */

class Kegiatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
    	$this->template->load('template','index');
    }

    public function tp4d(){
    	$this->template->load('template','index');
    }

    public function tp4p(){
    	$this->template->load('template','index');
    }
}

