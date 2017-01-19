<?php
include_once 'Interfaces/IModel';
include_once 'LoginModel.php';

/*
 *  class ModelFactory , return the object of model 
 */
class ModelFactory implements IModel{
    
    public function __construct($model="") {
       if($model!=""){
           try{
           $model= new $model;
           return $mdoel;
           } catch (Exception $e){
               echo $e->getMessage();
           }
       }
       else
       {
           return null;
       }
    }
    
    public function loadModel($model){
        
        if($model!=null){
           try{
           $model= new $model;
           return $model;
           } catch (Exception $e){
               echo $e->getMessage();
           }
       }
       else
       {
           return null;
       }
    }
   
}

