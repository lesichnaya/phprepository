<?php
function isPrime($number)
{
    if($number < 2) {
        return 'false';
    }
    for($x=2; $x < $number; $x++) {
        if($number % $x == 0) {
            return 'false';
        }
    }
    return 'true';     
}
echo isPrime(2);