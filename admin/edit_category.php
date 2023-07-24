<?php
ob_start();

include_once __DIR__ . '/../layouts/sidebar.php';
include_once __DIR__ . '/../controller/categoryController.php';


$id=$_GET['id'];
$cat_controller=new CategoryController();
$category=$cat_controller->getCategory($id);
// ob_start();

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $sub_cat_name=$_POST['sub_cat_name'];
    $status=$cat_controller->editCategory($id,$name,$sub_cat_name);
    if($status)
    {
        // header('location:category.php');
        $message=1;
        echo '<script> location.href="categories.php?status='.$message.'"</script>';
    }
}
?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Edit Category</strong> Dashboard</h1>

                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="post">
                                    <div>
                                        <label for="" class='form-label'>Category Name</label>
                                        <input type="text" name="name" id="" class='form-control' value="<?php echo $category['name']; ?>">
                                    </div>
                                    <div>
                                        <label for="" class="form-label">SubCategory Name</label>
                                        <input type="text" name="sub_cat_name" class="form-control" value="<?php echo $category['sub_cat_name']; ?>">
                                    </div>
                                    <div class='mt-3'>
                                        <button class="btn btn-dark" name='submit'>Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>


				</div>
			</main>
?>