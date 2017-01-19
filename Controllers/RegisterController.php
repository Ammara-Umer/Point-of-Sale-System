<?php
include_once 'Interfaces/IController.php';
include_once 'Models/RegisterModel.php';
/*
 * class regisetController for regsitration of user
 */
class RegisterController implements IController{
    /*
     * method index load when ever the controller loaded and show a default view of Register
     * @return void
     */
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
             echo "success";
         }
    
    }
   /*
    * method register call by view to register the user 
    * @method Model_register() to register the data into database 
    * @method loadControllerByName of ControllerFactory to laod LoginController if added successfully
    */
    public function register(){
       ;
        $data=array(
                'name'=>$POST['name'],
                'email'=>$POST['email'],
                'password'=>$_POST['password'],
                'type'=>$_PSOT['type']
        );
        $obj=new RegisetrModel();
        if($obj->register($data)==true)
        {
            ControllerFactory::loadControllerByName("LoginController");
        }
        else{
            echo "process for registeration is fail ";
        }
    }
}

