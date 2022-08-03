<?php


namespace App\classes;


class HelloWorld
{
    public $messege;
    public $students=[];

    //construct is a built in method
    public function __construct()
    {
        $this->messege="Hello World";
        $this->students=[
            0=>[
                "id"    =>1,
                "name"  =>"Masud",
                "email" =>"masud@gmail.com",
                "mobile"=>"01218644624"
            ],
            1=>[
                "id"    =>2,
                "name"  =>"Rana",
                "email" =>"rana@gmail.com",
                "mobile"=>"01564646854"
            ],
            2=>[
                "id"    =>3,
                "name"  =>"Paban",
                "email" =>"paban@gmail.com",
                "mobile"=>"01348674674"
            ]
        ];

    }

    public function getAllStudent(){
        return $this->students;
    }


    public function index(){
    //echo $this->messege;


//        foreach ($this->students as $student){
//            foreach ($student as $key => $item){
//                echo $key." ".$item."  ||  ";
//            }
//            echo "<br/>";
//        }


//        echo "<pre>";
//        print_r($this->students);
//        echo "</pre>";
//
//
//        echo "<pre>";
//        var_dump($this->students);
//        echo "</pre>";
//

        


    }


}