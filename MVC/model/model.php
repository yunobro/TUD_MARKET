<?php
    class Model{
        public $message; // used to return any messages generated by the model to the view
        public function userLogin()
        {
            $this->message = ''; //message is empty by default to prevent any error messages

            if(isset($_POST['action']) && $_POST['action'] === 'Login'){ // checks if the login button is selected in the view
                if($_POST['email'] == 'asd@asd.com' && $_POST['password'] === 'asd'){// success if match
                    $this->message = 'Success';
                    return true;
                }else{
                    $this->message = 'invalid';
                    return false;
                }
            }
        }
    }