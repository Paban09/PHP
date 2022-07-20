<?php 

    $arr=[
        "Html"=>2500,
        "Css"=>1500,
        "Js"=>2900,
    ];

    print_r($arr);

    echo "<br/>";
    foreach($arr as $course=>$fees){
        echo "The fees of $course is $fees <br/>";
    };
?>