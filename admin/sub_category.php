<?php
include_once __DIR__. '/../layouts/sidebar.php';
include_once __DIR__. '/../controller/subCategoryController.php';

$sub_cat_controller=new SubCategoryController();
$subcategories=$sub_cat_controller->getSubCategories();
?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Course</strong> Dashboard</h1>
                    <?php
                        if(isset($_GET['status']) && $_GET['status'] == 1)
                        {
                            echo "<div class='alert alert-success text-success' > New Course has been successfully </div>";
                        }
                        elseif(isset($_GET['status']) && $_GET['status'] == 2)
                        {
                            echo "<div class='alert alert-success text-primary' > New Course has been successfully Updated</div>";
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="add_course.php" class='btn btn-dark'>Add New Sub_Categories</a>
                            </div>
                        </div>
                    <div class="row">
                            <div class="col-md-12">
                                <table class='table table-striped' id='mytable'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Sub Category</th>

                                        </tr>  
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count=1;
                                            foreach($subcategories as $subcategory)
                                            {
                                                echo "<tr>";
                                                echo "<td>".$count++."</td>";
                                                echo "<td>" .$subcategory['sname']."</td>";
                                             
                                                echo "<td id='".$subcategory['id']."'> <a class='btn btn-warning mx-3'>View </a> <a class='btn btn-success mx-3' href='edit_subcategory.php?id=".$subcategory['id']."'>Edit </a> <button class='btn btn-danger mx-3 cbtn_delete'>Delete </button> </td>";
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
include_once __DIR__.'/../layouts/app_footer.php';		
?>