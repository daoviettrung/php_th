<?php
class web{
    protected $directory="";
    protected $controller="";
    private $action="";
    private $params=[];
    public function __construct()
    {

        $arr= $this->UrlProcess();
        if(file_exists("Controller/".$arr[0])){
            $this->directory=$arr[0];
            unset($arr[0]);
        }
        if(file_exists("Controller/".$this->directory."/".$arr[1].".php")){
            $this->controller=$arr[1];
            unset($arr[1]);
        }
        require_once "./Controller/".$this->directory."/".$this->controller.".php";
        $this->controller= new $this->controller;
        if(isset($arr[2])){
            if(method_exists($this->controller,$arr[2])){
                $this->action=$arr[2];
            }
            unset($arr[2]);
        }
        if(isset($arr)){
            $this->params=array_values($arr);
        }
        else{
            $this->params= [];
        }
        call_user_func_array(array($this->controller, $this->action), array($this->params));

    }
    function UrlProcess(){
        if(isset($_GET["url"])){
            return explode("/", filter_var(trim($_GET["url"])));

        }
    }
}
