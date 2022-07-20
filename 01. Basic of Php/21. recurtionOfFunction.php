<?php
    function countNum($i){
       
       if($i<=100){
        
        echo $i."<br>";
        $i++;
        countNum($i);      
       }else{
        return;
       };
      
    };

    countNum(1);

?>