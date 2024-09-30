<?php

namespace App\Helpers;

class AstroesLabs
{
    public static function generateNumber($length = 26)
    {
        // Start with 'ES'
        $number = 'ES';

        // Generate random digits
        for ($i = 0; $i < $length - 2; $i++) {
            $number .= rand(0, 9);
        }

        return $number;
    }
}
