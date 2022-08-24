<?php

    function __autoload($class){
        require "./50. ".$class.".php";
    }

    $obj=new First();

?>