<?php


namespace App\classes;
use App\classes\Database;

class Product
{
    public $id,$name,$price,$stock,$description,$imageName,$directory,$tempLocation,$sql,$imageUrl,$db,$queryResult,$row,$data=[];

    public function __construct($post=null,$files=null){
        if(isset($post["name"])){
            $this->name=$post["name"];
            $this->price=$post["price"];
            $this->stock=$post["stock"];
            $this->description=$post["description"];
            if(isset($post['id'])){
                $this->id=$post['id'];
            }

        }

        if(isset($files["image"]["size"])&&$files["image"]["size"]>0){
            $this-> imageName=time().$files['image']['name'];
            $this->directory='assets/img/';
            $this->tempLocation=$files['image']['tmp_name'];
            $this->imageUrl=$this->directory.$this->imageName;

        }
    }

    public function newProduct(){

        move_uploaded_file($this->tempLocation,$this->imageUrl);
        $this->sql="INSERT INTO products(name,price,stock,description,image) VALUES ('$this->name','$this->price','$this->stock','$this->description','$this->imageUrl')";
        $this->db=new Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return "Product Info Save Successfully";
    }

    public function getAllProduct(){
        $this->sql="SELECT * FROM products";
        $this->db=new Database();
        $this->queryResult=mysqli_query($this->db->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data,$this->row);
        }
        return $this->data;

    }

    public function getProductById($id){
        $this->sql="SELECT * FROM products WHERE id='$id'";
        $this->db=new Database();
        $this->queryResult=mysqli_query($this->db->dbConnect(),$this->sql);
        $this->row=mysqli_fetch_assoc($this->queryResult);
        return $this->row;
    }

    public function updateProduct(){
//        $this->row=$this->getProductById($_POST['id']);
//        echo "<pre>";
//        print_r($this->row);
        $this->row=$this->getProductById($this->id);

        if($this->tempLocation){

            if(file_exists($this->row['image'])){
                unlink($this->row['image']);
            }

            move_uploaded_file($this->tempLocation,$this->imageUrl);

        }else{
//            $this->row=$this->getProductById($this->id);

            $this->imageUrl=$this->row['image'];
//            echo "<pre>";
//            print_r($this->row);
//            echo $this->imageUrl;
//            exit();
        }

        $this->sql="UPDATE products SET name='$this->name',price='$this->price', stock='$this->stock', description='$this->description',image='$this->imageUrl' WHERE id='$this->id'";
        $this->db=new Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return "update successfully";
    }

    public function deleteProductById($id){
        $this->sql      = "DELETE FROM products WHERE id = '$id'";
        $this->db=new Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return "Successfully Deleted";
    }

}