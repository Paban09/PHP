<?php

    class Base{
        public $name="Masud";
        public $x;
        public $y;

        public function __construct($a,$b)
        {
            $this->x=$a;
            $this->y=$b;
        }

        public function details(){
            echo $this->name."<br/>";
        } 

        public function cal(){
            echo $this->x+$this->y."<br/>";
        }
    }
    
    class Derive extends Base{

        public $name="Paban";

        public function cal(){
            echo $this->x/$this->y."<br/>";
        }

        public function details(){
            echo $this->name."<br/>";
        } 
    }

    $b=new Base(10,5);
    $b->cal();
    $b->details();

    $d=new Derive(10,5);
    $d->cal();
    $d->details();
    
    

?>