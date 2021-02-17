<?php
class controller{
    public function view($view,$data=[]){
        require_once "./View/".$view.".php";
    }
    public function redirect($controller){
        header('location:http://localhost:8080/php_mvc_th/'.$controller);
    }
}
