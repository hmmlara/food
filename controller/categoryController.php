<?php
include_once __DIR__. '/../model/category.php';
class CategoryController extends Category{
        public function getCategories(){
            return $this->getCategoriesList();
        }

        public function addCategory($name,$sub_cat_name)
        {
            return $this->createCategory($name,$sub_cat_name);

        }

        public function getCategory($id)
        {
            return $this->getCategoryInfo($id);
        }

        public function editCategory($id,$name,$sub_cat_name)
        {
            return $this->updateCategory($id,$name,$sub_cat_name);
        }

        public function deleteCategory($id)
        {
            return $this->deleteCategoryInfo($id);
        }
        
}
?>