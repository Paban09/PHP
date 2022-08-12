<?php

// $n=0;




// if($n>0){
//     $div=2/$n;
//     echo $div;
// }else{
//     echo"Enter the vaslid Number";
// }




// try{
//     if($n<=0){
//        throw new Exception("Enter the valid number from try catch block");
//     }else{
//         $div=2/$n;
//         echo $div;
//     }

// }catch(Exception $error){
//     echo $error->getMessage();
// }



//creates my own exception
class MyException extends Exception{
    function errorMessege(){
        $err="My exception messege".$this->getMessage();
        return $err;
    }
}



function division($n){
    try{
        if($n<=0){
           throw new Exception(" Enter the valid number from try catch block <br/>");
        }
        elseif($n==3){
            throw new MyException(" Number is 3 <br/>");
        }
        else{
            $div=2/$n;
            echo $div."<br/>";
        }
    
    }catch(Exception $error){
        echo $error->getMessage();
    }
    catch(MyException $error){
        echo $error->errorMessege();
    }finally{
        // finally method, always executes weather then code has any error or not

        echo "This is from finally <br/>";
    }
}

division(2);
division(3);
division(5);


?>

