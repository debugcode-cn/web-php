<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends MY_Controller {

	public function index(){
		$this->load->view('sign_index');
	}
	public function up(){
		$this->load->view('sign_index');
	}

}
