<?php
include_once __DIR__.'/../layouts/sidebar.php';
include_once __DIR__.'/../controller/orderController.php';

$order_con=new OrderController();
$orders=$order_con->getOrder();

?>

    <main class="content">
		<div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Order</strong> Dashboard</h1>
            <?php
            $count=1;
            foreach($orders as $order){
            ?>
            <div class="card text-bg-success mb-3">
                <div class="card-header text-bg-warning mb-3">
                <h4>Order<?php echo $order['id'];?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-4">
                        <table class="table table-striped">
                            <tr>
                                <th>Name : </th>
                                <td><?php echo $order['uname']; ?></td>
                            </tr>
                            <tr>
                                <th>Email : </th>
                                <td><?php echo $order['email']; ?></td>
                            </tr>
                            <tr>
                                <th>Phone : </th>
                                <td><?php echo $order['phone']; ?></td>
                            </tr>
                            <tr>
                                <th>Address : </th>
                                <td><?php echo $order['address']; ?></td>
                            </tr>
                            <tr>
                                <th>Date : </th>
                                <td><?php echo $order['date']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Product Name :</th>
                                    <th>Price :</th>
                                    <th>Quantity :</th>
                                    <th>Amount :</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $order['pname']; ?></td>
                                    <td><?php echo $order['price']; ?></td>
                                    <td><?php echo $order['qty']; ?></td>
                                    <td><?php echo $order['amount']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>          
        </div>
	</main>


<?php
include_once __DIR__.'/../layouts/app_footer.php';
?>


