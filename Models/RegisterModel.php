<?php

/*
 * class RegisterModel to register user in to data base
 * @property $conn to make database connection 
 */
class RegisterModel{
    private $conn;
    
    public function __construct() {
         $db= Db::getInstance();
        $this->conn=$db->getConnection();
    }

    public function emailValidation($email){
        $sql="SELECT * FROM admin where email='$email'";
          $result = $this->conn->query($sql);
          if($result->num_rows > 0)
          {
           return false;
          }
          else
          {
              return true;
          }
    }
    public function register($obj){
        
        $email=$obj['email'];
        $name=$obj['name'];
        $password=$obj['password'];
        $address= $obj['address'];
        $type=$obj['type'];
       if($this->EmailValidation($email)==true)
        {
            $sql="INSERT INTO admin (name, email, password, address,type) VALUES ('$name','$email','$password','$address','$type')";
             $result = mysqli_query($this->conn, $sql);
            if(! $result)
            {
                 
               return false;
            }
            else
            {
                 
               return true;
            }
        }
        else
        {
             
            return false;
        }
      
    
}
}