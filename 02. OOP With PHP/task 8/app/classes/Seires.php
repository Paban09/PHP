<?php


namespace App\classes;


class Seires
{
    public $startingNumber;
    public $endingNumber;
    public $choice;
    public $result;

    public function __construct($post)
    {
        $this->startingNumber=$post["starting_number"];
        $this->endingNumber=$post["ending_number"];

       if(isset($post['choice'])){
           $this->choice=$post["choice"];
       }

    }

    public function index(){
        for($i=$this->startingNumber;$i<=$this->endingNumber;$i++){
            $this->result .= $i. " ";

        }
        return $this->result;
//        return $this->startingNumber;

    }



    public function oddEven(){
        if ($this->choice == '1')
        {
            for ($this->startingNumber; $this->startingNumber<=$this->endingNumber; $this->startingNumber++)
            {
                if ($this->startingNumber % 2 != 0)
                {
                    $this->result .= $this->startingNumber.' ';
                }
            }
            return $this->result;
        }

        if ($this->choice == '2')
        {
            for ($this->startingNumber; $this->startingNumber<=$this->endingNumber; $this->startingNumber++)
            {
                if ($this->startingNumber % 2 == 0)
                {
                    $this->result .= $this->startingNumber.' ';
                }
            }
            return $this->result;
        }

    }


    public function sumOfSeries(){
        for($i=$this->startingNumber;$i<=$this->endingNumber;$i++){
            $this->result += $i;

        }
        return $this->result;
    }


}