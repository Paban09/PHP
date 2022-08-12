<?php

    class Fruits{
        public function __construct()
        {
            echo "from Fruit Class <br/>";
        }
    }

    class Vegetables extends Fruits{
        public function __construct()
        {
            echo "from Vegetable Class <br/>";
        }
    }

    $f=new Fruits;
    $v=new Vegetables;

?>