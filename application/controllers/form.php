<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index(){
		$this->load->helper('form');
		echo form_open('email/send');
	}


}

