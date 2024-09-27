<?php

$summ = readline();
$percent = readline();
if ($summ <= 100000) {
    echo "total = " . $summ * (1 + $percent / 100);
} else {
    echo "total = " . $summ  * (1 + (($percent + 0.5) / 100));
}