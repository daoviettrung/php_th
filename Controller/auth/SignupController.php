<?php
require_once "./core/controller.php";
require_once "./Model/users.php";
class SignupController extends controller {
    function getSignup(){
        $this->view("signup");
    }
    function postSignup(){
        $user= new users();
        if(empty($_POST['username'])){
            $error="You need to fill out all information";
            $this->view("signup",["error"=>$error]);
        }
        else{
            $username=$_POST['username'];
        }
        if(empty($_POST['fullname'])){
            $error="You need to fill out all information";
            $this->view("signup",["error"=>$error]);
        }
        else{
            $fullname=$_POST['fullname'];
        }
        if(empty($_POST['password'])){
            $error="You need to fill out all information";
            $this->view("signup",["error"=>$error]);
        }
        else{
            $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
        }
        if(strlen($_POST['fullname'])<2){
            $error='Need to enter at least 2 characters at fullname';
            $this->view("signup",["error"=>$error]);
        }
        if(strlen($_POST['password'])<8){
            $error='Need to enter at least 8 characters at passsword';
            $this->view("signup",["error"=>$error]);
        }
        if($_POST['password']!=$_POST['re_enterpassword']){
            $error='Password is not the same';
            $this->view("signup",["error"=>$error]);
        }
        $check=$user->checkUsername($username);
        if($check->num_rows > 0){
            $error="Username already exists";
            $this->view("signup",['error'=>$error]);
        }else{
            $user->signup($username,$fullname,$password);
            header('location:http://localhost:8080/php_mvc_th/auth/LoginController/getLogin');
        }

    }
}