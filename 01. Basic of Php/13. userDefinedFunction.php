
<?php 

    function ap($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }


    $arr=array(
        "Car1",
        "Car2",
        "Car3",
        "Car4",
        "Car5",
        "Car6"
    );
    
    $arr2=array(
        "Car7",
        "Car8",
        "Car9",
        "Car10",
        "Car11",
        "Car12"
    );

    ap($arr);
    ap($arr2);


    function vote($age){
        if($age >=18 && $age <=65){
            return "You can vote";
        }else{
            return "You can't vote";
        }
    };

    echo "<br/>".vote(25)."<br/>";

?>