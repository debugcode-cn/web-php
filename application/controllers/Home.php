<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends QB_Controller{
	public function index(){
		$this->render();
	}

	public function dbtest(){
		$this->load->database();
		var_dump($this->db) ;
	}
    public function insert(){
        $this->load->database();
        $this->load->model('User');
        $email = '2505013465@qq.com';
        $this->User->create($email);
    }
}
