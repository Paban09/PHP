<?php
    $cars=array(
        0 =>"Car1",
        1=>"Car2",
        2=>"Car3",
        3=>"Car4",
        4=>"Car5",
        5=>"Car6"
    );

    var_dump(is_array($cars));
    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    $x=5;
    if(is_array($x)){
        echo "x is an array. ";
    }else{
        echo "x is not an array. ";
    };
    echo "<br>";
    echo "If Car4 is available return the key value: ",array_search('Car4',$cars);


    $cars2=array_slice($cars,2);
    echo "<pre>";
    print_r($cars2);
    echo "</pre>";

    
    $chunked=array_chunk($cars,2);
    echo "<pre>";
    print_r($chunked);
    echo "</pre>";

    $poped=array_pop($cars);
    echo "<pre>";
    print_r($poped);
    echo "</pre>";

    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    array_push($cars,"Car7");
    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    $car=array(
        "A"=>"Car1",
        "B"=>"Car2",
        "C"=>"Car3",
        "D"=>"Car4",
        "E"=>"Car5",
        "F"=>"Car6"
    );

    echo "Is the car is available or not : ",var_dump(array_key_exists("B",$car));

    echo "<br>";
    echo "No of cars available: ",count($car);
    

    

?>