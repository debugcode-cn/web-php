<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller{
	
	public function index(){
		$this->load->view('home_message');
	}

	public function dbtest(){
		echo $this->name;
		$this->load->database();
		var_dump($this->db) ;
	}
	
}
