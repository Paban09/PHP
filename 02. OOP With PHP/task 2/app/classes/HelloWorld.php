<?php


//namespace is syntex which creates virtual directory of class
namespace App\classes;


class HelloWorld
{

    /*
            3 major rule to declare variable :
                1. start with $sign
                2. no number in first
                3. a-z, A-Z, 0-9

            3 standard rule to declare variable :
                1. small letter
                2. meaningful
                3. readable

            4 types of Data-type
                1.string
                2.intizer
                3.diouble
                4.boolean

             4 types of Operator
                1. Arithmetic Operation{+,-,*,/,%,++,--,(-)}
                2. Assignment Operator {=,+=,-=,*=,/=,%=,.=}
                3. Conditional Operator {>,>=,<=,==,!=,===,!==}
                4. Logical Operator {&&, ||, !}
     */


    //(variable == property == attribute)
    public $message;
    public $firstName;
    public $lastName;
    public $x;
    public $y;

    //$this is own class object or can say self object
    public function __construct($data){
        $this->message="$data";
    }

    //(activity == function == behaviour == method)
    public function index(){
        //echo $this->message;


        $this->firstName="Rahman";
        $this->firstName="Rifat";

        $this->lastName="Ayan";

        $this->x=10;
        $this->y=20;

        echo "$this->firstName"." &nbsp"."$this->lastName";
        echo "<br/>";
        echo gettype($this->firstName);
        echo "<br/>";

        echo "Sum : ";
        echo $this->x+$this->y;
        echo "<br/>";

        echo "Min : ";
        echo $this->x-$this->y;
        echo "<br/>";

        echo "Mul : ".$this->x*$this->y;
        echo "<br/>";

        echo "Div : ".$this->x/$this->y;
        echo "<br/>";

        //post increment
        echo "value of x : ".$this->x++;
        echo "<br/>";
        echo "New value of x after post increment : ".$this->x;
        echo "<br/>";

        //pre incerment
        echo "value of y : ".$this->y;
        echo "<br/>";
        echo "New value of y after pre increment: ".++$this->y;
        echo "<br/>";


        echo "x=x+y : ".$this->x+= $this->y; //x=x+y
        echo "<br/>";

        echo "x=x-y : ".$this->x-= $this->y; //x=x-y
        echo "<br/>";

        echo "x=x*y : ".$this->x*= $this->y; //x=x*y
        echo "<br/>";

        echo "x=x/y : ".$this->x/= $this->y; //x=x/y
        echo "<br/>";

        echo "x=x%y : ".$this->x%= $this->y; //x=x%y
        echo "<br/>";

        echo "concat : ".$this->x.= $this->y; //concat
        echo "<br/>";

        echo $this->x>$this->y; //return boolean (1=true, __=false)

    }
}