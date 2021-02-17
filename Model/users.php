<?php
include './core/database.php';
class users extends database
{
    function checkUsername($username)
    {
        $db= new database();
        $db->connect();
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $db->conn->query($sql);
        return $result;
    }
    function signup($username,$fullname,$password){
        $db= new database();
        $db->connect();
        $sql = "INSERT INTO users (username, password, full_name)
							VALUES ('$username', '$password', '$fullname')";
        $db->conn->query($sql);
    }
    function login($username,$password){
        $db= new database();
        $db->connect();
        $sql = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
        $result = $db->conn->query($sql);
        return $result;
    }
}