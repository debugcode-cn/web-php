<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

//定义最根本共同的属性方法

class QB_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        //定义UA
    }

    //渲染并输出指定路径的模板或者当前方法对应的默认模板
    public function render($view_path=null, $data=null){
        if( in_array(gettype($view_path),['object','array']) && is_null($data) ){
            $data = $view_path;
            $view_path = null;
        }

        if("string" ==  gettype($view_path)){
            $this->load->view($view_path, $data);
            return true;
        }
        
        $controller_view_name =  $this->router->class;
        $action_view_name = $this->router->method;
        $this->load->view($controller_view_name . DIRECTORY_SEPARATOR . $action_view_name,$data);
        return true;
    }

    //渲染某个指定模板并返回其结果
    public function renderPartial($view_path=null , $data=null){
        if( in_array(gettype($view_path),['object','array']) && is_null($data) ){
            $data = $view_path;
            $view_path = null;
        }
        
        if(!empty($view_path)){
            return $this->load->view($view_path, $data, true);
        }
        $controller_view_name =  $this->router->class;
        $action_view_name = $this->router->method;
        return $this->load->view($controller_view_name . DIRECTORY_SEPARATOR . $action_view_name, $data, true);
    }

    //生成网址
    public function url($controller,$function,$pararm=''){
        $arr = array('c'=>$controller,'m'=>$function);
        $url = site_url($arr).$pararm;
        return $url;
    }
    
}