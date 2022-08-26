<?php


namespace App\classes;


class Registration
{
    public $id,$name,$email,$password,$imageName,$directory,$tempLocation,$sql,$imageUrl,$db,$queryResult,$row,$data=[];

    public function __construct($post=null,$files=null){
        if(isset($post["name"])){
            $this->name=$post["name"];
            $this->email=$post["email"];
            $this->password=$post["password"];

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


    public function newAdmin(){

        move_uploaded_file($this->tempLocation,$this->imageUrl);
        $this->sql="INSERT INTO registration(name,email,password,image) VALUES ('$this->name','$this->email','$this->password','$this->imageUrl')";
        $this->db=new Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return "pages/login.php";
    }

}