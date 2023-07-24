<?php
include_once "layouts/sidebar.php";
include_once "controllers/categoryController.php";

$category_controller=new CategoryController();
$category_list=$category_controller->getCategories();
// var_dump($customer_list);


?>
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Categories</strong> Information</h1>

                    <div class="row my-3">
                        <div class="col-md-12">
                        <?php
                             if(isset($_GET['status']) && $_GET['status']==1)
                             {
                                 echo "<div class='text-success bg-warning'> New Category is succesfully created </div>";
                             }
                             else if(isset($_GET['update_status']) && $_GET['update_status']==1)                 
                             {
                                 echo "<div class='text-success bg-warning'> Category is succesfully updated</div>";
                             }

                    ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <a href="edit_category.php" class="btn btn-dark">Add New Category</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>SubCategory Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    <?php
                                        for($row=0;$row<sizeof($category_list);$row++)
                                        {
                                            echo "<tr id='".$category_list[$row]['categoryNumber']."'>";
                                                echo "<td>". ($row+1). "</td>";
                                                echo "<td>".$category_list[$row]['categoryName']. "</td>";
                                                echo "<td>".$category_list[$row]['SubCategory Name']. "</td>";
                                                echo "<td><a class='btn btn-success mx-2' href='view_category.php?id=".$category_list[$row]['customerNumber']."'>View</a><a class='btn btn-warning mx-2' href='edit_customer.php?id=".$category_list[$row]['customerNumber']."'>Edit</a><a class='btn btn-danger delete mx-2' >Delete</a></td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>
			</main>

<?php
include_once __DIR__. "/../layouts/app_footer.php";
?>