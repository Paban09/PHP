<?php
//   2 way of php coading -- pocedural, structured way of coading
//    echo "Hello world";


// require_once used for linkup one file with another file.
//there are 4 methods for link up - 1.include , 2.include once, 3.require, 4.require once
require_once  'vendor/autoload.php';
use App\classes\Home;

$home=new Home();
$home->hello();


?>