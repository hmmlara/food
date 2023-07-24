<?php
include_once __DIR__."/../model/sub_category.php";
    class SubCategoryController extends SubCategory{
        public function getSubCategories(){
            return $this->getSubCategoryList();
        }

        public function addSubCategory($name,$cat)
        {
            return $this->addNewSubCategory($name,$cat);
        }

    }


?>