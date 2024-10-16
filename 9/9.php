<?php
function sumArray($arr)
{
    $summ = 0;
    foreach($arr as $element) {
        $summ +=$element;
    }
    return $summ;
}
$arr = [1, 2, 3, 4, 5, 6];
echo sumArray($arr);