<?php


namespace App\classes;


class News
{
    public $id,$category,$title,$description,$imageName,$directory,$tempLocation,$sql,$imageUrl,$db,$queryResult,$row,$data=[];

    public function __construct($post=null,$files=null){
        if(isset($post["title"])){

            $this->category=$post["category"];
            $this->title=$post["title"];
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


    public function createNews(){

        move_uploaded_file($this->tempLocation,$this->imageUrl);
        $this->sql="INSERT INTO news(category,title,image,description) VALUES ('$this->category','$this->title','$this->imageUrl','$this->description')";
        $this->db=new Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return "pages/dashboard.php";
    }

    public function getAllNews(){
        $this->sql="SELECT * FROM news";
        $this->db=new Database();
        $this->queryResult=mysqli_query($this->db->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data,$this->row);
        }
        return $this->data;

    }

    public function getNewsById($id){
        $this->sql="SELECT * FROM news WHERE id='$id'";
        $this->db=new Database();
        $this->queryResult=mysqli_query($this->db->dbConnect(),$this->sql);
        $this->row=mysqli_fetch_assoc($this->queryResult);
        return $this->row;
    }

    public function updateNews(){
        $this->row=$this->getNewsById($this->id);

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

        $this->sql="UPDATE news SET category='$this->category',title='$this->title',image='$this->imageUrl', description='$this->description' WHERE id='$this->id'";
        $this->db=new Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return "pages/dashboard.php";
    }


    public function deleteNewsById($id){
        $this->sql      = "DELETE FROM news WHERE id = '$id'";
        $this->db=new Database();
        mysqli_query($this->db->dbConnect(),$this->sql);
        return "deleted";
    }
}