<?php


namespace App\classes;


class Product
{
    public function getAllProduct(){
        return[
            0=>[
              "id"=>1,
              'name'=>"new Tshirt",
              "price"=>1560,
              "image"=>'1.png'
            ],
            1=>[
                "id"=>2,
                'name'=>"Mordern Tshirt",
                "price"=>1250,
                "image"=>'2.png'
            ],
            2=>[
                "id"=>3,
                'name'=>"new Sari",
                "price"=>12560,
                "image"=>'3.png'
            ],
            3=>[
                "id"=>4,
                'name'=>"Sari",
                "price"=>11600,
                "image"=>'4.png'
            ]
        ];
    }

}