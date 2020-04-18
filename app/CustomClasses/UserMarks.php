<?php


namespace App\CustomClasses;


class UserMarks
{

   private $TenthMark = array(),$TwelfthMark = array();

    public function __construct()
    {
        $this->TenthMark[0] = request('tamil');
        $this->TenthMark[1]  = request('english');
        $this->TenthMark[2]  = request('maths');
        $this->TenthMark[3]  = request('science');
        $this->TenthMark[4]  = request('history');


        $this->TwelfthMark[0] = request('tamil_higher');
        $this->TwelfthMark[1] = request('english_higher');
        $this->TwelfthMark[2] = request('maths_higher');
        $this->TwelfthMark[3] = request('physics');
        $this->TwelfthMark[4] = request('chemistry');
        $this->TwelfthMark[5] = request('biology');



    }

    public function GetTenthPer()
    {

            $total=0;

            foreach ($this->TenthMark as $mark)
                $total += $mark;

           return round($total / 5, 2);
    }

    public function GetTwelfthPer()
    {

        $total=0;

        foreach ($this->TwelfthMark as $mark){
            $total += $mark;
        }


       return round($total / 12, 2);

    }
}
