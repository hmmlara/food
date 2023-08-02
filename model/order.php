<?php
include __DIR__. '/../vendor/db/db.php';

class Order{
    public function getOrderList(){
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="select orders.id as id,user.name as uname,user.email as email,user.phone as phone,
        user.address as address,orders.order_date as date,product.name as pname,
        product.price as price,order_detail.qty as qty,orders.total_amount as amount
        from orders join user join order_detail join product where orders.user_id=user.id
        and orders.id=order_detail.order_id and order_detail.product_id=product.id";
        $statement=$con->prepare($sql);
        if($statement->execute())
        {
            $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;

    }

}
?>
