<?php
include_once __DIR__.'/vendor/db/db.php';

class User{
    public function accountInfo($email){
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='select * from user where email=:email';
        $statement=$con->prepare($sql);   
        $statement->bindParam(':email',$email);
        if($statement->execute())
        {
            $result= $statement->fetch(PDO::FETCH_ASSOC);
        }
        if(empty($result)){
            return $result=false;
        }else{
            return $result;
        }
    }

    public function registerAccount($name,$email,$address,$password){
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="insert into user(name,email,address,password) values (:name,:email,:address,:password)";
        $statement=$con->prepare($sql);
        $statement->bindParam(':name',$name);
        $statement->bindParam(':email',$email);
        $statement->bindParam(':address',$address);
        $statement->bindParam(':password',$password);
        if($statement->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }


}
?>