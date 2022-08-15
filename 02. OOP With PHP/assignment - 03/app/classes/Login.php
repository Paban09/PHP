<?php


namespace App\classes;

class Login{
   
	 
	public $username="";
	public $password="";

	public $hasError=false;

    public function __construct($post)
    {
        $this->username=$post["username"];
        $this->password=$post["password"];
    }


    public function authenticateUser(){
        $query = "select * from seller where s_name='$this->username' and s_password='$this->password'";
        $rs = get($query);
        if(count($rs)>0){
            header("Location:action.php?page=dashboard");
        }
        echo "Invalid User!";
    }

}

?>