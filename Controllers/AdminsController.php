<?php
include_once 'Interfaces/IController.php';



class AdminsController implements IController{
    
    public function __construct() {
        
         
    }
    public function index() {
          require_once 'Views/General/Header.php';
        require_once 'Views/RegisterView.php';
    }
}

