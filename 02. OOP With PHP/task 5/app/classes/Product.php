<?php


namespace App\classes;


class Product
{
    public $products;
    public $result=[];
    public function getAllProducts(){
        return[

            0=>[
                "id"         =>"1",
                "category_id"=>1,
                "name"       =>"Shoe",
                "price"      =>34000,
                "image"      =>'product1.png',
                'description'=>"Best color grading tv on market. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            1=>[
                "id"         =>"2",
                "category_id"=>1,
                "name"       =>"Belt",
                "price"      =>45000,
                "image"      =>'product2.png',
                'description'=>"Best cooling system on market. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            2=>[
                "id"         =>"3",
                "category_id"=>2,
                "name"       =>"Hat",
                "price"      =>45000,
                "image"      =>'product3.png',
                'description'=>"Best water cooler available on market. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            3=>[
                "id"         =>"4",
                "category_id"=>2,
                "name"       =>"Bag",
                "price"      =>45000,
                "image"      =>'product4.png',
                'description'=>"Best fan available on market. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            4=>[
                "id"         =>"5",
                "category_id"=>3,
                "name"       =>"Bag",
                "price"      =>45000,
                "image"      =>'product5.png',
                'description'=>"Best fan available on market. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            5=>[
                "id"         =>"6",
                "category_id"=>3,
                "name"       =>"Belt",
                "price"      =>45000,
                "image"      =>'product6.png',
                'description'=>"Best fan available on market. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

            ]

        ];
    }

    public function getProductByCategoryId($categoryId){
        $this->products=$this->getAllProducts();
        foreach ($this->products as $product){
            if($product['category_id']==$categoryId){
                array_push($this->result,$product);
            }
        }
        return $this->result;
    }
}