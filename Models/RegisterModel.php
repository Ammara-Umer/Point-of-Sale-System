<?php

/*
 * class RegisterModel to register user in to data base
 * @property $conn to make database connection 
 */
class RegisterModel{
    private $conn;
    /*
     * constructor method , get db connection
     */
    public function __construct() {
         $db= Db::getInstance();
        $this->conn=$db->getConnection();
    }
     /*
      * method emailValidation , to check if the given email is available of the new user or not
      * @param String $email , the emailid
      * @return false , if someone alrady have same mail id
      * @return true , if someone don't have the same email id 
      */
    public function emailValidation($email){
        $sql="SELECT * FROM admin where email='$email'";
         try {
                $result = $this->conn->query($sql);
                if($result->num_rows > 0)
                {
                    return false;
                }
                else
                {
                    return true;
                }
         }  catch (Exception $e){
             return false;
         }
         
    }
    
    /*
     * method register , to add the new user in the database
     * @param Catagory $obj , custom object having all the information about new user
     * @return true if user added successfully
     * @return false if the registration process fail
     */
    public function register($obj){
        
        $email=$obj['email'];
        $name=$obj['name'];
        $password=$obj['password'];
        $address= $obj['address'];
        $type=$obj['type'];
        try{
       if($this->EmailValidation($email)==true)
        {
            $sql="INSERT INTO admin (name, email, password, address,type) VALUES ('$name','$email','$password','$address','$type')";
            $result = mysqli_query($this->conn, $sql);
                if(!$result)
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
        }  catch (Exception $e){
            return false;
        }
      
    
}
}