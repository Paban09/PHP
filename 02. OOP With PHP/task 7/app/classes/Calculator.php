<?php


namespace App\classes;


class Calculator
{
    public $firstNumber;
    public $lastNumber;
    public $choice;
    public $result;

    public function __construct($data)
    {
        $this->firstNumber=$data['firstNumber'];
        $this->lastNumber=$data['lastNumber'];
        $this->choice=$data['choice'];

    }

    public function calculator(){
        switch ($this->choice){
            case "+":$this->result= $this->addition();
                      break;
            case "-":$this->result= $this-> subtraction();
                break;
            case "*":$this->result= $this->multiplication();
                break;
            case "/":$this->result= $this->division();
                break;
            case "%":$this->result= $this->modulus();
                break;

        }
        return $this->result;
    }


    public function addition(){
        return $this ->firstNumber+ $this->lastNumber;
    }

    public function subtraction(){
        return $this ->firstNumber- $this->lastNumber;
    }

    public function multiplication(){
        return $this ->firstNumber* $this->lastNumber;
    }

    public function division(){
        return $this ->firstNumber/ $this->lastNumber;
    }

    public function modulus(){
        return $this ->firstNumber%$this->lastNumber;
    }

}