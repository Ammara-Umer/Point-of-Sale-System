
<?php
include_once 'Interfaces/IController.php';


class UserController implements IController{
    
    public function __construct() {
       
    }
    public function index() {
        echo "User Controller+++";
    }
}

