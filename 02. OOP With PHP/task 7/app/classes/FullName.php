<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;

    public function __construct($post)
    {
        $this->firstName=$post["firstName"];
        $this->lastName=$post["lastName"];
    }

//    public function __construct()
//    {
//        $this->firstName="Masud";
//        $this->lastName="Rana";
//    }

    public function getFullName(){
        return $this->firstName." ".$this->lastName;
    }
}