<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentification extends CI_Controller {

	public function index(){
		//echo "page d'authentification";
		$this->load->view('authentification_view');
	}

}