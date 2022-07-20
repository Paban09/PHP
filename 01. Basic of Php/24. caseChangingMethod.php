<?php 
    $str="masud Rana paban";

    //strings will convert to lower case
    echo strtolower($str)."<br>";

    //strings will convert to upper case
    echo strtoupper($str)."<br>";

    //strings first letter will convert to lower case
    echo lcfirst($str)."<br>";

    //strings first letter will convert to upper case
    echo ucfirst($str)."<br>";

    // every word's first letter will convert to upper case
    echo ucwords($str)."<br>";
?>