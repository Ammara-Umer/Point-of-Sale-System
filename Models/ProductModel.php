<?php
include_once 'config.php';
/*
 * class Product model , to deal with all the product related crud operations and return their reslults to
 * the caller controller
 * @property private $conn , to store database connection 
 */
class ProductModel {
    private $conn;
    /*
     * constructor method , get db connection
     */
    public function __construct(){
        $db= Db::getInstance();
        $this->conn=$db->getConnection();
    }
    /* method viewCatagories to give list of all the product catagories to the user
     * @return $result , a list of catagory to the calling controller's method 
     */
    public function viewCatagories(){
        $sql="SELECT * FROM catagories";
        try{
            $result = $this->conn->query($sql); 
        } catch (Exception $ex) {

        }
     
          if($result->num_rows > 0)
          {
            
              return $result;
          }
          else
          {
             
              return null;
          }
    }
    /*
     * method insertCatagory , to insert a new catagory 
     * @param $string $name , is the name to new catagory
     */
    public function insertCatagory($name){
        $sql="INSERT into catagories (name) Values('$name')";
        try{
               $result = mysqli_query($this->conn, $sql);
        } catch (Exception $ex) {

        }
     
            if(! $result)
            {
                 
               return false;
            }
            else
            {
                 
               return true;
            }
    }
     /*                     
     * method isExistCatagorty , take name of field and value to comapre in catagory table
     * @params String $field is the name of field , the field which one caller want to search
     * @param String $var value of field , the caller want to find in the field
     * @return false if value match
     * @return true if value doesn't match
     */
    public function isExistCatagory($field, $var){
       $sql="SELECT * FROM catagories where $field='$var'";
       try{
            $result = $this->conn->query($sql);
        } catch (Exception $ex) {

        }
      
          if($result->num_rows > 0)
          {
           
           return false;
          }
          else
          {
             
              return true;
          }
            
    }
    /* 
     * method delcatagory , take id of catagory and del it if it exist
     * @param int $id , value against which user want to del record
     * @return true if data deleted successfully
     * @return false if deletion process fail
     */
    public function deleteCatagory($id){
        $sql="DELETE FROM catagories WHERE cat_id='$id'";
        try{
             if(mysqli_query($this->conn, $sql))
        {
            return true;
        }
        else{
            return false;
        }
        } catch (Exception $ex) {
            return false;
        }
        
    }
     /* 
     * method viewCatagoryByid , take id of catagory give the data in the database against that id 
     * @param int $id , value against which user want to search record
     * @return $result , list of data in the database against the given id
     * @return null if found nothing
     */
    public function viewCatagoryById($id){
        $sql="SELECT * FROM catagories WHERE cat_id='$id'";
      $result = $this->conn->query($sql);
          if($result->num_rows > 0)
          {
            
              return $result;
          }
          else
          {
             
              return null;
          }
    }
     /* 
     * method updateCatagory , take name of catagory and  id of catagory to update name 
     *  in the database against that id 
     * @param int $id , value against which user want to upadte record
     * @param String $name the updated name of the catagory
     * @return true if data updated successfully
     * @return false if updation process fail
     */
    public function updateCatagory($id, $name){
        $sql="UPDATE catagories set name='$name' WHERE cat_id='$id'";
         if(mysqli_query($this->conn, $sql))
        {
            return true;
        }
        else{
            return false;
        }
    }
}

