<?php 

    //index array
    echo 'index arry';

    $arr1=array("car1","car2","car3");
    // echo($arr1); - this will give error because echo used for to print strings

    // using html tag through php
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    //to print vaule of desired index
    echo 'value in index 0 is : ',$arr1[0];

    //to add vaule in desired index
    $arr1[3]="car4";

    echo "<pre>";
    print_r($arr1);
    echo "</pre>";


    //Associative array
    $arr2=array(
        'id'=>1,
        'name'=>'Paban',
        'age'=>23
    );
    echo 'associative arry';
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    //add key pair in array
    $arr2['address']='Dhaka';
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    //multidimantional array
    echo 'multidimantional array';
    $arr3=array(
        'id'=>1,
        'name'=>'Paban',
        'age'=>23,
        'contact'=>array("5641561456","684646354646")
    );
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";

    //another way to create array
    $arr4=[15,65,596,148,554];
    print_r($arr4);

    $arr5=[
        1=>["Paban","23",42574245],
        2=>["Masud","22",42574542],
        3=>["Rana","21",425455742],
        4=>["Ayan","19",427855742]
    ];

    echo "<pre>";
    print_r($arr5);
    echo "</pre>";


?>