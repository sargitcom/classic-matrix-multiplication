<?php

require_once __DIR__ . '/MatrixMultiplication.php';

$a = [
    [11, 21, 11],
    [22, 12, 22],
    [21, 12, 21],
];

$b = [
    [43, 33, 44],
    [34, 44, 43],
    [44, 43, 33]
];

$result = (new ClassicMatrixMul)->mul($a, $b, 3);

$size = count($result);

for ($i  = 0; $i < $size; $i++) {
    for ($j  = 0; $j < $size; $j++) {
        echo $result[$i][$j] . " ";
    }
    echo "\n";
}
