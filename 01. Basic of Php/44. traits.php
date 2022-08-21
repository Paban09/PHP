<?php 

trait hello{
    public function sayHello(){
        echo "Hello Everyone from tarit 1 <br/>";
    }
}

trait hi{
    public function sayHi(){
        echo "Hi Everyone from tarit 2 <br/>";
    }
}

class Base1{
    // use hello;
    // use hi;
    use hello,hi; 
}

class Base2{
    use hello;
    use hi;
}

$b1 = new Base1();
$b1->sayHello();
$b1->sayHi();

$b2 = new Base2();
$b2->sayHello();
$b2->sayHi();

?>