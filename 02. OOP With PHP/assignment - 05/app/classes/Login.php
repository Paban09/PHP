<?php


namespace App\classes;

class Login{
   
	 
	public $email,$password,$sql,$queryResult;


	public $hasError=false;

    public function __construct($post)
    {
        $this->email=$post["email"];
        $this->password=$post["password"];
    }


    public function authenticateUser(){
        $this->sql = "select * from registration where eamil='$this->email' and password='$this->password'";
        $this->db=new Database();
        $this->queryResult=mysqli_query($this->db->dbConnect(),$this->sql);
            echo "<pre>";
            echo($this->queryResult);
            echo "</pre>";

        if(count($this->queryResult)>0){
            return "pages/dashboard.php";
        }
        return "pages/login.php";
    }

}

?>