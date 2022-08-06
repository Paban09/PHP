<?php
namespace App\classes;

class Category{
    public function getAllCategory(){
        return[
            0=>[
                "id"=>1,
                "name"=>"Men's Fashion"
            ],
            1=>[
                "id"=>2,
                "name"=>"Women's Fashion"
            ],
            2=>[
                "id"=>3,
                "name"=>"Sport's Fashion"
            ]
        ];
    }
}