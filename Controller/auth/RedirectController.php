<?php
require_once "./core/controller.php";
class RedirectController extends controller {
    function getHome(){
        $this->view('admin/index',['Pages'=>home]);
    }
}
