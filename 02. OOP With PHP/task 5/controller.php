<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;

$category=new Category();
$categories=$category->getAllCategoty();

if(isset($_GET['page']))
{
    if($_GET['page'] == "home")
    {
        $product=new Product();
        $products=$product->getAllProducts();
        include "pages/home.php";
    }elseif ($_GET['page'] == "category"){
        $categoryId=$_GET['id'];
        $product=new Product();
        $categoryProducts=$product->getProductByCategoryId($categoryId);
        include "pages/category.php";
    }

}