<?php

class Employee{
    // public $name;
    // protected $name;
    private $name;

    public function __construct($n="Undefined")
    {
        $this->name=$n;
        echo "From Employee Constructor name: ".$this->name."<br/>";
    } 

    // public function show(){
    //     echo $this->name."<br/>";
    // }


    protected function show(){
        echo $this->name."<br/>";
    }

}


class Manager extends Employee{
    public function get(){
        echo $this->name."<br/>";
    }
}

// $emp1=new Employee("Paban");
// $emp1->name="Ayan"; //overriding the old value, can't be done while porperties are protected
// $emp1->show(); //can't use the function when method is protected


// echo "creating derive class <br/>";

$man=new Manager("Masud");
$man->name="Rana"; //can't do this when properties are protected (ovverrinding the value)
$man->get();

?>