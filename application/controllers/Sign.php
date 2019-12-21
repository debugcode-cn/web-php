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
    $user = $this->User->find($email,$password);
    if(!$user){
      $url = $this->url('sign','in');
      header( "refresh:5;url=$url" );
    }else{
      //todo set session_start;
      echo 'session_start and to main page';
    }
  }

  //邮箱注册
  public function up(){
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    if(empty($email) || empty($password)){
      show_error('Email or Password is empty');
    }
    $this->load->model("User");
    $user_exist = $this->User->exist($email);
    if($user_exist){
      die('user exist');
    }
    $user_id = $this->User->create($email,$password);
    //todo set session_start;
    $url = $this->url('home','index','&from=sign-up&uid='.$user_id);
    redirect($url);

  }
  
}
