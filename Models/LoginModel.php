<?php
include_once 'config.php';

/*
 * class LoginModel to give database results to LoginModel as per request
 * @property private $
 */
class LoginModel{
    private $conn;
    public function __construct()
    {
        $db= Db::getInstance();
        $this->conn=$db->getConnection();
    }
    
    public function Login($email , $password,$type){
         $sql="SELECT * FROM admin where email='$email' AND password='$password'AND type='$type'";
         $result = $this->conn->query($sql);
      
         return $result;
        
    }
}
?>
