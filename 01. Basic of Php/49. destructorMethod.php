<?php

class Abc{
    public function __construct()
    {
        echo "This is from  constructor <br/>";
    }

    public function hello(){
        echo "Hello everyone <br/>";
    }

    public function __destruct()
    {
        echo "This is from destructor <br/>";
    }
}

$obj = new Abc();
$obj2=new Abc();
$obj->hello();
$obj->hello();
$obj->hello();


?>