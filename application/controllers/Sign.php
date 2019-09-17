<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {
	public function index()
	{
		$this->load->database();
		var_dump($this->db) ;
		$this->load->view('sign_index');
	}
}
