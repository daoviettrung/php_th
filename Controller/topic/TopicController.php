<?php
require_once "./core/controller.php";
require_once "./Model/topic.php";
class TopicController extends controller{
    function  viewTopic(){
        $topic = new topic();
        $view= $topic->all();
       // $this->view('admin/index',['Pages'=>'topic/view','all'=>$view]);
    }
    function  getAddTopic(){
        $this->view('admin/index',['Pages'=>'topic/add']);
    }
    function postAddTopic(){
        $topic= new topic();
        $nametp= $_POST['name'];
        $slug=$_POST['slug'];
        $topic->insert($nametp,$slug);
        $this->redirect('topic/TopicController/viewTopic');
    }
}
