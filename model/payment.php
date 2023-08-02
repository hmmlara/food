<?php
include __DIR__. '/../vendor/db/db.php';

class Payment{
    public function getPaymentList(){
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="select * from payment";
        $statement=$con->prepare($sql);
        if($statement->execute())
        {
            $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;

    }

    public function createPayment($payment_type)
    {
                 //1. db connection
                 $con=Database::connect();
                 $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                 //2.write sql
                 $sql='insert into payment(payment_type) values (:payment_type)';
                 $statement=$con->prepare($sql);
                 $statement->bindParam(':payment_type',$payment_type);
                 if($statement->execute())
                 {
                     return true;
                 }
                 else{
                     return false;
                 }
    }


    public function getPaymentInfo($id)
    {
        //1. db connection
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //2.write sql
        $sql='select * from payment where id=:id';
        $statement=$con->prepare($sql);
        $statement->bindParam(':id',$id);
        if($statement->execute())
        {
            $result=$statement->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function updatePayment($id,$payment_type)
    {
        //1. db connection
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //2.WRITE SQL
        $sql='update payment set payment_type=:payment_type where id=:id';
        $statement=$con->prepare($sql);
        $statement->bindParam(':payment_type',$payment_type);
        $statement->bindParam(':id',$id);
        if($statement->execute())
        {
            return true;
        }
        else{
            return false;
        }
    }

  
    public function deletePaymentInfo($id)
    {
        //1. db connection
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //2.write sql
        $sql='delete from payment where id=:id';
        $statement=$con->prepare($sql);
        $statement->bindParam(':id',$id);
        try{
            $statement->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }

}
?>

