<?php

    class Personal{
        
        public static $name;

        public static function details(){
            echo self::$name;
        }
    }

    Personal::$name="Masud";
    // Personal::details();

    class Accounts extends Personal{
        public function show(){
            echo parent::$name;
        }
    }

    $test=new Accounts();
    $test->show();
?>