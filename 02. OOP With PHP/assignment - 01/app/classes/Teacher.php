<?php

    namespace App\classes;

    class Teacher{
        public function getTeacherDetails(){
            return[
                0=>[
                    "id"=>1,
                    "name"=>"Md.Uzzal",
                    "subject"=>"Physics",
                    "image"=>"t1.png"
                ],
                1=>[
                    "id"=>2,
                    "name"=>"Dipak Kumar",
                    "subject"=>"Chemistry",
                    "image"=>"t2.png"
                ],
                2=>[
                    "id"=>3,
                    "name"=>"Md. Sahidullah",
                    "subject"=>"Bangla",
                    "image"=>"t3.png"
                ],
                3=>[
                    "id"=>4,
                    "name"=>"Afsana Sultana",
                    "subject"=>"Biology",
                    "image"=>"t4.png"
                ],
                4=>[
                    "id"=>5,
                    "name"=>"Tapan Kumar",
                    "subject"=>"Mathematics",
                    "image"=>"t5.png"
                ],
                5=>[
                    "id"=>6,
                    "name"=>"Nitai Kumar",
                    "subject"=>"Mathematics",
                    "image"=>"t6.png"
                ]
            ];
        }
    }