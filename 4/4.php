<?php
$cost = readline();
$age = readline();
if ($age > 60 and $cost <= 5000) {
    echo "total cost=".$cost * 0.9;
} elseif ($age > 60 and $cost > 5000) {
    echo "total cost=".$cost * 0.83;
} elseif ($cost > 5000 and $age <= 60) {
    echo "total cost=".$cost * 0.93;
} else {
    echo $cost;
}