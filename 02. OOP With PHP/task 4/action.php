<?php

//    echo "<pre>";
//    print_r($_GET);

require_once 'vendor/autoload.php';
use App\classes\HelloWorld;
use App\classes\Product;

    //isset er vitor er varible er value thakle true na thakle flase
    if(isset($_GET['page'])){
        if($_GET['page']=="home"){
            //include er kaj hocche page link kora
            $helloWorld=new HelloWorld();
            $students=$helloWorld->getAllStudent();
            include "pages/home.php";
        }
        elseif ($_GET['page']=="product"){
            $product=new Product();
            $products=$product->getAllProduct();
            include "pages/product.php";
        }
}