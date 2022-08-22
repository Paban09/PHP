<?php

class Hello{
    public function sayHello(){
        echo"Hello Everyone";
    }
}

class Hi{
    public function sayHi(){
        echo"Hi Everyone";
    }
}

function wow(Hello $c){
    $c->sayHello();
}

$test=new Hello();
wow($test);

?>