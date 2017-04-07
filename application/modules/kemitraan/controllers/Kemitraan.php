<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: mrapry
 * Date: 4/6/17
 * Time: 11:53 AM
 */

class Kemitraan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
    	$this->template->load('template','index');
    }

    public function bumn(){
    	$this->template->load('template','index');
    }

    public function bumd(){
    	$this->template->load('template','index');
    }

    public function pemerintah_profinsi(){
    	$this->template->load('template','index');
    }

    public function pemerintah_kota_daerah(){
    	$this->template->load('template','index');
    }

}

