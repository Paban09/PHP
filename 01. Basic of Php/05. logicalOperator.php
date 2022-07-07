<?php 

    $x=2;
    $y=3;
    $z=!$x; //if true it would be false, if false it would be true (complementry)

    var_dump($z);
    // logical And Operator
    if($x==2 && $y==3){
        echo(" || Both are true form 1st checking || ");
    }else{
        echo("May be one is true form 1st checking || ");
    }

    // logical Or Operator
    if($x==2 && $y==1){
        echo("Both are true form 2nd checking || ");
    }elseif($x==2 || $y==1){
        echo("One is true form 2nd checking || ");
    }else{
        echo("None is true form 2nd checking || ");
    }

    // Ternary Or Operator

    $x>7 ? $flag="Yes" : $flag="No";
    var_dump($flag);
    

?>