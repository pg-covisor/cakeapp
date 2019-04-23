<?php

namespace App\View\Helper;

use Cake\View\Helper;

// Step 1 : Create a New Helper
class MathHelper extends Helper
{
    // Step 2 : Create a Helper Method
    public function square($number)
    {
        return $number * $number;
    }

     public function stringLength($string)
    {
        return strlen($string);
    }
}


?>