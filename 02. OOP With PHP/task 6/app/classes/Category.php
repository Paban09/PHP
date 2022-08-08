<?php


namespace App\classes;


class Category
{
    public function getAllCategory(){
        return[
            0=>[
                "id"=>1,
                "name"=>"Electronics"
            ],
            1=>[
                "id"=>2,
                "name"=>"Man fashion"
            ],
            2=>[
                "id"=>3,
                "name"=>"Women Fashion"
            ],
            3=>[
                "id"=>4,
                "name"=>"Home and Lifestyle"
            ]


        ];
    }
}