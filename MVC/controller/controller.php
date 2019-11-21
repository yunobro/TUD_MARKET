<?php
    class Controller{

       private $model;

       public function __construct($model)
       {
           $this->model = $model;
       }

       public function getLogin(){
           include 'view/login.php'; //display login form
       }
       public function userLogin(){
           echo "asd";
           $result = $this->model->userLogin(); // calls the userLogin function from the model class and store the return value
           $message = $this->model->message; // gets any messages generated by the model to be returned to the view

           if($result){
               include 'view/user_home.php'; //if login successful
           }else{
               include 'view/login.php'; //if login un
           }
       }
    }