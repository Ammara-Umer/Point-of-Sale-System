<?php

include 'Interfaces/IController';
class NotFoundController implements IController{
    public function index() {
        require_once 'Views/Errors/NotFoundController.php';
    }
}

