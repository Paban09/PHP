<?php

namespace App\classes;
use App\classes\User;
use App\classes\Example;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Students;

//use App\classes\Database;
class Home extends User implements Example,ExampleTwo
{
//    public $database;

    use Students;

// (public, private, protected) access modifier - encapsulation (use for secure issue)
    public $x=10;
    protected $y=20;
    private $z=30;

    public $user;



    public function index(){
//        $this->database=new Database();
//        $this->database->dbConnect();
        header("Location:action.php?page=login");
//        echo "Hello World";


//        $this->user=new User();
//        $this->user->login();
//        echo $this->user->userName;


        //this is own class object
//        echo $this->userName;
//        echo $this->password;

//        echo $this->add();
//        echo $this->test();
//        $this->userName="SEIP";
//        echo $this->userName;

    }


    protected function create(){
        echo 'in create';
    }

    private function manage(){
        echo 'in manage';
    }

    public function one()
    {
        echo "in one";
    }

    public function two()
    {
        echo "in two";

    }

    public function three()
    {
        echo "in three";
    }

    public function five()
    {
        echo "in five";
    }

    public function six()
    {
        echo "in six";
    }

    public function seven()
    {
        echo "in seven";
    }

    public function eight()
    {
        echo "in eight";
    }


    public function demo(){
        echo "in demo";
    }
}