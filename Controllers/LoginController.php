<?php
include_once 'index.php';
include_once 'Models/LoginModel.php';
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
         require_once 'Views/General/Header.php';
        require_once 'Views/LoginView.php';
         
     }
     /*
      * Login function to admin or user login handling
      * @return admin or user view depend upon the type of login 
      */
     public function logIn(){
         $email=$_POST['email'];
         $password=$_POST['password'];
         $type=$_POST['type'];
       
         $obj=new LoginModel();
         $result= $obj->Login($email,$password,$type);
          if ($result->num_rows > 0)
          {             
              session_start();
              while($row = $result->fetch_assoc())
                {
                     $_SESSION['id']=$row["id"];
                     $_SESSION['name']=$row["name"];
                     $_SESSION['type']=$row['type'];
                }  
                $type=$type."Controller";
                ControllerFactory::loadControllerByName($type);
          } 
          else
          {
              ControllerFactory::loadControllerByName("NotFoundController");
          }
  
     }
     public function logOut()
     {
         session_destroy();
     }
    
}
?>

