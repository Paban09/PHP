<?php

namespace App\classes;

class Product{

    public $products;
    public $results=[];

    public function getAllProducts(){
        return[
            0=>[
                "id"=>1,
                "category-id"=>1,
                "name"=>"Shirt",
                "price"=>"1600",
                "image"=>"product9.png",
                "details"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            1=>[
                "id"=>2,
                "category-id"=>1,
                "name"=>"T-Shirt",
                "price"=>"1200",
                "image"=>"product10.png",
                "details"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            2=>[
                "id"=>3,
                "category-id"=>1,
                "name"=>"Shoe",
                "price"=>"2200",
                "image"=>"product7.png",
                "details"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            3=>[
                "id"=>4,
                "category-id"=>2,
                "name"=>"Bag",
                "price"=>"3600",
                "image"=>"product5.png",
                "details"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            4=>[
                "id"=>5,
                "category-id"=>2,
                "name"=>"Glass",
                "price"=>"1500",
                "image"=>"product8.png",
                "details"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            5=>[
                "id"=>6,
                "category-id"=>2,
                "name"=>"Hill-Shoe",
                "price"=>"6300",
                "image"=>"product1.png",
                "details"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            6=>[
                "id"=>7,
                "category-id"=>3,
                "name"=>"Chelsea-Kit",
                "price"=>"1200",
                "image"=>"product14.png",
                "details"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            7=>[
                "id"=>8,
                "category-id"=>3,
                "name"=>"Arsenal-Kit",
                "price"=>"1200",
                "image"=>"product11.png",
                "details"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
            8=>[
                "id"=>9,
                "category-id"=>3,
                "name"=>"Brighton-Kit",
                "price"=>"1200",
                "image"=>"product13.png",
                "details"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ]

        ];
    }

    public function getAllCategorisedProducts($category_id){
        $this->products=$this->getAllProducts();
        foreach($this->products as $categorised_product){
                if($categorised_product["category-id"]==$category_id){
                   array_push( $this->results,$categorised_product);
                }
        }
        return $this->results;
    }

    public function getProductDetails($product_id){
        $this->products=$this->getAllProducts();
        foreach($this->products as $product){
            if($product["id"]==$product_id){
                array_push( $this->results,$product);
            }
        }
        return $this->results;

    }


}