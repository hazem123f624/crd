<?php

namespace Ha\Mvc\core;
use Ha\Mvc\controllers\controller;
use Exception;
//use mysql_xdevapi\Exception;


class app extends controller
{
private $cnttroller;
private $method;
private $params = [];
public function __construct()
{
    $this->url();
    $this->run();
}
private function url()
{
    $url = $_SERVER['QUERY_STRING'];
    /*var_dump($url);
    die();*/
    $url = explode("/",$url);
    $this->cnttroller =(!empty($url[0]))?$url[0]:$_ENV['DEFAULT_CLASS'];
    $this->method = (!empty($url[1]))?$url[1]:$_ENV['DEFAULT_METHOD'];
    unset($url[0],$url[1]);

    $this->params = $url;
}
private function run()
{

      $controller="Ha\\Mvc\\controllers\\".$this->cnttroller;
      if(class_exists($controller)){
          call_user_func_array([new $controller,$this->method],$this->params);
      }else{
          throw new Exception("class not found");
      }

}
}