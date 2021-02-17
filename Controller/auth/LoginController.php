<?php
require_once "./core/controller.php";
require_once "./Model/users.php";
class LoginController extends controller {
    function getLogin(){
        $this->view('login');
    }
    function postLogin(){

        $user= new users();
        if(empty($_POST['username'])){
            $error='You need to fill out all information';
            $this->view("login",["error"=>$error]);
        }
        else{
            $username=$_POST['username'];
        }
        if(empty($_POST['password'])){
            $error='You need to fill out all information';
            $this->view("login",["error"=>$error]);
        }
        else{
            $password= $_POST['password'];
        }
        $check= $user->checkUsername($username);
        if($check->num_rows <1){
            $error='Username does not exist';
            $this->view("login",["error"=>$error]);
        }
        $result=$user->login($username,$password);
        if($result->num_rows<1){
            $error='Name or password is incorrect';
            $this->view("login",["error"=>$error]);
        }
        else{
            $data= $result->fetch_array();
            $_SESSION['user']=$data;
            $this->redirect("auth/RedirectController/getHome");
        }

    }
    function logout(){
        unset($_SESSION['user']);
        $this->redirect('auth/LoginController/getLogin');
    }
}
