<?php

namespace App\classes;


class Home
{
    public function index(){

        session_start();
        $_SESSION['a']="seip";
        header("Location:action.php?page=home");
    }

}