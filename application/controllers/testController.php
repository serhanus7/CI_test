<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestController extends CI_Controller {

	public function index(){
		echo "<h2>Woow nouveau controller</h2>";
	}

	public function methode1(){
		echo "<h1>cotroller = TestController</h1>";
		echo "<h2>Method 1 </h2>(sans parametre)";
	}

	public function methode2($para1=0){
		echo "<h1>cotroller = TestController</h1>";
		echo "<h2>Method 2</h2>";
		echo "<h3>parametre 1 = ".$para1."</h2>";
	}

	public function passpara(){
		$data['nom']="Serhan";
		$data['prenom']="Ismail";
		$this->load->view('testController_view',$data);
	}

}