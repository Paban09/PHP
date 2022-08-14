<?php
    interface Num{
        function sum($a,$b);
    }

    interface Number{
        function mul($a,$b);
        function mod();
    }

    class Math implements Num,Number{
        public $x;
        public $y;

        public function __construct($a,$b)
        {
            $this->x=$a;
            $this->y=$b;
            echo "Math constructor <br/>";
        }

        public function sum($a,$b){
            echo $a+$b."<br/>";
        }

        public function mul($a,$b){
            echo $a*$b."<br/>";
        }

        public function div(){
            echo  $this->x/$this->y."<br/>";
        }

        public function mod(){
            echo  $this->x%$this->y."<br/>";
        }
    }

    $v1=new Math(12,6);
    $v1->sum(2,3);
    $v1->mul(2,3);
    $v1->div();
    $v1->mod();

?>