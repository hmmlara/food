<?php
ob_start();

include_once __DIR__ . '/../layouts/sidebar.php';
include_once __DIR__ . '/../controller/categoryController.php';


$id=$_GET['id'];
var_dump($id);
$cat_controller=new CategoryController();
$category=$cat_controller->getCategory($id);
var_dump($category);
// ob_start();

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $status=$cat_controller->editCategory($id,$name);
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
                                    <div class='mt-3'>
                                        <button class="btn btn-dark" name='submit'>Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>


				</div>
			</main>
?>