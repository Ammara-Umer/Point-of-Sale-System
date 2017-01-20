<?php
include_once 'index.php';
include_once 'Models/RegisterModel.php';
/*
 * class regisetController for regsitration of user
 */
class RegController implements IController{
    /*
     * method index load when ever the controller loaded and show a default view of Register
     * @return void
     */
    public function __construct() {
        
    }

    public function index(){
         
         require_once 'Views/General/Header.php';
        require_once 'Views/RegisterView.php';
         
     }
    /*
     * method emailValidation call by registerValidation.js for validity of user email
     * @return echo "success " if email is available else echo "fail"
     */
    public function emailValidation(){
        $email=  $_POST['email'];
        $obj= new RegisterModel();
         if ($obj->emailValidation($email)==false)
          {   
             echo "fail";
          }
         else
         {
             echo "OK";
         }
    
    }
   /*
    * method register call by view to register the user 
    * @method Model_register() to register the data into database 
    * @method loadControllerByName of ControllerFactory to laod LoginController if added successfully
    */
    public function register(){
       $type=$_POST['type'];
        $data=array(
                'name'=>$_POST['name'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'type'=>$type,
                'address'=>$_POST['address']
        );
        $obj=new RegisterModel();
        if($obj->register($data)==true)
        {
            ControllerFactory::loadControllerByName("LoginController");
        }
        else{
            echo "process for registeration is fail ";
        }
    }
}

