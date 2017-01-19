<?php
include_once 'Interfaces/IController.php';
include_once 'Models/ModelFactory.php';


class AdminController implements IController{
    
    public function __construct() {
       
    }
    public function index() {
        require_once 'Views/Admin/Home.php';
    }
}

