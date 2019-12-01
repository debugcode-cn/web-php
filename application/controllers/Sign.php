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

  //邮箱登录
  public function in(){
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    if(empty($email) || empty($password)){
      show_error('Email or Password is empty');
    }
    $this->load-model("User");
    $this->User->find($email,$password);
    $url = $this->url('home','index','&from=sign-in');
    redirect($url);
  }

  //邮箱注册
  public function up(){
    $url = $this->url('home','index','&from=sign-up');
    redirect($url);
  }

}
