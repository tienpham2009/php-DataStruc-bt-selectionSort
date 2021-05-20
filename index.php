<?php

$array = [1, 9, 4.5, 6.6, 5.7, -4.5];

for ($i = 0; $i < count($array) - 1; $i++) {
    $max = $i;
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$j] > $array[$max]) {
            $max = $j;
        }
    }
    $value = $array[$max];
    $array[$max] = $array[$i];
    $array[$i] = $value;
}


echo implode(",", $array);
