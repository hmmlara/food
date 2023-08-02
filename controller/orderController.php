<?php
include_once __DIR__ .'/../model/order.php';

class OrderController extends Order {
    public function getOrder(){
        return $this->getOrderList();
    }

}
?>