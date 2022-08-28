<?php


namespace App\classes;
use App\classes\Database;

class Auth
{
    private $email;
    private $password;
    private $db;
    private $user;
    private $sql;
    private $queryResult;

    public function __construct($post=null){
        if(isset($post['email'])){
            $this->email=$post['email'];
            $this->password=md5($post['password']);
        }
    }

    public function login(){

        $this->sql="SELECT * FROM users WHERE email='$this->email' AND password='$this->password'";
        $this->db=new Database();
        $this->queryResult=mysqli_query($this->db->dbConnect(),$this->sql);

        $this->user=mysqli_fetch_assoc($this->queryResult);

//        echo "<pre>";
//        print_r($this->user);
//        echo "</pre>";
        if($this->user){

            //session e kichu rakhar jnno session start korte hbe
            session_start();

            $_SESSION['name'] = $this->user['name'];
            $_SESSION['id']   = $this->user['id'];


            header("Location: action.php?page=dashboard");
        }else{
            return "Invalid User";
        }
    }
    public function logout(){
        session_start();
        unset($_SESSION['name']);
        unset($_SESSION['id']);
        header("Location:action.php?page=login");
    }

}