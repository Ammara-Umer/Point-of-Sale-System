<?php
include_once 'Interfaces/IController.php';



class AdminController implements IController{
    
    public function __construct() {
        require_once 'Views/General/Header.php';
        require_once 'Views/RegisterView.php';
         
    }
    public function index() {
          
    }
}

