<?php 
include_once __DIR__.'/userModel.php';

class UserController extends User{
    public function registerUser($name,$email,$address,$password){
        return $this->registerAccount($name,$email,$address,$password);
    }
    public function haveAccount($email)
    {
        return $this->accountInfo($email);
    }
    
}
?>