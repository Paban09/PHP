<?php 

    //simple assign
    $a=5;
    $b=$a;
    $c=2;

    echo("Value of 'a' : ".$a." || ");
    echo "Value of 'b' : ".$b." || ";

    // add and assign
    $a+=$c; // a=5+2=7;
    echo("Value of 'a' in add and assign : ".$a." || ");

    //minus and assign
    $a-=$c; // a=7-2=5;
    echo("Value of 'a' in minus and assign : ".$a." || ");

    //multiple and assign
    $a*=$c; // a=5x2=10;
    echo("Value of 'a' in multiple and assign : ".$a." || ");

    //divison and assign
    $a/=$c; // a=10/2=5;
    echo("Value of 'a' in divison and assign : ".$a." || ");

    //modulas and assign
    $a%=$c; // a=5%2=1;
    echo("Value of 'a' in modulas and assign : ".$a." || ");

?>