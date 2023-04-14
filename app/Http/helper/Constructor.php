<?php


namespace App\Http\Helper;

use Illuminate\Support\Traits\ForwardsCalls;

class Constructor
{
    //use ForwardsCalls;
    private  $number = '';

    public function __construct($number)
    {

        $this->number = $number;
    }

    public function __call($method, $params)
    {
        // dd("axay");
        return "ok";
    }
}
