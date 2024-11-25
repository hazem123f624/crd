<?php

namespace Ha\Mvc\controllers;
use Ha\Mvc\core\db;

class category extends controller
{
    public function __construct()
    {
        session_start();
        if(empty($_SESSION['login'])){
            header("location:../user/login.php");
        }
    }
 public function index()
 {
     $db= new db("category");
     $category=$db->select()->all();

     return $this->view("category.category",compact("category"));
 }
 public function create()
 {
   return $this->view("category.create");
 }
 public function store()
 {
     $categoryname=$_POST['category'];
     $db= new db("category");
     $db->insert( $categoryname)->excute();

     header('location:index');
 }
 public function edit($id)
 {
   $db= new db("category");
   $data=$db->select()->where('id','=',$id)->get();
   return $this->view("category.edit",compact("data"));
 }

 public function update()
 {
 $categoryname=$_POST['name'];
 $id=$_POST['id'];
 $db= new db("category");
 $db->update(['name'=>$categoryname])->where('id','=',$id)->excute();
 header('location:index');
 }
 public function delete($id)
 {
   $db= new db("category");
   $db->delete()->where('id','=',$id)->excute();
   header('location:../index');
 }
}