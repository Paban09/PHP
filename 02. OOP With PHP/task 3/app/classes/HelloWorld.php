<?php


namespace App\classes;


class HelloWorld
{
    public $messsage;
    public $x;
    public $y;
    public $z;
    public $check;
    public $data=[];

    public function __construct()
    {
        $this->messsage = "Hello World";
        $this->x =10;
        $this->y =20;
        $this->z =30;
        $this->check = true;

        //$this->check = false;
    }

    public function index()
    {
        //echo $this->check;
        //echo !$this->check;

        //echo $this->messsage;

        //3 Logical operator: &&, ||, !

        //        echo ($this->x < $this->y && $this->y < $this->z);
        //        echo '<br/>';
        //        echo ($this->x > $this->y && $this->y > $this->z);
        //        echo '<br/>';
        //        echo ($this->x < $this->y && $this->y > $this->z);
        //        echo '<br/>';
        //        echo ($this->x > $this->y && $this->y < $this->z);
        //        echo '<br/>';

        //        echo ($this->x < $this->y || $this->y < $this->z);
        //        echo '<br/>';
        //        echo ($this->x > $this->y || $this->y > $this->z);
        //        echo '<br/>';
        //        echo ($this->x < $this->y || $this->y > $this->z);
        //        echo '<br/>';
        //        echo ($this->x > $this->y || $this->y < $this->z);
        //        echo '<br/>';


        //Statement
//            $this->x = 100;
//            $this->y = 200;
//            $this->z = $this->x + $this->y;
//            echo $this->z;
//            echo '<br/>';

        //Conditional statement(if,if else,if else if,switch)
//        $this->x = 30;
//        $this->y = 200;
//        $this->z = $this->x + $this->y;

//            if ($this->x > $this->y)
//            {
//                echo $this->z;
//            }

//            else
//            {
//                echo "Hello Bangladesh";
//            }

//            elseif($this->y > $this->z)
//            {
//                echo "Hello Bangladesh";
//            }

//            elseif($this->y < $this->z)
//            {
//                echo "Hello KawranBazar";
//            }

//            else
//            {
//                echo "Hello PHP";
//            }


//              switch ($this->x) //switch case a break use kora must. Noy j porjonto break na ashbe kaj cholobe.
//              {
//                  case 10:
//                      echo 'Hello World';
//                      break;
//                  case 20:
//                      echo 'Hello Bangladesh';
//                      break;
//                  case 30:
//                      echo 'Hello Dhaka';
//                      break;
//                  default:
//                      echo 'Hello BITM';
//              }


        //Repeated Statement(for,while,do while,foreach)
//
//        for ($this->x; $this->x >= 11; $this->x--)
//        {
//            if ($this->x == 15) {
//                break;
//            }
//            echo $this->x.'<br/>';
//        }


//        while ($this->x < 50)
//        {
//            echo $this->x.'';
//            $this->x++;
//        }


//        do
//        {
//            echo $this->x;
//            $this->x++;
//        } while ($this->x > 50);



        //Array
        $this->data=[100,200,300,"BITM","SEIP",true,false,50.20];

        echo $this->data[3]."<br/>";

        foreach ($this->data as $i){
            echo $i." ";
        }

//        echo "<pre>";
//        var_dump($this->data);
//        echo "</pre>";

        echo array_search("BITM",$this->data)."<br/>";


        //multi dimentional array
        $this->data=[
            0=>[
                "name"  =>"Masud",
                "email" =>"masud@gmail.com",
                "mobile"=>[
                    "personal"=>"012135434",
                    "gurdian"=>"465456545"
                ]
            ],
            1=>[
                "name"  =>"Rana",
                "email" =>"rana@gmail.com",
                "mobile"=>[
                    "personal"=>"012135434",
                    "gurdian"=>"465456545"
                ]
            ],
            2=>[
                "name"  =>"Paban",
                "email" =>"paban@gmail.com",
                "mobile"=>[
                    "personal"=>"012135434",
                    "gurdian"=>"465456545"
                ]
            ]
        ];


        echo $this->data[1]["name"];

        array_push( $this->data,["name"  =>"Ayan", "email" =>"paban@gmail.com", "mobile"=>"01623621442"]);
        echo $this->data[3]["name"];

        echo "<pre>";
        var_dump($this->data);
        echo "</pre>";

//        foreach ($this->data as $item){
//            echo $item['name']." ".$item['email']." ".$item['mobile']."<br/>";
//        }

        foreach ($this->data as $item){
            foreach ($item as $value){
                if(is_array($value)){
                    foreach ($value as $v_item){
                        echo " || ".$v_item;
                    }
                }else{
                    echo $value." || ";
                }
            }
            echo "<br/>";
        };




//
//        $this->data=[
//
//                "name"  =>"Masud",
//                "email" =>"masud@gmail.com",
//                "mobile"=>"01303063906"
//
//
//        ];
//        echo $this->data['name']."<br/>";
//        foreach ($this->data as $a=>$i){
//            echo "$a"."=>".$i."<br/>";
//        };

    }
}
