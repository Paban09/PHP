<?php


namespace App\classes;


class Category
{
    public function getAllCategoty(){
        return[
            0=>[
                "id"    =>1,
                "name"  =>"Electronics"
            ],
            1=>[
                "id"    =>2,
                "name"  =>"Man Fasion"
            ],
            2=>[
                "id"    =>3,
                "name"  =>"Home and Lifestyle"
            ],
            3=>[
                "id"    =>4,
                "name"  =>"Home and Fashion"
            ],
            4=>[
                "id"    =>5,
                "name"  =>"Sports"
            ]
        ];
    }
}