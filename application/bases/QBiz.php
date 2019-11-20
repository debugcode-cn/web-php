<?php
class QBiz{
  private static $lang;
  public static function isLang($lang){
    return  stripos($this->lang,$lang) !== false;
  }
}