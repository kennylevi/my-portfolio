<?php
session_start(); 
require_once 'database.php';

class Admin {

    function __construct() {
        
    }
    
    public function getAdmin($username, $password) {
        global $db_connect;
        //$password = md5($password);
        $sql = "SELECT * FROM admin WHERE username ='{$username}' AND password ='{$password}'";
        $datas = $db_connect->query($sql);
        $resultset = $db_connect->fetchQuery($datas);
        $check_rows = $db_connect->numRows($datas);
        
        if($check_rows == 1){
            $_SESSION['login'] = true;
            $_SESSION['admin_id'] = $resultset['username'];
            return true;
        }  else {
            return false;
        }
    }
    
    public function getAdminName($username) {
        global $db_connect;
        $sql = "SELECT *FROM admin WHERE username = '{$username}'";
        $result = $db_connect->query($sql);
        $data = $db_connect->fetchQuery($result);
        echo $data['username'];
    }
    
    public function getSession() {
        return $_SESSION['login'];
    }
    
    public function adminLogout() {
        $_SESSION['login'] = FALSE;
        session_destroy();
    }

}
    



