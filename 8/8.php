<?php
const fruits = ['kiwi', 'apple', 'kiwi', 'orange', 'kiwi', 'apple'];
$arr = [];
foreach(fruits as $element){
    if(in_array($element, array_keys($arr))){
        $arr = array_merge($arr, array($element => $arr[$element] + 1));
    }   
    else{
        $arr = array_merge($arr, array($element  => 1));
    } 
}
foreach($arr as $key => $value) {
    $el = $arr[$key];
    echo "'$key' => $el \n";
    }