<?php


namespace App\classes;


trait Students
{
    //object create kora jae na

    public $name="mridul";
    public $email="mridul@gmail.com";
    public $mobile="22554424";

    public function test(){
        echo $this->name;
    }
}