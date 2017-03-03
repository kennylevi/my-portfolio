<?php
   // database connection
require_once 'config.php';


class MyDatabase {
    
    public $link;
            
    function __construct() {    
        $this->connect2DB();
    }
    
    public function connect2DB(){
        $this->link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if(!$this->link){
            die("UNABLE TO CONNECT TO DATABASE: ".mysqli_error($this->link));
        }
    }
    
    public function query($sql) {
        $result = mysqli_query($this->link, $sql);
        return $result;
    }
    
    public function fetchQuery($datas) {
        return mysqli_fetch_array($datas);
    }
    
    public function numRows($datas) {
        return mysqli_num_rows($datas);
    }
    function __destruct(){
        $this->connect2DB();
        
    }
}    
$db_connect = new MyDatabase();