<?php


namespace App\classes;

class User
{
    public $userName='pabon';
    protected $password="123456";
    private $accessLabel="admin";

    public function login(){
        echo "login";
    }

    protected function logout(){
        echo "in logout";
    }

    private function changePassword(){
        echo "change password";
    }
}

