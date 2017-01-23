<?php
include_once 'Interfaces/IController.php';
include_once 'Models/ProductModel.php';
include_once 'ObjectsClasses/Catagories.php';
/*
 * class CatagoryController , an admin type class to help admin to do product's catagory related tasks
 */
class CatagoryController implements IController{
    
    public function __construct() {
        ;
    }
    /*
     * method index , do nothing here , but define due to Implementing IController
     */
    public function index(){
        
    }
    /*
     * method laodAddCatagoryView() call by ajax call and load AddCatagoryView
     */
    public function loadAddCatagoryView(){
        require_once 'Views/Admin/AddCatView.php';
    }
    /*
     * method isUniqueCatagory , call when add new catagory , to check if catagroy is new or aleady exist
     * @return echo"exist" id catagory aleady exist otherwise call insertCatagory
     *  
     */
     public function isUniqueCatagory(){
       $name=$_POST['name'];
       $obj= new ProductModel();
       if($obj->isExistCatagory("name",$name))
       {
           
           
           $this->insertCatagory($name);
       }
       else
       {
           echo"exist";
       }
    }
    /*
     * method insertcatagory to call model to request to insert a new catagory in to the database
     * @param String $name , name of catagory want to insert
     * @return echo"success" if added catagory succesfully
     * @return echo "fail" if the process fail
     */
    private function insertCatagory($name){
      
       $obj= new ProductModel();
       if($obj->insertCatagory($name))
       {
           echo "success";
       }
       else
       {
           echo"fail";
       }
        
    }
     /*
     * method  loadDelCatagoryView() call by ajax call and load  DelCatView
     */
     public function loadDelCatagoryView(){
        require_once 'Views/Admin/DelCatView.php';
    }
    /*
     * method isCatagoryExist , to delete catagory , to check if catagroy  aleady exist or not
     * @return echo"unavailable" if catagory do not exist otherwise call deleteCatagory
     *  
     */
    public function isCatagoryExist(){
       $id=$_POST['id'];
       $obj= new ProductModel();
       if($obj->isExistCatagory("cat_id",$id))
       {
       
          echo"unavialable";
       }
       else
       {
            $this->deleteCatagory($id);
           
       }
    }
    /*
     * method deleteagory to call model to request to delete catagory from the database
     * @param int $id , id of catagory want to delete
     * @return echo"success" if deleted catagory succesfully
     * @return echo "fail" if the process fail
     */
    public function deleteCatagory($id){
     
      $obj= new ProductModel();
       if($obj->deleteCatagory($id)== true){
          echo "success";
       }
       else{
           echo "Not";
       }
    }
    /*
     * metod loadUpdatecatagoryView , get present data against the requested id of catagory and display in UpdateCatView
     * @return void
     * 
     *  */
    public function loadUpdateCatagoryView( ){
        $id= $_GET['id'];
        $cat= new Catagories();
         $obj= new ProductModel();
         $result=$obj->viewCatagoryById($id);
         if($result!=null){
             while($row = $result->fetch_assoc())
                 {
                   
                    $cat->setId($row['cat_id']);
                    $cat->setName($row['name']);
                    
                 }
               require_once 'Views/Admin/UpdateCatView.php';
         }
         else
         {
             require_once 'Views/General/AlreadyExist.php';
         }
    }
    /*
     * method upadteCatagory
     * get id and name of catagory by post , request form model method updateCatagory to
     * update the name of the catagory against the id
     * @return echo"success" if updated catagory succesfully
     * @return echo "fail" if the process fail
     */
    public function updateCatagory(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $obj= new ProductModel();
        if($obj->updateCatagory($id,$name)==true){
            echo "success";
        }
        else
        {
            echo "fail";
        }
    }
}

