<?php
include './core/database.php';
class topic extends database{
    function all(){
        $db= new database();
        $db->connect();
        $sql="SELECT * FROM tbl_topic";
        $result = mysqli_query($db->conn, $sql);
        $list=array();
        var_dump($result->num_rows);
        /*while ($data = $result->fetch_array()){
            $list[]=$data;
        }*/
        //return $list;
    }
    function insert($nametp,$slug){
        $db= new database();
        $db->connect();
        $sql = "INSERT INTO tbl_topic (name,slug)
				VALUES ('$nametp','$slug')";
        $db->conn->query($sql);
    }
}