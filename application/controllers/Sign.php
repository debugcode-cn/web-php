<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends QB_Controller {
	public function index(){
		$args_header = array(
      'title'=>'sign-index'
    );
		$this->render('common/header',$args_header);//todo 放到角落中去
    $this->render();
    $this->render('common/footer');//todo 放到角落中去
	}
}
