<?php
include_once 'config.php';

/*
 * class LoginModel to give database results to LoginModel as per request
 * @property private $conn , to get database connection
 */
class LoginModel{
    private $conn;
    /*
     * constructor method , get db connection
     */
    public function __construct()
    {
        $db= Db::getInstance();
        $this->conn=$db->getConnection();
    }
    /*
     * method Login , fetch data of user from database if exist
     * @param String $email , to get email id of user
     * @param String $password , to get password of the user
     * @param String $type , to get type of user either it is admin or simple user
     * @return $result , all the information about the specific user 
     */
    public function Login($email , $password,$type){
         $sql="SELECT * FROM admin where email='$email' AND password='$password'AND type='$type'";
         try {
         $result = $this->conn->query($sql);
         if ($result!=null){
             return $result;
         }
         else{
             return null;
         }
         }  catch (Exception $e){
             
         }
    }
}
?>
