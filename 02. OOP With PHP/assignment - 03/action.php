<?php
    
    include_once "./dbconfig.php";

    require_once "vendor/autoload.php";
    use App\classes\Login;
   
    if(isset($_GET["page"])){
        if($_GET["page"]=="home"){

            include "pages/home.php";
        }elseif($_GET["page"]=="login"){
            
            include "pages/login.php";
        }elseif($_GET["page"]=="dashboard"){

            include "pages/seller_dashboard.php";
        }
    }
    elseif (isset($_POST["login_btn"])){

//        echo '<pre>';
//        print_r($_POST);

        $login=new Login($_POST);
        $login->authenticateUser();
    }


?>