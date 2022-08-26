<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Registration;
use App\classes\News;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $news=new News();
        $allNews=$news->getAllNews();
        include 'pages/home.php';
    }elseif ($_GET["page"]=='registration'){
        include 'pages/registration.php';
    } elseif ($_GET["page"]=='login'){
        include 'pages/login.php';
    } elseif ($_GET["page"]=='enter-news'){
        include 'pages/enter-news.php';
    }elseif($_GET['page'] == 'edit')
    {
        $news=new News();
        $singleNews=$news->getNewsById($_GET['id']);
        include 'pages/edit.php';
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
    $news=new News();
    $allNews=$news->getAllNews();
    include 'pages/dashboard.php';

}elseif (isset($_POST['enter_news_btn']))
{
//   echo "<pre>";
//   print_r($_POST);
//    print_r($_FILES);
//   echo "</pre>";

    $news = new News($_POST,$_FILES);
    $message=$news->createNews();
    $allNews=$news->getAllNews();
    include "$message";
}elseif (isset($_POST['update_news_btn']))
{
//   echo "<pre>";
//   print_r($_POST);
//    print_r($_FILES);
//   echo "</pre>";

    $news=new News($_POST,$_FILES);
    $message=$news->updateNews();
    $allNews=$news->getAllNews();
    include "$message";
}
else{
    $home=new Home();
    $home->index();
}


