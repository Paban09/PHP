<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Registration;
use App\classes\Login;
if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }elseif ($_GET["page"]=='registration'){
        include 'pages/registration.php';
    } elseif ($_GET["page"]=='login'){
        include 'pages/login.php';
    }

}
elseif (isset($_POST['register_btn']))
{
//   echo "<pre>";
//   print_r($_POST);
//   print_r($_FILES);
//   echo "</pre>";

    $registration = new Registration($_POST,$_FILES);
    $message=$registration->newAdmin();
    include "$message";
}
elseif (isset($_POST['login_btn']))
{
//   echo "<pre>";
//   print_r($_POST);
//   echo "</pre>";
    $login=new Login($_POST);
    $message=$login->authenticateUser();

}

else{
    $home=new Home();
    $home->index();
}


