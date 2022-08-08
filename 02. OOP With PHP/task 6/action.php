<?php

require_once "vendor/autoload.php";
use App\classes\Brand;
use App\classes\Category;
use App\classes\Product;

$category= new Category();
$categories=$category->getAllCategory();
$product=new Product();

if(isset($_GET["page"])){
    if($_GET["page"]=="home"){
        $products=$product->getAllProduct();
        include("pages/home.php");
    }elseif ($_GET["page"]=="detail"){
        $product_id=$_GET['id'];
        $singleProduct=$product->getProductById($product_id);
        include("pages/detail.php");
    }elseif ($_GET["page"]=="category"){
        $category_id=$_GET['id'];
        $products=$product->getProductByCategory($category_id);
        include("pages/category.php");
    }
}