<?php

namespace App\classes;

class Home
{
    public function index()
    {
        header("Location: controller.php?page=home");
    }
}
