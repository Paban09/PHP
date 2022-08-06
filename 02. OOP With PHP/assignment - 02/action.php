<?php

    require_once "vendor/autoload.php";
    use App\classes\Category;
    use App\classes\Product;

    $category=new Category();
    $categories=$category->getAllCategory();

    if(isset($_GET["page"])){
        if($_GET["page"]=="home"){

            include "pages/home.php";
        }elseif ($_GET["page"]=="category"){
            $category_id=$_GET["id"];
            $product=new Product();
            $categorised_products=$product->getAllCategorisedProducts($category_id);
            include "pages/category.php";
        }elseif ($_GET["page"]=="details"){
            $product_id=$_GET["id"];
            $product=new Product();
            $product_details=$product->getProductDetails($product_id);
            include "pages/categorisedProductDetails.php";
        }

    }