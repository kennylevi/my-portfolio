<?php 



class session {
        
    public $admin_id;
            
    function __construct() {
        session_start();
    }
    
    
    public function is_logged_in() {
        global $admin;
        $this->admin_id = $_SESSION['admin_id'] = $username;
        return $this->admin_id;
    }
    
      public function logOut() {
        unset($_SESSION['admin_id']);
        unset($this->admin_id);
        $this->logged_in = false;
    }
    
}
$session = new session();

//require_once 'database.php';
////require_once 'adminClass.php';
//
//class adminSession {
//    
//    private $logged_in=false;
//    public $admin_id;
//
//    function __construct() {
//        session_start();
//        $this->checkLogIn();
//        if($this->logged_in){
//            
//        }  else {
//            
//        }
//    }
//    
//    public function is_logged_in() {
//        return $this->logged_in;
//    }
//    
//    public function logIn($admin) {
//        if($admin){
//            $this->admin_id = $_SESSION['admin_id'] = $admin->username;
//            $this->logged_in=true;
//        }
//    }
//    
//    public function logOut() {
//        unset($_SESSION['admin_id']);
//        unset($this->admin_id);
//        $this->logged_in = false;
//    }
//    
   
 
 
//}

