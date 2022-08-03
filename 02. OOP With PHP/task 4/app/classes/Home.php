<?php


namespace App\classes;


class Home
{
    public function index(){
        //header user to load any file
        // "?" means get array ($_GET)
        //page as index er vitor home as value niye jacche action.php page e
        header("Location: action.php?page=home");
    }
}