<?php
    // steps of creating function => 1)declare 2) functoin define function

    // predefined function 
    $arr=[1,2,3];
    print_r($arr);

    //user defined function
    function greet(){
        echo "Welcome ";
    };
    greet();

    function greet2(){
        return "Welcome greet2 using return";
    };
    echo greet2();
?>