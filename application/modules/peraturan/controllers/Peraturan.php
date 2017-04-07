<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: mrapry
 * Date: 4/6/17
 * Time: 11:53 AM
 */

class Peraturan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
    	$this->template->load('template','index');
    }

    public function pp(){
    	$this->template->load('template','index');
    }
    public function kepres(){
    	$this->template->load('template','index');
    }
    public function perda(){
    	$this->template->load('template','index');
    }
    public function permen(){
    	$this->template->load('template','index');
    }
    public function perja(){
    	$this->template->load('template','index');
    }
    public function bumn(){
    	$this->template->load('template','index');
    }

}

