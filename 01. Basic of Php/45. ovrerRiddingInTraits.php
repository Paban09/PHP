<?php 

trait hello{
    public function sayHello(){
        echo "Hello Everyone from hello tarit <br/>";
    }
}

trait hi{
    public function sayHello(){
        echo "Hello Everyone from hi tarit <br/>";
    }
}


class Base1{
    public function sayHello(){
        echo "Hello Everyone from Base 1 <br/>";
    }
}

class Child1 extends Base1{
    use hello,hi{
        hello::sayHello insteadof hi;
        hi:: sayHello as newHello; //renaming
    }
    // public function sayHello(){
    //     echo "Hello Everyone from Child 1 <br/>";
    // }
}

$obj=new Child1();
$obj->sayHello();
$obj->newHello();


?>