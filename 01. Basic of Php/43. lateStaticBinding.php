<?php

class Employee{
    protected static $name="Masud";
    public function show(){
        echo static::$name; //using self keyword will echo "Masud"
    }
}

class Manager extends Employee{
    protected static $name="Paban";

}

$m1=new Manager();
$m1->show();


?>