<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rest extends QB_Controller{
  public function restResult($reason='ok',$data=array(),$code=0){
    header("Content-Type:application/json;charset=utf-8");
    if(is_array($reason)){
      $data=$reason;
      $reason='ok';
    }
    if(!is_array($data)){
      $data = array($data);
    }
    $result = array(
      'reason'=>$reason,
      'code'=>$code,
      'data'=>$data
    );
    $result = json_encode($result,JSON_UNESCAPED_UNICODE);
    die($result);
  }
	public function upload2OSS(){
    $file = $_FILES['blob'];
    $this->restResult($file);
	}
  public function index(){
    $this->restResult('$file');
	}
}
