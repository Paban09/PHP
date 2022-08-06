<?php


namespace App\classes;

class Home{
    public function callHomePage(){
        header("Location:action.php?page=home");
    }
}
