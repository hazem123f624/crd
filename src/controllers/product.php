<?php

namespace Ha\Mvc\controllers;
use Ha\Mvc\core\db;

class product extends controller
{


    public function __construct()
    {
        session_start();
        if(empty($_SESSION['login'])){
            header("location:../user/login");
        }
    }


    public function index()
    {
        $db= new db("product");
        $product=$db->select()->all();

        return $this->view("products.product",compact("product"));
    }
    public function create()
    {
        $category=(new db("category"))->select()->all();
        $user=(new db("users"))->select()->all();
        return $this->view("products.create",compact("category","user"));
    }
    public function store()
    {
        $categoryname=$_POST['product'];
        $db= new db("product");
        $db->insert($categoryname)->excute();

        header('location:index');
    }
    public function edit($id)
    {
        $db= new db("product");
        $data=$db->select()->where('id','=',$id)->get();
        return $this->view("products.edit",compact("data"));
    }

    public function update()
    {
        $categoryname=$_POST['product'];
        $id=$_POST['product_id'];
      /*  echo "<pre>";
        print_r($categoryname);
        echo "----------------------";
        echo "<pre>";
        print_r($id);
        die();*/
        $db= new db("product");
        $db->update($categoryname)->where('id','=',$id)->excute();
        header('location:index');
    }
    public function delete($id)
    {
        $db= new db("product");
        $db->delete()->where('id','=',$id)->excute();
        header('location:../index');
    }
}