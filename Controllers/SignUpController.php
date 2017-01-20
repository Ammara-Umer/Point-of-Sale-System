
<?php
include 'Interfaces/IController.php';


class SignUpController implements IController{
    
    public function __construct() {
       
    }
    public function index() {
        echo "Sign Up Controller+++";
    }
}

