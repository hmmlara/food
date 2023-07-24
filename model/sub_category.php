<?php
include_once __DIR__."/../vendor/db.php";

class SubCategory{
    public function getSubCategoryList(){
                //1. db connection
                $conntction=Database::connect();
                $conntction->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //2.write sql
                $sql="select sub_category.id as id,sub_category.name as sname,category.name as catname,sub_category.cat_id as cid from sub_category join category on sub_category.cat_id=category.id";
                $statement=$conntction->prepare($sql);
    
                //3.statement execute
                if($statement->execute())
                {
                           //4.result
                           //data fetch()=> one row,fetchAll()=>multiple rows
                           $result=$statement->fetchAll(PDO::FETCH_ASSOC); 
        
                }
                return $result;
    }
    
    // public function getNumCourse()
    // {
    //                 //1. db connection
    //                 $con=Database::connect();
    //                 $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //                 //2.write sql
    //                 $sql="select category.name as name,count(course.id) as total from course join category on course.cat_id=category.id group by course.cat_id"; 
    //                 $statement=$con->prepare($sql);
    
    //                 //3.statement execute
    //                 if($statement->execute())
    //                 {
    //                            //4.result
    //                            //data fetch()=> one row,fetchAll()=>multiple rows
    //                            $result=$statement->fetchAll(PDO::FETCH_ASSOC); 
            
    //                 }
    //                 return $result;
    // }
    public function addNewSubCategory($name,$cat,$outline)
    {
                        //1. db connection
                        $con=Database::connect();
                        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        //2.write sql
                        $sql='insert into sub_category(name,cat_id) values (:name,:cat)';
                            $statement=$con->prepare($sql);
                            $statement->bindParam(':name',$name);
                            $statement->bindParam(':cat',$cat);
                            
    
                        //3.statement execute
                        if($statement->execute())
                        {
                            return true;            
                        }else
                        {
                            return false;
                        }
    }
    
    // public function getCourseInfo($id)
    // {
    //                     //1. db connection
    //                     $con=Database::connect();
    //                     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //                     //2.write sql
    //                     $sql='select * from course where id=:id';
    //                     $statement=$con->prepare($sql);
    //                     $statement->bindParam(':id',$id);
    
    //                     if($statement->execute())
    //                     {
    //                         $result=$statement->fetch(PDO::FETCH_ASSOC);
    //                         return $result;
    //                     }
    // }
    
    
    // public function courseCat($id){
    //     $con=Database::connect();
    //     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    //     //2.write sql
    //     $sql = "select category.name,course.id from category join course on category.id = course.cat_id where course.id=:id";
       
    //     $statement=$con->prepare($sql);
    //     $statement->bindParam(':id',$id);
        
    //     //3.sql execute
    //     if($statement->execute())
    //     {
    //         $result = $statement->fetch(PDO::FETCH_ASSOC);
    //         return $result;
    //     }
    // }
    
    // public function updateCourse($id,$name,$category,$outline)
    // {
    //                             //1. db connection
    //                             $con=Database::connect();
    //                             $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //                             //2.write sql
    //                             $sql='update course set name=:name,cat_id=:category,outline=:outline where id=:id';
    //                             $statement=$con->prepare($sql);
    //                             $statement->bindParam(':id',$id);
    //                             $statement->bindParam(':name',$name);
    //                             $statement->bindParam(':category',$category);
    //                             $statement->bindParam(':outline',$outline);
    //                             if($statement->execute())
    //                             {  
    //                                 return true;
    //                             }
    //                             else 
    //                             {
    //                                 return false;
    //                             }
    // }
    
    // public function catName(){
    //     $con=Database::connect();
    //     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //     //2.write sql
    //     $sql = "select course.cat_id,category.name from category join course where category.id = course.cat_id group by name";
    //     $statement=$con->prepare($sql);
        
        
    //     //3.sql execute
    //     if($statement->execute())
    //     {
    //         $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     return $result;
    // }
    

// class Subcategory {
//     private $id;
//     private $name;
//     private $categoryId;

//     public function __construct($id, $name, $categoryId) {
//         $this->id = $id;
//         $this->name = $name;
//         $this->categoryId = $categoryId;
//     }

//     public function getId() {
//         return $this->id;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getCategoryId() {
//         return $this->categoryId;
//     }
// }

// // Usage in the Controller
// $category = new Category(1, "Electronics");
// $subcategory1 = new Subcategory(1, "Mobile Phones", 1);
// $subcategory2 = new Subcategory(2, "Laptops", 1);
// $category->addSubcategory($subcategory1);
// $category->addSubcategory($subcategory2);

// // Output the category and its subcategories
// echo "Category: " . $category->getName() . "\n";
// echo "Subcategories:\n";
// foreach ($category->getSubcategories() as $subcategory) {
//     echo "- " . $subcategory->getName() . "\n";
// }
}

?>
