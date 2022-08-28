<?php


namespace App\classes;


class Database
{
    public $user;
    public $hostname;
    public $password;
    public $databasename;
    public $dbResult;

    public function __construct()
    {
        $this->user="root";
        $this->hostname="localhost";
        $this->password="";
        $this->databasename="pabon";
    }

    public function dbConnect(){
        $this->dbResult=mysqli_connect($this->hostname,$this->user,$this->password,$this->databasename);
//        echo "<pre>";
//        print_r($this->dbResult);
        return $this->dbResult;
    }

}