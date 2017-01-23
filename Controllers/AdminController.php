<?php
include_once 'Interfaces/IController.php';
include_once 'ObjectsClasses/Catagories.php';
include_once 'Models/ProductModel.php';
/*
 * class adminController , load admin interface and deal with all admin related tasks 
 */
class AdminController implements IController{
    /*
     * method constructor , to overload default costruct of the class
     */
    public function __construct() {
        
    }
    /*
     * method index , as define by interface IController
     * load view of admin home page
     * @return void
     */
    public function index() {
       
        require_once 'Views/Admin/Home.php';
         
    }
    /*
     * method productCatagoriesManagment() ,laod ProductCatagoriesView for to allow adimn to do catagory related tasks
     *  @return void
     */
    public function productCatagoriesManagment(){
        $obj=new ProductModel();
        $result=$obj->viewCatagories();
        
             if ($result->num_rows > 0)
             {
                 $cat_list= array();
                 while($row = $result->fetch_assoc())
                 {
                    $cat= new Catagories();
                    $cat->setId($row['cat_id']);
                    $cat->setName($row['name']);
                    array_push($cat_list, $cat);
                 }
                 require_once 'Views/Admin/ProductCatagoriesView.php';
                  
              }  
            else
              {
                  echo "No Catagory Found";
              }
            }
       
 }

