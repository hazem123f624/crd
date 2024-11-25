<?php


require "../vendor/autoload.php";
use Ha\Mvc\core\app;
//$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__) );
$dotenv =\Dotenv\Dotenv::createImmutable(dirname(__DIR__) );
$dotenv->load();

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


$app= new app();