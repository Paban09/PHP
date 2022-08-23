<?php

class Abc{

    public function first(){
        echo "this is from first function <br/>";
        return $this;
    }
    public function second(){
        echo "this is from second function <br/>";
        return $this;

    }
    public function third(){
        echo "this is from thired function <br/>";
        return $this;

    }

}

$obj=new Abc();
$obj->first()->second()->third();

?>