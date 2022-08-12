<?php



class Emolyee{
    public $name;
    public $age;
    public $salary;

    public function __construct($n,$a,$s)
    {
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;

    }
    public function getAllData(){
        echo "<h1>Employee Profile</h1> <br/>";
        echo "name : ". $this->name."<br/>";
        echo "age : ".$this->age."<br/>";
        echo "salary : ".$this->salary."<br/>";
    }

}


class Manager extends Emolyee{
    // public function __construct()
    // {
    //     echo "Employee Constructor";
    // }

    public $ta=1000;
    public $phone=500;
    public $totalSalary;


    public function getAllData(){
        $this->totalSalary=$this->salary+$this->ta+$this->phone;

        echo "<h1>Manager Profile</h1><br/>";
        echo "name : ". $this->name."<br/>";
        echo "age : ".$this->age."<br/>";
        echo "salary : ".$this->totalSalary."<br/>";
    }
}


$m=new Manager("Paban",25,35000);
$m->getAllData();


$e=new Emolyee("Masud",23,25000);
$e->getAllData();



?>
