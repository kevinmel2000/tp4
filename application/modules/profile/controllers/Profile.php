<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: mrapry
 * Date: 4/6/17
 * Time: 11:53 AM
 */

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
    	$this->template->load('template','index');
    }


    public function tentang_tp4(){
    	$this->template->load('template','index');
    }

    public function visi_misi(){
    	$this->template->load('template','index');
    }

    public function tugas_wewenang(){
    	$this->template->load('template','index');
    }
    
    public function mekanisme(){
    	$this->template->load('template','index');
    }

}

