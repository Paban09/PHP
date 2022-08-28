<?php


namespace App\classes;


abstract class Teacher
{
    //property declare kora jae, method newa jae
    //view theke object create kora jae na
    //class sequre korer jnno use kore

    public $a =10;
    public $b =50;

    public function add(){
        echo $this->a+$this->b;
    }

    public abstract function demo();

}