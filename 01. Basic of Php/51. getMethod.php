<?php

class Abc{
    // private $name="Mausud Rana Paban";
    private $data = ["name"=>"Masud","course"=>"php","fees"=>"1500"];

    public function __get($property){
        // echo "you are trying to access private or non existing property :: ($property)";
        if (array_key_exists($property,$this->data)){
            return $this->data[$property];
        }else{
            return "this key :: ($property) is not defined";
        }
    }
}

$obj=new Abc();
// $obj->name;
// print_r($obj->data);
echo $obj->name;

?>