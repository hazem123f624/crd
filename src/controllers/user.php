<?php

namespace Ha\Mvc\controllers;

use Ha\Mvc\core\db;

class user extends controller
{
    public function register()
    {
     return $this->view('users/register');
    }
    public function store()
    {
    $users= new db('users');
    $users->insert([
        'name'=> $_POST["name"],
        'email'=> $_POST["email"],
        'password'=> $_POST["password"],
    ])->excute();
    header('location:login');
    }
    public function login()
    {
     return $this->view('users/login');
    }
    public function loginRequest()
    {
    session_start();
    $email=$_POST["email"];
    $password=$_POST["password"];
    $users= new db('users');
    $data=$users->select()->where('email','=',$email)
        ->Andwhere('password','=',$password)->get();

    if(!empty($data)){
        $_SESSION['login']=$data;
        header('location:../category/index');
    }else{
        header('location:login');
    }

    }
    public function logout(){
        session_start();
        session_destroy();
        header('location:login');
    }
}