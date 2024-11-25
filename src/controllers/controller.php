<?php

namespace Ha\Mvc\controllers;
use Exception;
use Jenssegers\Blade\Blade;

class controller
{

  public function __call($name,$params)
  {
      throw new Exception("method  :"  .$name. "  not found");
  }

 protected function view($page,$data= [])
 {
     $blade = new Blade('../src/views', '../storage/cache');
     echo $blade->render($page,$data);
 }
protected function dd($data)
{
    echo "<pre>";
    print_r($data);
    die;
}
}
