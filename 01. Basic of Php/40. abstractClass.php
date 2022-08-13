<?php

    abstract class Number {
        protected $name;
        protected $x;
        protected $y;
        
        public function __construct($a,$b) {
            $this->x = $a;
            $this->y = $b;
        }
        abstract protected function add();
    }
  
   
    class Sum extends Number{
        public function add(){
            echo $this->x+$this->y;
        }
    }

    $addition = new Sum(2,3);
    echo $addition->add();


?>