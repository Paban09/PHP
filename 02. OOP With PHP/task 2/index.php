<?php

//   2 way of php coading -- procedural, structured way of coading
//    echo "Hello world";


//oop
//1. before create anything create specification (class)
//2. for specification -> i)information about that(property), ii)activity of that thing(method)
//3. Specification ==== Class

//dependency manager (Composer)
//auto-load works to load all the class in the project
//psr-4 is a convention or process by which composer automatically load all the classes
//"App\\": "app//" ("namespace 1st word\\":"class root directory//")


//require_once is used for linked with index.php with auto-load.php
require_once  'vendor/autoload.php';

use App\classes\HelloWorld;

$a=new HelloWorld("Masud Rana Paban "); //this will call construct
$a->index(); // -> php object sign //calling class method

