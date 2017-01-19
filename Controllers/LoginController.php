<?php
include_once 'index.php';
include_once 'Models/ModelFactory.php';
/*
 *  class LoginController 
 */
 class LoginController implements IController {
     
     public function __construct() {
        
     }
    /*
     * index function 
     * @return View return a defult view
     */
     public function index(){
        require_once 'Views/LoginView.php';
         
     }
     /*
      * Login function to admin or user login handling
      * @return admin or user view depend upon the type of login 
      */
     public function Login(){
         $email=$_POST['email'];
         $password=$_POST['password'];
         $type=$_POST['type'];
         $obj=ModelFactory::loadModel("LoginModel");
         $result= $obj->Login($email,$password,$type);
         $type=$type."Controller";
         ControllerFactory::loadControllerByName($type);
        
         
     }
    
}
?>

