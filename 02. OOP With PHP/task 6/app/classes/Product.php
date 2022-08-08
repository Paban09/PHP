<?php


namespace App\classes;


class Product
{
    public $products;
    public $result=[];
    public function getAllProduct(){
        return[
            0=>[
                "id"=>1,
                "category_id"=>1,
                "brand_id"=>1,
                "name"=>"Sony Xperia X2",
                "price"=>"65000",
                "description"=>"Sony xperia. Lorem In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.",
                "image"=>"product1.png"
            ],
            1=>[
                "id"=>2,
                "category_id"=>1,
                "brand_id"=>3,
                "name"=>"New Hatil Phone",
                "price"=>"22000",
                "description"=>"Hatil Phone. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.",
                "image"=>"product2.png"

            ],
            2=>[
                "id"=>3,
                "category_id"=>3,
                "brand_id"=>2,
                "name"=>"New Party Dress",
                "price"=>"30000",
                "description"=>"Party dress .In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.",
                "image"=>"product3.png"

            ],
            3=>[
                "id"=>4,
                "category_id"=>2,
                "brand_id"=>2,
                "name"=>"Fashionable T-Shirt",
                "price"=>"2500",
                "description"=>"fashionable T-Shirt In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.",
                "image"=>"product4.png"

            ],
            4=>[
                "id"=>5,
                "category_id"=>3,
                "brand_id"=>3,
                "name"=>"New Bed",
                "price"=>"35000",
                "description"=>"New Bed. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.",
                "image"=>"product5.png"

            ],
            5=>[
                "id"=>6,
                "category_id"=>4,
                "brand_id"=>3,
                "name"=>"Walton Fridge",
                "price"=>"35454",
                "description"=>"Walton Fridge. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.",
                "image"=>"product6.png"

            ],
            6=>[
                "id"=>7,
                "category_id"=>3,
                "brand_id"=>4,
                "name"=>"Iphone Ultra",
                "price"=>"45000",
                "description"=>"Iphone Ultra. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.",
                "image"=>"product7.png"

            ]

        ];

    }

    public function getProductById($id){
        $this->products=$this->getAllProduct();
        foreach ($this->products as $product){
            if($product['id']==$id){
                return $product;
            }
        }

    }

    public function getProductByCategory($category_id){
        $this->products=$this->getAllProduct();
        foreach ($this->products as $product){
            if($product['category_id']==$category_id){
                array_push($this->result,$product);
            }
        }
        return $this->result;
    }
}