<?php
$arr = ['first','second', 'third'];
$lastkey = array_key_last($arr);
$arr[$lastkey] = "$arr[$lastkey] - последний элемент";
print_r($arr);