<?php
include_once __DIR__ . '/../layouts/sidebar.php';
include_once __DIR__. '/../controller/categoryController.php';
include_once __DIR__ . '/../controller/subCategoryController.php';

$cat_con=new CategoryController();
$categories=$cat_con->getCategories();

$sub_cat_con=new SubCategoryController();

?>