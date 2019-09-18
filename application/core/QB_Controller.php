<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

//定义最根本共同的属性方法

class QB_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        //定义UA
    }

    public function render($view_path=null){
        if(!empty($view_path) && "string" ==  gettype($view_path)){
            $this->load->view($view_path);
            return true;
        }
        $controller_view_name =  $this->router->class;
        $action_view_name = $this->router->method;
        $this->load->view($controller_view_name . DIRECTORY_SEPARATOR . $action_view_name);
        return true;
    }

    public function renderPartial($view_path=null , $data=null){
        if(!empty($view_path)){
            return $this->load->view($view_path, $data, true);
        }
        $controller_view_name =  $this->router->class;
        $action_view_name = $this->router->method;
        return $this->load->view($controller_view_name . DIRECTORY_SEPARATOR . $action_view_name, $data, true);
    }

}